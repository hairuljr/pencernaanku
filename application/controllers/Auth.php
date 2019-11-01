<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function registrasi()
	{
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
}
