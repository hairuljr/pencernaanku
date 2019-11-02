<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
  public function editProfil()
  {
    $name = htmlspecialchars($this->input->post('name', true));
    $email = htmlspecialchars($this->input->post('email', true));
    //query insert data ke tbl user
    $this->db->set('name', $name);
    $this->db->where('email', $email);
    $this->db->update('user');
  }
}
