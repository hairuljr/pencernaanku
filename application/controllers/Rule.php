<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rule extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model', 'admin');
  }
  public function tambahRule()
  {
    $this->admin->tambahRule();
    $this->session->set_flashdata('flash', 'Ditambahkan');
    redirect('admin/rule');
  }

  public function editRule()
  {
    $this->admin->editRule();
    $this->session->set_flashdata('flash', 'Diubah');
    redirect('admin/rule');
  }

  public function hapusRule($id)
  {
    $this->admin->hapusRule($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/rule');
  }
}
