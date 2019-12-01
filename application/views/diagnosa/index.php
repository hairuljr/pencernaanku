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
        <li class="active">Home</li>
        <li>About</li>
        <li>Article</li>
        <li>Contact</li>
        <li>
          <a href="<?= base_url('auth/logout'); ?>" class="signup-btn"><span>Logout</span></a>
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
          <i class="fa fa-play"></i>
        </div>
        <small><b>Mulai Diagnosa</b></small>
      </div>
    </div>
    <div class="app-picture">
      <img src="<?= base_url('assets/images/'); ?>background.png" />
    </div>
  </div>
  <div class="quick-links">
    <ul>
      <li>
        <i class="fa fa-share-alt"></i>
        <p>SHARE TO</p>
      </li>
      <li>
        <i class="fa fa-book"></i>
        <p>RECENT ARTICLE</p>
      </li>
      <li>
        <i class="fa fa-info-circle"></i>
        <p>ABOUT</p>
      </li>
      <li>
        <i class="fa fa-address-book"></i>
        <p>CONTACT</p>
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