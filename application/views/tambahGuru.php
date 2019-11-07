<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/css-homeAdmin.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<!------ Include the above in your HEAD tag ---------->
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
          <a class="navbar-brand" href="#">FastLes | Admin Page</a>
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
<div class="container-fluid column-starter">
  <!------------ Panel Class ------------->
    <div class="margin-t-20"></div>
  <div class="row">
      <div class="col-md-3 sidebar">
          <div class="panel">
             <div class="panel-body ">
                <div class="sidebar-nav">
                 <div class="sidebar panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" href="#sidemenu1" class="" aria-expanded="true">Panel <i class="fa fa-angle-down pull-right"></i></a>
                        </h4>
                      </div>
                     <div id="sidemenu1" class="panel-collapse collapse in" aria-expanded="true" style="">
                          <div class="list-group">
                              <a href="<?php echo base_url() ?>index.php/AdminCtl/index" class="list-group-item"><span class="glyphicon glyphicon-dashboard"></span>  Dashboard</a>
                              <a href="<?php echo base_url() ?>index.php/MuridCtl/index" class="list-group-item"><span class="glyphicon glyphicon-stats"></span>  Murid</a>
                              <a href="<?php echo base_url() ?>index.php/GuruCtl/index" class="list-group-item"><span class="glyphicon glyphicon-user"></span>  Guru</a>
                              <a href="<?php echo base_url() ?>index.php/DetailCtl/index" class="list-group-item"><span class="glyphicon glyphicon-zoom-in"></span>  Detail Transaksi</a>
                            </div> 
       
                    </div>
                 </div>   
                </div>
               
                
              </div>

          </div>
      </div>
      <div class="col-md-9">
		<div class="panel panel-default">
		  <div class="panel-heading"style="background-color:  #1E8BC3;">
		    <h3 class="panel-title">Tambah Murid Baru</h3>
		  </div>
		  <div class="panel-body">
		  	  <?php echo form_open_multipart('GuruCtl/registerGuru'); ?>
        <legend>Silahkan registrasi untuk menjadi Murid di FastLes</legend>
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="namaGuru" name="namaGuru" placeholder="Nama Guru">
            </div>
            <div class="form-group">
            <label for="organisasi">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tglLahir" name="tglLahir" placeholder="Tanggal Lahir">
            </div>
            <div class="form-group">
            <label for="no_hp">No Telp</label>
            <input type="text" class="form-control" id="noTelp" name="noTelp" placeholder="No Telp">
            </div>
            <div class="form-group">
            <label for="no_hp">Jenis Kelamin</label>
            <br>
            <label class="radio-inline">
            <input type="radio" name="jenisKelamin" id="" value="Laki-laki" checked="checked">
            Laki-laki
            </label> 
            <label class="radio-inline">
            <input type="radio" name="jenisKelamin" id="" value="Perempuan">
            Perempuan
            </label>
            </div>
            <div class="form-group">
            <label for="no_hp">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            </div>
             <div class="form-group">
            <label for="no_hp">Mata Pelajaran</label>
            <select class="form-control" id="mapel" name="mapel">
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
            <label for="jenjang">Jenjang</label>
            <select class="form-control" id="jenjang" name="jenjang">
            <option>------</option>
            <option>SD</option>
            <option>SMP</option>
            <option>SMA</option>
            </select>
            </div>
            <br>
            <input type="file" name="uploadIjazah">
            </div>
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-large btn-block btn-primary">Tambah</button>
          </div>
         <?php echo form_close(); ?>
		  </div>
		</div>
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