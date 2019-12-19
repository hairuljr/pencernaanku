<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style.css" />
  <link href="<?= base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style_contact.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div class="container3">
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
  <div class="contact-section">

    <h1>Contact Us</h1>
    <div class="border"></div>
    <form class="contact-form" action="index.html" method="post">
      <input type="text" class="contact-form-text" placeholder="Your name">
      <input type="email" class="contact-form-text" placeholder="Your email">
      <input type="text" class="contact-form-text" placeholder="Your phone">
      <textarea class="contact-form-text" placeholder="Your message"></textarea>
      <input type="submit" class="contact-form-btn" value="Send">
    </form>
  </div>


</body>

</html>