<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php
$ci = new CI_Controller();
$ci = &get_instance();
$ci->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Halaman Tidak Ditemukan</title>

	<!-- Bootstrap -->
	<link href="<?= base_url('assets'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= base_url('assets'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?= base_url('assets'); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<!-- page content -->
			<div class="col-md-12">
				<div class="col-middle">
					<div class="text-center text-center">
						<h1 class="error-number">404</h1>
						<h2>Maaf, halaman tidak ditemukan</h2>
						<p><a class="btn btn-info" href="<?= base_url('auth'); ?>">Kembali</a>
						</p>
					</div>
				</div>
			</div>
			<!-- /page content -->
		</div>

		<!-- jQuery -->
		<script src="<?= base_url('assets'); ?>/vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?= base_url('assets'); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="<?= base_url('assets'); ?>/vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="<?= base_url('assets'); ?>/vendors/nprogress/nprogress.js"></script>

		<!-- Custom Theme Scripts -->
		<script src="<?= base_url('assets'); ?>/build/js/custom.min.js"></script>
</body>

</html>