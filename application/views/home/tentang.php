<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="<?= base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style_about.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style.css">
  <title>Personal WebSite</title>
</head>

<body>
  <div class="container2">
    <div class="menu">
      <ul>
        <i class="fa fa-user-md"></i>
        <li class="active"><a class="active" href="<?= base_url('home'); ?>">Home</a></li>
        <li><a href="<?= base_url('home/about'); ?>">About</a></li>
        <li><a href="<?= base_url('home/article'); ?>">Article</a></li>
        <li><a href="<?= base_url('home/contact'); ?>">Contact</a></li>
        <li>
          <?php
          if ($this->session->userdata('email')) {
            $log = 'Logout';
            $url = 'logout';
          } else {
            $log = 'Sign Up';
            $url = 'registrasi';
          }
          ?>
          <a href="<?= base_url("auth/" . $url); ?>" class="signup-btn"><span><?= $log; ?></span></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="box">
    <img src="<?= base_url('assets/'); ?>background.png" alt="" class="box-img">
    <h1>
      Pencernaanku</h1>
    <h5>
      Sistem Pakar - Diagnosa Penyakit Pencernaan</h5>
    <p>
      Sistem pakar adalah suatu sistem yang menggunakan pengetahuan manusia dimana pengetahuan manusia tersebut dimasukan kedalam sebuah komputer dan kemudian digunakan untuk menyelesaikan masalah-masalah yang biasanya membutuhkan kepakaran atau keahlian manusia.</p>
  </div>
</body>

</html>