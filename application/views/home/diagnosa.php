<html>

<head>
  <title>Front End SP Pencernaan</title>
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style.css" />
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>style_diagnosa.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
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
        <li>
          <a href="<?= base_url('auth/logout'); ?>" class="signup-btn"><span>Logout</span></a>
        </li>
      </ul>
    </div>

    <form class="form" action="<?= base_url('diagnosa/hasil'); ?>" method="POST">
      <h2 style="color: #b2b1b1; text-align: center;">Daftar Gejala</h2>
      <?php foreach ($gejala as $g) : ?>
        <div class="inputGroup">
          <input id="<?= $g['id_gejala']; ?>" name="gejala[]" value="<?= $g['id_gejala']; ?>" type="checkbox" />
          <label for="<?= $g['id_gejala']; ?>"><?= $g['gejala']; ?></label>
        </div>
      <?php endforeach; ?>
      <div class="tutt">
        <button class="btn third" type="submit">Hitung</button>
        <button class="btn third" type="reset">Reset</button>
      </div>
    </form>
  </div>

</body>

</html>