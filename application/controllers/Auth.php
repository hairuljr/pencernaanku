<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Auth_model', 'auth');
  }
  public function index()
  {
    //cek jika sudah ada login session pada user
    if ($this->session->userdata('email')) {
      redirect('user');
    }
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
  private function _login()
  {
    //mendapatkan inputan user dari form login
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    //query ke tbl user utk mendapatkn semua data hanya satu user
    $auth = $this->auth->getUser($email);
    // cek jika user dgn email yg diinputkn ada apa tdk di tbl user
    if ($auth) {
      // cek jika usernya aktif atau sudah verifikasi apa belum
      if ($auth['is_active'] == 1) {
        // cek password yang di inputkan user dgn tbl user
        if (password_verify($password, $auth['password'])) {
          $data = [
            'email' => $auth['email'],
            'role_id' => $auth['role_id']
          ];
          //membuat session
          $this->session->set_userdata($data);
          //login berhasil alihkan ke halaman masing-masing rolenya
          if ($auth['role_id'] == 1) {
            redirect('admin');
          } else {
            redirect('diagnosa');
          }
          //password salah
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
          redirect('auth');
        }
        //Email belum diverifikasi
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diverifiaksi!</div>');
        redirect('auth');
      }
      //email tidak terdaftar
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
      redirect('auth');
    }
  }
  public function registrasi()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }
    //form validasi
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'Password tidak cocok!',
      'min_length' => 'Password kurang panjang!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
    //jika form validasi gagal kembalikn ke halaman registrasi
    if ($this->form_validation->run() == false) {
      $data['judul'] = 'Register Page';
      $this->load->view('auth/registrasi', $data);
      //jika validasi sukses, tampung data inputan utk di insert ke tbl user
    } else {
      $this->auth->daftar();
      //pesan flashdata sukses registrasi
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Kamu sudah terdaftar. Silahkan login</div>');
      redirect('auth');
    }
  }
  public function logout()
  {
    //hapus session email
    $this->session->unset_userdata('email');
    //hapus session role_id
    $this->session->unset_userdata('role_id');
    //pesan flashdata telah berhasil logout
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu berhasil logout!</div>');
    redirect('auth');
  }
  public function block()
  {
    $data['judul'] = 'Akses Tidak Diizinkan!';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('auth/blocked', $data);
  }
}
