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
    return $this->db->get_where('artikel_kategori', ['id' => 1])->row_array();
  }
  public function getKatArtikel2()
  {
    return $this->db->get_where('artikel_kategori', ['id' => 2])->row_array();
  }
  public function tambahArtikel()
  {
    $data = [
      'judul' => $this->input->post('judul'),
      'image' => $this->upload->data('file_name'),
      'tanggal' => $this->input->post('tanggal'),
      'kategori' => $this->input->post('kategori'),
      'isi' => $this->input->post('isi')
    ];
    $this->db->insert('artikel', $data);
  }

  public function editArtikel()
  {
    $data = [
      'judul' => $this->input->post('judul'),
      'tanggal' => $this->input->post('tanggal'),
      'kategori' => $this->input->post('kategori'),
      'isi' => $this->input->post('isi')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('artikel', $data);
  }

  public function hapusArtikel($id)
  {
    $data['artikel'] = $this->db->get_where('artikel', ['id' => $id])->row_array();
    $this->db->where('id', $id);
    $this->db->delete('artikel');
  }
}
