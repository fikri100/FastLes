<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicons/favicon.ico">
		<title>Fast Les - Aplikasi Pemesanan Guru Private</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			body {
				font-family: 'Segoe UI';
				}
			nav {
				border-radius: 0px;
			}		
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">FastLes</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello , <?php echo $this->session->userdata('logged_in')['username'];?><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url() ?>index.php/Login/login">Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<!-- Content -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<div class="list-group" style="border: none;">
					  <a href="<?php echo base_url(); ?>index.php/homeGuru/index"><button type="button" class="list-group-item active" style="border: none;">Dashboard</button></a>
					  <a href="<?php echo base_url() ?>index.php/dataDiri/index"><button type="button" class="list-group-item" style="border: none;">Data Diri</button></a>
					  <a href="<?php echo site_url(); ?>/history/index"><button type="button" class="list-group-item" style="border: none;">History </button></a>
					  <a href="<?php echo site_url(); ?>/ulasan/index"><button type="button" class="list-group-item" style="border: none;">Ulasan Guru</button></a>
					</div>
				</div>

				<div class="col-sm-9">
					<!-- Content -->
					<div class="container">
						 
					</div>

					<ol class="breadcrumb">
						<li class="active">
							<a href="#">Dashboard</a>
						</li>
					</ol>

					<div class="col-sm-4">
						<div class="panel panel-default " style="border: 0px;">
						  <div class="panel-heading" style="font-size: 18px;">Rincian Jadwal Transaksi</div>
						  <div class="panel-body">
						    <p>Lihatlah jadwal anda mengajar </p><br>
						    <a href="<?php echo site_url(); ?>/history/index"><button type="button" class="btn btn-primary">Details</button></a>
						  </div>
						</div>
					</div>
					<div class="col-sm-4">
					<div class="panel panel-default" style="border: 0px;">
						  <div class="panel-heading" style="font-size: 18px;">Ulasan Pesan</div>
						  <div class="panel-body">
						    <p>Guru dapat menerima kritik dan saran dari seorang murid</p>
						    <a href="<?php echo site_url(); ?>/ulasan/index"><button type="button" class="btn btn-primary">Details</button></a>
						  </div>
					</div>
				</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					
				</div>

				

				
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript">
		  $(document).ready( function () {
		      $('#table_id').DataTable();
		  } );
		</script>
	</body>
</html>