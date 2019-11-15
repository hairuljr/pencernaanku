<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengetahuan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model', 'admin');
  }
  public function tambahPengetahuan()
  {
    $this->admin->tambahPengetahuan();
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('admin/pengetahuan');
  }

  public function editPengetahuan()
  {
    $this->admin->editPengetahuan();
    $this->session->set_flashdata('flash', 'Diubah');
    redirect('admin/pengetahuan');
  }

  public function hapusPengetahuan($id)
  {
    $this->admin->hapusPengetahuan($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/pengetahuan');
  }
}
