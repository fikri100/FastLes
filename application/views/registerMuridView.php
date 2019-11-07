<!DOCTYPE html>
<html>
<head>
<title>FastLes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/login/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>assets/login/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/login/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="<?php echo base_url();?>assets/login//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="<?php echo base_url();?>assets/login//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/freelancer.min.css" rel="stylesheet">
</head>
<body>
    <br>
    <br>
    <center>
  <div class="container">
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
    <div class="jumbotron">
      <?php echo form_open_multipart('Login/registerMurid'); ?>
        <legend>Silahkan Masukkan Murid</legend>
            <div class="form-group">
            <label for="nama">Nama Murid</label>
            <input type="text" class="form-control" id="namaMurid" name="namaMurid" placeholder="Nama Murid">
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
            <label for="no_hp">Alamat(Contoh: Jl.Kembang Kertas no12B)</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            </div>
            <div class="form-group">
            <label for="no_hp">Jenjang</label>
            <select class="form-control" id="jenjang" name="jenjang">
            <option>------</option>
            <option>SD</option>
            <option>SMP</option>
            <option>SMA</option>
            </select>
            </div>
            <div class="form-group">
            <label for="foto">Foto Diri</label>
            <br>
            <input type="file" name="foto">
            </div>
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-large btn-block btn-primary">Daftar</button>
          </div>
         <?php echo form_close(); ?>
    </div>
  </div>
  </div>
  </div>
  <!-- copyright -->
  
  <!-- //copyright --> 
  <script type="text/javascript" src="<?php echo base_url();?>assets/login/js/jquery-2.1.4.min.js"></script>
  <!-- pop-up-box -->  
    <script src="<?php echo base_url();?>assets/login/js/jquery.magnific-popup.js" type="text/javascript"></script>
  <!--//pop-up-box -->
  <script>
    $(document).ready(function() {
    $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });
                                    
    });
  </script>
</body>
</html>