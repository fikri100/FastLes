<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicons/favicon.ico">
		<title>Fast Les - Aplikasi Pemesanan Guru Private</title>

		<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  media="screen,projection"/>
      	<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

      	<!--JavaScript at end of body for optimized loading-->
      	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
      	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
      	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      	<script type="text/javascript" class="init">
      	$(document).ready(function() {
            $('#example').DataTable( {
            	"order": [[ 3, "desc" ]]
            });
        });
      	</script>

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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello , <?php echo $this->session->userdata('logged_in')['username'];?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url() ?>index.php/Login/login">Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>


		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<div class="list-group" style="border: none;">
					  <a href="<?php echo base_url(); ?>index.php/homeGuru/index"><button type="button" class="list-group-item" style="border: none;">Dashboard</button></a>
					  <a href="#"><button type="button" class="list-group-item active" style="border: none;">Data Diri</button></a>
					  <a href="<?php echo site_url(); ?>/history/index"><button type="button" class="list-group-item" style="border: none;">History</button></a>
					  <a href="<?php echo site_url(); ?>/ulasan/index"><button type="button" class="list-group-item" style="border: none;">Ulasan Guru</button></a>
					</div>
				</div>

				<div class="col-sm-9">
					<ol class="breadcrumb">
						<li><a href="#">Dashboard</a></li>
						<li class="active">Data Diri</a></li>
					</ol>

					<div class="panel panel-default " style="border: 0px;">
						  <div class="panel-heading" style="font-size: 18px;">Data Diri</div>
						  <div class="panel-body">
						  	<div class="col-xs-6 col-sm-3">
				                <div id="hover-cap-4col">
				                        <?php foreach ($data_list as $key => $value) : ?>
				                        <div class="caption">
				                        </div>
				                </div>
		            		</div>
		            		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		            			<h4>Id Anda : <?php echo $value['idGuru']; ?></h4>
							    <h4>Nama Anda : <?php echo $value['namaGuru']; ?></h4>
				                <h4>Tanggal Lahir : <?php echo $value['tglLahir']; ?></h4>
				                <h4>No Telp : <?php echo $value['noTelp']; ?></h4>
				                <h4>Jenis Kelamin : <?php echo $value['jenisKelamin']; ?></h4>
				                <h4>Alamat : <?php echo $value['alamat']; ?></h4>
				                <h4>Mata Pelajaran : <?php echo $value['mapel'] ?></h4>
				                <h4>Jenjang : <?php echo $value['jenjang']; ?></h4>
				                <h4>Username : <?php echo $value['username']; ?></h4>
				                <h4>Password : <?php echo $value['password']; ?></h4>
			                	<a href="<?php echo site_url("/DataDiri/updateData/".$value['idGuru']) ?>"><button type="button" class="btn btn-default">Update Profile</button></a>
			                <?php endforeach; ?>
			            	</div>
						  </div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>