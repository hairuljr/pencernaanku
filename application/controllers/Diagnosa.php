<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
  public function index()
  {
    $this->load->view('diagnosa/index');
  }
}
