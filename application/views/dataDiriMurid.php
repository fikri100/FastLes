<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fast Les</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>assets/murid/img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>assets/murid/img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/murid/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/murid/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo base_url()?>assets/murid/img/favicons/manifest.json">
	<link rel="shortcut icon" href="<?php echo base_url()?>assets/murid/img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/murid/css/normalize.css">
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css"> -->
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/murid/css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/murid/css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/murid/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/murid/fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/murid/css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="<?php echo base_url()?>assets/murid/img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url(); ?>/Home/index"><img src="<?php echo base_url()?>assets/img/logo.png" data-active-url="<?php echo base_url()?>assets/murid/img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="<?php echo base_url() ?>index.php/Login/index">Home</a></li>
					<li><a href="<?php echo base_url() ?>index.php/MuridCtl/history">History</a></li>
					<li><a href="<?php echo base_url() ?>index.php/User/getUser">Data diri</a></li>
					<?php if ($this->session->userdata('logged_in') == null): ?>
						<li><a href="<?php echo site_url(); ?>/login/login" data-toggle="modal" class="btn btn-blue">Masuk</a></li>

						<li><a href="<?php echo site_url(); ?>/login/registerMurid" data-toggle="modal" class="btn btn-blue">Daftar</a></li>
						<?php else: ?>
						<li><a href="<?php echo site_url(); ?>/login/logout" class="btn btn-blue">Log out</a></li>

					<?php endif ?>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav><br><br><br><br><br><br>

		<div class="panel panel-default " style="border: 0px;">
						  <div class="panel-heading" style="font-size: 18px;">Data Diri</div>
						  <div class="panel-body">
						  	<div class="col-xs-6 col-sm-3">
				                <div id="hover-cap-4col">
				                	<?php foreach ($data as $key => $value) : ?>
				                        <div class="caption">
				                            <img src="<?php echo base_url()?>./assets/upload/<?php echo $value['foto']?>" alt="" width=250 height=250>
				                        </div>
				                </div>
		            		</div>
		            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            			<h4>Id Anda : <?php echo $value['idMurid']; ?></h4>
							    <h4>Nama Anda : <?php echo $value['namaMurid']; ?></h4>
				                <h4>Tanggal Lahir : <?php echo $value['tglLahir']; ?></h4>
				                <h4>No Telp : <?php echo $value['noTelp']; ?></h4>
				                <h4>Jenis Kelamin : <?php echo $value['jenisKelamin']; ?></h4>
				                <h4>Alamat : <?php echo $value['alamat']; ?></h4>
				                <h4>Jenjang : <?php echo $value['jenjang']; ?></h4>
			                	<a href="<?php echo site_url("/User/updateData/" .$value['idMurid']) ?>" class="btn-sm btn-danger">Update Profile</button></a>
			                <?php endforeach; ?>
			            	</div>
						  </div>
					</div>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
	<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> -->
	<script src="<?php echo base_url()?>assets/murid/js/wow.min.js"></script>
	<script src="<?php echo base_url()?>assets/murid/js/typewriter.js"></script>
	<script src="<?php echo base_url()?>assets/murid/js/jquery.onepagenav.js"></script>
	<script src="<?php echo base_url()?>assets/murid/js/main.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>