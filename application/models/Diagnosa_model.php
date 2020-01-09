<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa_model extends CI_Model
{
  public function kosongkanTemp()
  {
    return $this->db->truncate('temporary');
  }
  public function kosongkanTempFinal()
  {
    return $this->db->truncate('temporary_final');
  }
  public function getProbDiare()
  {
    $this->db->select('*');
    $this->db->from('temporary_final');
    $this->db->where('id_penyakit', 1);
    $data = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($data as $row) {
      //perkalian antar setiap id_gejala x probabilitasnya
      $jumlah = $jumlah * $row->probabilitas;
    }
    $this->db->select('*');
    $this->db->from('penyakit');
    $this->db->where('id_penyakit', 1);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      //P(H1|F)
      $hasil = $jumlah * $rowku->probabilitas;
    }
    return $hasil;
  }
  public function getProbDisentri()
  {
    $this->db->select('*');
    $this->db->from('temporary_final');
    $this->db->where('id_penyakit', 3);
    $data = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($data as $row) {
      //perkalian antar setiap id_gejala x probabilitasnya
      $jumlah = $jumlah * $row->probabilitas;
    }
    $this->db->select('*');
    $this->db->from('penyakit');
    $this->db->where('id_penyakit', 3);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      //P(H2|F)
      $hasil = $jumlah * $rowku->probabilitas;
    }
    return $hasil;
  }
  public function getProbApendictis()
  {
    $this->db->select('*');
    $this->db->from('temporary_final');
    $this->db->where('id_penyakit', 4);
    $data = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($data as $row) {
      $jumlah = $jumlah * $row->probabilitas;
    }
    $this->db->select('*');
    $this->db->from('penyakit');
    $this->db->where('id_penyakit', 4);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      //P(H3|F)
      $hasil = $jumlah * $rowku->probabilitas;
    }
    return $hasil;
  }
  public function getProbMaag()
  {
    $this->db->select('*');
    $this->db->from('temporary_final');
    $this->db->where('id_penyakit', 5);
    $data = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($data as $row) {
      $jumlah = $jumlah * $row->probabilitas;
    }
    $this->db->select('*');
    $this->db->from('penyakit');
    $this->db->where('id_penyakit', 5);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      //P(H4|F)
      $hasil = $jumlah * $rowku->probabilitas;
    }
    return $hasil;
  }
  public function getProbKeracunan()
  {
    $this->db->select('*');
    $this->db->from('temporary_final');
    $this->db->where('id_penyakit', 6);
    $data = $this->db->get()->result();
    //inisialisasi untuk total probabilitas
    $jumlah = 1;
    foreach ($data as $row) {
      $jumlah = $jumlah * $row->probabilitas;
    }
    $this->db->select('*');
    $this->db->from('penyakit');
    $this->db->where('id_penyakit', 6);
    $data = $this->db->get()->result();
    foreach ($data as $rowku) {
      ////P(H5F)
      $hasil = $jumlah * $rowku->probabilitas;
    }
    return $hasil;
  }
  public function insertTempFinal()
  {
    $query = "SELECT `rule`.`id_penyakit`,`rule`.`id_gejala`, `rule`.`probabilitas` from `rule` JOIN `temporary` ON `rule`.`id_gejala` = `temporary`.`id_gejala` ORDER BY `rule`.`id_penyakit` ASC";
    return $this->db->query($query)->result_array();
  }

  //fungsi hasilProb adalah untuk mengubah field hasil_probabilitas sebagai tempat
  //untuk menampung hasil/nilai perhitungan akhir daripada Metode Bayes
  //yang mana field hasil_probabilitas inilah yg akan diquery utk mengetahui penyakit apa
  public function hasilProbDiare($diare)
  {
    $dataDiare = [
      'hasil_probabilitas' => $diare
    ];
    $this->db->where('id_penyakit', 1);
    $this->db->update('temporary_final', $dataDiare);
  }
  public function hasilProbDisentri($disentri)
  {
    $dataDisentri = [
      'hasil_probabilitas' => $disentri
    ];
    $this->db->where('id_penyakit', 3);
    $this->db->update('temporary_final', $dataDisentri);
  }
  public function hasilProbApendictis($apendictis)
  {
    $dataApendictis = [
      'hasil_probabilitas' => $apendictis
    ];
    $this->db->where('id_penyakit', 4);
    $this->db->update('temporary_final', $dataApendictis);
  }
  public function hasilProbMaag($maag)
  {
    $dataMaag = [
      'hasil_probabilitas' => $maag
    ];
    $this->db->where('id_penyakit', 5);
    $this->db->update('temporary_final', $dataMaag);
  }
  public function hasilProbKeracunan($keracunan)
  {
    $dataKeracunan = [
      'hasil_probabilitas' => $keracunan
    ];
    $this->db->where('id_penyakit', 6);
    $this->db->update('temporary_final', $dataKeracunan);
  }
  //query ambil 3 penyakit tertinggi hasil_probabilitasnya
  public function diagnosis()
  {
    $query = "SELECT DISTINCT `temporary_final`.`id_penyakit`, `temporary_final`.`hasil_probabilitas`, `penyakit`.* FROM `temporary_final` JOIN `penyakit` ON `temporary_final`.`id_penyakit` = `penyakit`.`id_penyakit` ORDER BY `temporary_final`.`hasil_probabilitas` DESC LIMIT 3";
    return $this->db->query($query)->result_array();
  }

  //query ambil penyakit tertinggi yg menjadi penyakit utama daripada hasil diagnosa
  public function diagnosisMax()
  {
    $query = "SELECT `temporary_final`.`id`, MAX(hasil_probabilitas) as `hasil_probabilitas`, `penyakit`.* FROM temporary_final JOIN `penyakit` ON `temporary_final`.`id_penyakit` = `penyakit`.`id_penyakit` GROUP BY id_penyakit ORDER BY `hasil_probabilitas` DESC LIMIT 1";
    return $this->db->query($query)->result_array();
  }

  public function insertDaftarKonsult()
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email', $this->session->userdata('email'));
    $data = $this->db->get()->result();
    foreach ($data as $row) {
      $idUser = $row->id;
      $nama = $row->name;
    }
    $penyakit = $this->diagnosisMax();
    foreach ($penyakit as $p) {
      $penyakitnya = $p['nama_penyakit'];
      $nilai = floor($p['hasil_probabilitas'] * 100);
    }
    $data = [
      'tanggal' => date('Y-m-d'),
      'id_user' => $idUser,
      'name' => $nama,
      'nama_penyakit' => $penyakitnya,
      'nilai' => $nilai
    ];
    return $this->db->insert('daftar_konsultasi', $data);
  }
}
