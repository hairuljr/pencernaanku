<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function index()
  {
    //form validasi
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    //jika validasi gagal kembalikn ke halaman login
    if ($this->form_validation->run() == false) {
      $data['judul'] = 'Login Page';
      $this->load->view('auth/login', $data);

      //jika validasi sukses menuju ke method _login
    } else {
      $this->_login();
    }
  }
}
