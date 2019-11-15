<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
  public function tambahGejala()
  {
    $data = [
      'kode' => $this->input->post('kode'),
      'gejala' => $this->input->post('gejala'),
    ];
    $this->db->insert('gejala', $data);
  }

  public function editGejala()
  {
    $data = [
      "kode" => $this->input->post('kode', true),
      "gejala" => $this->input->post('gejala', true)
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('gejala', $data);
  }

  public function hapusGejala($id)
  {
    $data['gejala'] = $this->db->get_where('gejala', ['id' => $id])->row_array();
    $this->db->where('id', $id);
    $this->db->delete('gejala');
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
