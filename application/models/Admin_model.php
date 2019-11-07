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
}
