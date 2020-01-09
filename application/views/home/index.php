<html>

<head>
  <title>Front End SP Pencernaan</title>
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="container">
    <div class="menu">
      <ul>
        <i class="fa fa-user-md"></i>
        <li class="active"><a class="active" href="<?= base_url('home'); ?>">Home</a></li>
        <li><a href="<?= base_url('home/about'); ?>">About</a></li>
        <li><a href="<?= base_url('home/article'); ?>">Article</a></li>
        <li><a href="<?= base_url('home/contact'); ?>">Contact</a></li>
        <?php
        if ($this->session->userdata('email')) {
          $log = 'Logout';
          $url = 'logout';
          $link = base_url('user');
          $menu = '<li>' . '<a href="' . $link . '">' . "Profile" . '</a>' . '</li>';
        } else {
          $log = 'Sign Up';
          $url = 'registrasi';
          $menu = '';
        }
        ?>
        <?= $menu; ?>
        <li>
          <a href="<?= base_url("auth/" . $url); ?>" class="signup-btn"><span><?= $log; ?></span></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="banner">
    <div class="app-text">
      <h1>
        SP Diagnosa Penyakit Pencernaan<br />
        Pada Manusia dengan Metode Bayes
      </h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing pariatur elit.
        <br />
        Blanditiis voluptatum eligendi asperiores suscipit itaque.
      </p>
      <div class="play-btn">
        <div class="play-btn-inner">
          <a href="<?= base_url('home/diagnosa'); ?>"><i class="fa fa-play"></i></a>
        </div>
        <small><b><a style="text-decoration: none; color: #19dafa;" href="<?= base_url('home/diagnosa'); ?>">Mulai Diagnosa</a></b></small>
      </div>
    </div>
    <div class="app-picture">
      <img src="<?= base_url('assets/'); ?>background.png" />
    </div>
  </div>
  <div class="quick-links">
    <ul>
      <li>
        <a style="text-decoration: none;" href="<?= base_url('#'); ?>"><i class="fa fa-share-alt"></i>
          <p>SHARE TO</p>
        </a>
      </li>
      <li>
        <a style="text-decoration: none;" href="<?= base_url('home/article'); ?>"><i class="fa fa-book"></i>
          <p>RECENT ARTICLE</p>
        </a>
      </li>
      <li>
        <a style="text-decoration: none;" href="<?= base_url('home/about'); ?>"><i class="fa fa-info-circle"></i>
          <p>ABOUT</p>
        </a>
      </li>
      <li>
        <a style="text-decoration: none;" href="<?= base_url('home/contact'); ?>"><i class="fa fa-address-book"></i>
          <p>CONTACT</p>
        </a>
      </li>
    </ul>
  </div>
  <div class="social-icons">
    <ul>
      <li>
        <a href="#"><i class="fa fa-facebook"></i></a>
      </li>
      <li>
        <a href="#"><i class="fa fa-twitter"></i></a>
      </li>
      <li>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </li>
      <li>
        <a href="#"><i class="fa fa-whatsapp"></i></a>
      </li>
    </ul>
  </div>
</body>

</html>