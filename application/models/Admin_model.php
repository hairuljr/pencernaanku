<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
  public function tambahGejala()
  {
    $data = [
      'kode' => $this->input->post('kode'),
      'pengetahuan' => $this->input->post('pengetahuan'),
    ];
    $this->db->insert('pengetahuan', $data);
  }

  public function editGejala()
  {
    $data = [
      "kode" => $this->input->post('kode', true),
      "pengetahuan" => $this->input->post('pengetahuan', true)
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('pengetahuan', $data);
  }

  public function hapusGejala($id)
  {
    $data['pengetahuan'] = $this->db->get_where('pengetahuan', ['id' => $id])->row_array();
    $this->db->where('id', $id);
    $this->db->delete('pengetahuan');
  }

  public function tambahPenyakit()
  {
    $data = [
      'kode' => $this->input->post('kode'),
      'nama_penyakit' => $this->input->post('nama_penyakit'),
      'informasi' => $this->input->post('informasi'),
      'saran' => $this->input->post('saran')
    ];
    $this->db->insert('penyakit', $data);
  }

  public function editPenyakit()
  {
    $data = [
      'kode' => $this->input->post('kode'),
      'nama_penyakit' => $this->input->post('nama_penyakit'),
      'informasi' => $this->input->post('informasi'),
      'saran' => $this->input->post('saran')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('penyakit', $data);
  }

  public function hapusPenyakit($id)
  {
    $data['penyakit'] = $this->db->get_where('penyakit', ['id' => $id])->row_array();
    $this->db->where('id', $id);
    $this->db->delete('penyakit');
  }

  public function tambahPengetahuan()
  {
    $data = [
      'nama_penyakit' => $this->input->post('nama_penyakit'),
      'nama_gejala' => $this->input->post('nama_gejala'),
      'param1' => $this->input->post('param1'),
      'param2' => $this->input->post('param2')
    ];
    $this->db->insert('pengetahuan', $data);
  }

  public function editPengetahuan()
  {
    $data = [
      'nama_penyakit' => $this->input->post('nama_penyakit'),
      'nama_gejala' => $this->input->post('nama_gejala'),
      'param1' => $this->input->post('param1'),
      'param2' => $this->input->post('param2')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('pengetahuan', $data);
  }

  public function hapusPengetahuan($id)
  {
    $data['pengetahuan'] = $this->db->get_where('pengetahuan', ['id' => $id])->row_array();
    $this->db->where('id', $id);
    $this->db->delete('pengetahuan');
  }

  public function editMember()
  {
    $data = [
      "name" => $this->input->post('name', true),
      "email" => $this->input->post('email', true),
      "is_active" => $this->input->post('is_active', true),
      "date_created" => $this->input->post('date_created', true)
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user', $data);
  }
  public function hapusMember($id)
  {
    $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();
    $this->db->where('id', $id);
    $this->db->delete('user');
  }
}
