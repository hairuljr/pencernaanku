<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model', 'admin');
  }
  public function tambahGejala()
  {
    $this->admin->tambahGejala();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gejala sudah ditambahkan!</div>');
    redirect('admin/gejala');
  }
}
