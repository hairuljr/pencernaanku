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
}
