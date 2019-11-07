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
				                        <div class="caption">
				                                <legend>Edit Data Guru</legend>
				                        </div>
				                </div>
		            		</div>
		            	</div>
		            		<?php echo form_open_multipart('DataDiri/updateData/'.$this->uri->segment(3)); ?>
    <?php echo validation_errors(); ?>
    <div class="form-group">
      <label for="">Id Guru</label>
      <input type="text" class="form-control" name="idGuru" id="idGuru" value="<?php echo $guru[0]->idGuru ?>">
    </div>
    <div class="form-group">
      <label for="">Nama Guru</label>
      <input type="text" class="form-control" name="namaGuru" id="namaGuru" value="<?php echo $guru[0]->namaGuru ?>">
    </div>
    <div class="form-group">
      <label for="">Tanggal Lahir</label>
      <input type="date" class="form-control" name="tglLahir" id="tglLahir" value="<?php echo $guru[0]->tglLahir ?>">
    </div>
    <div class="form-group">
      <label for="">No Telp</label>
      <input type="text" class="form-control" name="noTelp" id="noTelp" value="<?php echo $guru[0]->noTelp ?>">
    </div>
    <div class="form-group">
      <label for="">Jenis Kelamin</label>
      <br>
      <label class="radio-inline">
            <input type="radio" name="jenisKelamin" id="" value="Laki-laki" checked="checked">
            Laki-laki
            </label> 
            <label class="radio-inline">
            <input type="radio" name="jenisKelamin" id="" value="Perempuan" value="<?php echo $guru[0]->jenisKelamin ?>">
            Perempuan
            </label>
    </div>
    <div class="form-group">
      <label for="">Alamat</label>
      <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $guru[0]->alamat ?>">
    </div>
    <div class="form-group">
      <label for="">Mata Pelajaran</label>
      <select class="form-control" id="mapel" name="mapel" id="mapel" value="<?php echo $guru[0]->mapel ?>">
            <option>------</option>
            <option>Matematika </option>
            <option>Bahasa Indonesia </option>
            <option>IPA </option>
            <option>Fisika </option>
            <option>Kimia </option>
            <option>Biologi </option>
            <option>Bahasa Inggris </option>
            <option>Geografi </option>
            <option>Sosiologi </option>
            <option>Ekonomi </option>
            </select>
    </div>
    <div class="form-group">
      <label for="">Jenjang</label>
      <select class="form-control" id="jenjang" name="jenjang" id="jenjang" value="<?php echo $guru[0]->jenjang ?>">
            <option>------</option>
            <option>SD</option>
            <option>SMP</option>
            <option>SMA</option>
            </select>
    </div>
    <div class="form-group">
      <label for="">Foto</label>
      <br>
      <input type="file" name="uploadIjazah" id="uploadIjazah" size="20" value="<?php echo $guru[0]->uploadIjazah ?>">
    </div>
      <br>
    <button type="submit" class="fa fa-paper-plane btn btn-success" aria-hidden="true">Submit</button>
    <?php echo form_close(); ?>
     </div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>