<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rule extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model', 'admin');
    if (!$this->session->userdata('email')) {
      redirect('auth');
    }
  }

  public function diare()
  {
    $data['judul'] = 'Admin SP';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['subMenu'] = $this->db->get_where('sub_menu_user', ['id' => 6])->row_array();
    $data['rule'] = $this->admin->getRules();
    $this->load->model('Rule_model', 'rule');
    $data['diare'] = $this->rule->getRuleDiare();
    $data['penyakit'] = $this->db->get('penyakit')->result_array();
    $data['gejala'] = $this->db->get('gejala')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/tbl_rule/rule_diare');
    $this->load->view('templates/footer');
    $this->load->view('admin/modals/modal_tambah_rule');
    $this->load->view('admin/modals/modal_edit_rule', $data);
  }

  public function disentri()
  {
    $data['judul'] = 'Admin SP';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['subMenu'] = $this->db->get_where('sub_menu_user', ['id' => 6])->row_array();
    $data['rule'] = $this->admin->getRules();
    $this->load->model('Rule_model', 'rule');
    $data['disentri'] = $this->rule->getRuleDisentri();
    $data['penyakit'] = $this->db->get('penyakit')->result_array();
    $data['gejala'] = $this->db->get('gejala')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/tbl_rule/rule_disentri');
    $this->load->view('templates/footer');
    $this->load->view('admin/modals/modal_tambah_rule');
    $this->load->view('admin/modals/modal_edit_rule', $data);
  }

  public function apendictis()
  {
    $data['judul'] = 'Admin SP';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['subMenu'] = $this->db->get_where('sub_menu_user', ['id' => 6])->row_array();
    $data['rule'] = $this->admin->getRules();
    $this->load->model('Rule_model', 'rule');
    $data['apendictis'] = $this->rule->getRuleApendictis();
    $data['penyakit'] = $this->db->get('penyakit')->result_array();
    $data['gejala'] = $this->db->get('gejala')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/tbl_rule/rule_apendictis');
    $this->load->view('templates/footer');
    $this->load->view('admin/modals/modal_tambah_rule');
    $this->load->view('admin/modals/modal_edit_rule', $data);
  }
  public function maag()
  {
    $data['judul'] = 'Admin SP';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['subMenu'] = $this->db->get_where('sub_menu_user', ['id' => 6])->row_array();
    $data['rule'] = $this->admin->getRules();
    $this->load->model('Rule_model', 'rule');
    $data['maag'] = $this->rule->getRuleMaag();
    $data['penyakit'] = $this->db->get('penyakit')->result_array();
    $data['gejala'] = $this->db->get('gejala')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/tbl_rule/rule_maag');
    $this->load->view('templates/footer');
    $this->load->view('admin/modals/modal_tambah_rule');
    $this->load->view('admin/modals/modal_edit_rule', $data);
  }
  public function keracunan()
  {
    $data['judul'] = 'Admin SP';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['subMenu'] = $this->db->get_where('sub_menu_user', ['id' => 6])->row_array();
    $data['rule'] = $this->admin->getRules();
    $this->load->model('Rule_model', 'rule');
    $data['keracunan'] = $this->rule->getRuleKeracunan();
    $data['penyakit'] = $this->db->get('penyakit')->result_array();
    $data['gejala'] = $this->db->get('gejala')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/tbl_rule/rule_keracunan');
    $this->load->view('templates/footer');
    $this->load->view('admin/modals/modal_tambah_rule');
    $this->load->view('admin/modals/modal_edit_rule', $data);
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
