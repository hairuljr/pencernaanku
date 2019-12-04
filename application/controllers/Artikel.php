<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Artikel_model', 'artikel');
    $this->load->library('form_validation');
  }

  public function tambah()
  {
    $data['judul'] = 'Form Tambah Artikel';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['artikel_kat'] = $this->artikel->getKatArtikel();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/artikel/form_tambah', $data);
    $this->load->view('templates/footer');
  }
  public function edit($id)
  {
    $data['judul'] = 'Form Edit Artikel';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['artikel_kat'] = $this->artikel->getKatArtikel();
    $data['artikel'] = $this->artikel->getArtikelById($id);
    $this->load->model('Artikel_model', 'artikel');
    $data['test'] = $this->artikel->test();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/artikel/form_edit', $data);
    $this->load->view('templates/footer');
  }

  public function tambahArtikel()
  {
    $gambar = $_FILES['image']['name'];
    if ($gambar = '') {
      # code...
    } else {
      $config['upload_path']          = './assets/images/artikel/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 2048;
      $config['max_width']            = 8000;
      $config['max_height']           = 9000;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {
        echo "Gagal";
      } else {
        $this->artikel->tambahArtikel();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('admin/artikel');
      }
    }
  }

  public function editArtikel()
  {
    $data['artikel'] = $this->artikel->getArtikel();
    // cek jika ada gambar yang akan diupload
    $upload_image = $_FILES['image']['name'];

    if ($upload_image) {
      $config['upload_path']          = './assets/images/artikel/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 4096;
      $config['max_width']            = 8000;
      $config['max_height']           = 9000;
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
        $old_image = $data['artikel']['image'];
        if ($old_image != 'artikel.jpg') {
          unlink(FCPATH . 'assets/images/artikel/' . $old_image);
        }
        $new_image = $this->upload->data('file_name');
        $this->db->set('image', $new_image);
      } else {
        echo $this->upload->dispay_errors();
      }
    }
    $this->artikel->editArtikel();
    $this->session->set_flashdata('flash', 'Diubah');
    redirect('admin/artikel');
  }

  public function hapusArtikel($id)
  {
    $this->artikel->hapusArtikel($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/artikel');
  }
}
