<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Diagnosa_model', 'diagnosa');
    if (!$this->session->userdata('email')) {
      redirect('home');
    }
  }
  public function hasil()
  {
    //kosongkan temporary sebelum dimulainya diagnosa
    $this->diagnosa->kosongkanTemp();
    $this->diagnosa->kosongkanTempFinal();
    //tangkap checkbox gejala
    $gejala = $this->input->post('gejala');
    foreach ($gejala as $g) {
      $data = [
        'id_gejala' => $g
      ];
      //insert checked checkbox ke temporary
      $this->db->insert('temporary', $data);
    }
    //dari id_gejala yg ada ditemporary, insert ke temporary final with id_penyakit & probabiliasnya
    $temp = $this->diagnosa->insertTempFinal();
    $this->db->insert_batch('temporary_final', $temp);

    //ambil bobot probabilitas utk setiap penyakit
    $probDiare = $this->diagnosa->getProbDiare();
    $probDisentri = $this->diagnosa->getProbDisentri();
    $probApendictis = $this->diagnosa->getProbApendictis();
    $probMaag = $this->diagnosa->getProbMaag();
    $probKeracunan = $this->diagnosa->getProbKeracunan();
    //siapkan datanya kedalam array untuk dijumlahkan
    $data = [
      'diare' => $probDiare,
      'disentri' => $probDisentri,
      'apendictis' => $probApendictis,
      'maag' => $probMaag,
      'keracunan' => $probKeracunan
    ];
    //jumlah probabilitas setiap penyakit atas gejala yang dipilih
    //∑P(F|Hk)xP(Hk)
    $jmlProb = array_sum($data);
    //pembagian ini sebagai pembanding antara bobot probabilitas dgn jml probabilitas
    //untuk mendapatkan nilai/hasil diagnosa terbesarnya
    $diare = @($probDiare / $jmlProb) . '<br>';
    $disentri = @($probDisentri / $jmlProb) . '<br>';
    $apendictis = @($probApendictis / $jmlProb) . '<br>';
    $maag = @($probMaag / $jmlProb) . '<br>';
    $keracunan = @($probKeracunan / $jmlProb) . '<br>';

    //passing data utk di query ke field hasil_probabilitas
    $this->diagnosa->hasilProbDiare($diare);
    $this->diagnosa->hasilProbDisentri($disentri);
    $this->diagnosa->hasilProbApendictis($apendictis);
    $this->diagnosa->hasilProbMaag($maag);
    $this->diagnosa->hasilProbKeracunan($keracunan);

    //query utk passing data penyakit ke halaman Hasil Diagnosa User
    $data['hasil'] = $this->diagnosa->diagnosis();
    $data['hasilMax'] = $this->diagnosa->diagnosisMax();
    $data['penyakit'] = $this->db->get('penyakit')->result_array();
    //insert user yg melakukan diagnosa
    $this->diagnosa->insertDaftarKonsult();
    $this->load->view('home/hasil_diagnosa', $data);
  }
}
