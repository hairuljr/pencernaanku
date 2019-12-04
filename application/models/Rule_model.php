<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rule_model extends CI_Model
{
  public function getRuleDiare()
  {
    $queryRule = "SELECT `rule`.`id`,`penyakit`.`nama_penyakit`,`gejala`.`gejala`,`rule`.`probabilitas`  FROM `penyakit` JOIN `rule` ON `penyakit`.`id_penyakit`=`rule`.`id_penyakit` JOIN `gejala` ON `rule`.`id_gejala`=`gejala`.`id_gejala` WHERE `rule`.`id_penyakit` = 1
                        ";
    return $this->db->query($queryRule)->result_array();
  }
  public function getRuleDisentri()
  {
    $queryRule = "SELECT `rule`.`id`,`penyakit`.`nama_penyakit`,`gejala`.`gejala`,`rule`.`probabilitas`  FROM `penyakit` JOIN `rule` ON `penyakit`.`id_penyakit`=`rule`.`id_penyakit` JOIN `gejala` ON `rule`.`id_gejala`=`gejala`.`id_gejala` WHERE `rule`.`id_penyakit` = 3
                        ";
    return $this->db->query($queryRule)->result_array();
  }
  public function getRuleApendictis()
  {
    $queryRule = "SELECT `rule`.`id`,`penyakit`.`nama_penyakit`,`gejala`.`gejala`,`rule`.`probabilitas`  FROM `penyakit` JOIN `rule` ON `penyakit`.`id_penyakit`=`rule`.`id_penyakit` JOIN `gejala` ON `rule`.`id_gejala`=`gejala`.`id_gejala` WHERE `rule`.`id_penyakit` = 4
                        ";
    return $this->db->query($queryRule)->result_array();
  }
  public function getRuleMaag()
  {
    $queryRule = "SELECT `rule`.`id`,`penyakit`.`nama_penyakit`,`gejala`.`gejala`,`rule`.`probabilitas`  FROM `penyakit` JOIN `rule` ON `penyakit`.`id_penyakit`=`rule`.`id_penyakit` JOIN `gejala` ON `rule`.`id_gejala`=`gejala`.`id_gejala` WHERE `rule`.`id_penyakit` = 5
                        ";
    return $this->db->query($queryRule)->result_array();
  }
  public function getRuleKeracunan()
  {
    $queryRule = "SELECT `rule`.`id`,`penyakit`.`nama_penyakit`,`gejala`.`gejala`,`rule`.`probabilitas`  FROM `penyakit` JOIN `rule` ON `penyakit`.`id_penyakit`=`rule`.`id_penyakit` JOIN `gejala` ON `rule`.`id_gejala`=`gejala`.`id_gejala` WHERE `rule`.`id_penyakit` = 6
    ";
    return $this->db->query($queryRule)->result_array();
  }
}
