<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
  public function getArtikelById($id)
  {
    return $this->db->get_where('artikel', ['id' => $id])->row_array();
  }
  public function getArtikel()
  {
    return $this->db->get('artikel')->result_array();
  }
  public function getKatArtikel()
  {
    return $this->db->get('artikel_kategori')->result_array();
  }
  public function getKatArtikel1()
  {
    return $this->db->get_where('artikel_kategori', ['id_kat_kategori' => 1])->row_array();
  }
  public function getKatArtikel2()
  {
    return $this->db->get_where('artikel_kategori', ['id_kat_kategori' => 2])->row_array();
  }
  public function tambahArtikel()
  {
    $date = $this->input->post('tanggal');
    $timestamp = strtotime($date);
    if ($timestamp === FALSE) {
      $timestamp = strtotime(str_replace('/', '-', $date));
    }
    $tanggal = date('Y-m-d', $timestamp);
    if (isset($_POST['save_text'])) {
      $textaera = $_POST['php_post_text'];
    }
    $data = [
      'judul' => $this->input->post('judul'),
      'image' => $this->upload->data('file_name'),
      'tanggal' => $tanggal,
      'id_kat_kategori' => $this->input->post('kategori'),
      'isi' => $textaera
    ];
    $this->db->insert('artikel', $data);
  }

  public function editArtikel()
  {
    $date = $this->input->post('tanggal');
    $timestamp = strtotime($date);
    if ($timestamp === FALSE) {
      $timestamp = strtotime(str_replace('/', '-', $date));
    }
    $tanggal = date('Y-m-d', $timestamp);
    if (isset($_POST['save_text'])) {
      $textaera = $_POST['php_post_text'];
    }
    $data = [
      'judul' => $this->input->post('judul'),
      'image' => $this->upload->data('file_name'),
      'tanggal' => $tanggal,
      'id_kat_kategori' => $this->input->post('kategori'),
      'isi' => $textaera
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('artikel', $data);
  }

  public function hapusArtikel($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('artikel');
    $row = $query->row();
    unlink("./assets/images/artikel/$row->image");
    $this->db->where('id', $id);
    $this->db->delete('artikel');
  }
}
