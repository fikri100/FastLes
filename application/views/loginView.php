

  <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
</head>
<body>
<h1>FAST LES</h1>
<div class="main-agileits">
<?php echo form_open('Login/cekLogin'); ?>
<!--form-stars-here-->
    <div class="form-w3-agile">
      <h2>MASUK</h2>
      <?php echo validation_errors()?>
      <form action="#" method="post">
        <div class="form-sub-w3">
          <input type="text" id="username" name="username" placeholder="Customer number or username " required="" />
        <div class="icon-w3">
          <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        </div>
        <div class="form-sub-w3">
          <input type="password" id="password" name="password" placeholder="Password" required="" />
        <div class="icon-w3">
          <i class="fa fa-unlock-alt" aria-hidden="true"></i>
        </div>
        </div>
        <p class="p-bottom-w3ls">Belum punya akun ?<a class="w3_play_icon1" href="#small-dialog1">  Daftar</a></p>
        
        <div class="submit-w3l">
          <input type="submit" value="Login">
        </div>
        <?php echo form_close(); ?>
      </form>
    </div>
<!--//form-ends-here-->
</div>


<div id="small-dialog1" class="mfp-hide">
  <div class="contact-form1">
    <div class="contact-w3-agileits">
      <h3>Registrasi</h3>
        <?php echo form_open('login/registerGuru'); ?>
          <form action="#" method="post">
            <div class="form-group">
              <button type="submit" class="btn btn-info"><a href="<?php echo site_url();?>/login/registerGuru">Daftar sebagai Guru</button>
        <?php echo form_close(); ?>
                <h4>ATAU</h4>
        <?php echo form_open('login/registerMurid'); ?>
            <div class="form-group">
              <button type="submit" class="btn btn-info"><a href="<?php echo site_url();?>/login/registerMurid">Daftar sebagai Murid</button>
        <?php echo form_close(); ?>
          </form>
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