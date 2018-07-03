<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>I_Theatrisic</title>

    <!-- Bootstrap core CSS -->
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
    <br>
    <center>
  <div class="container">
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
    <br>
    <br>
    <div class="jumbotron">
      <?php echo form_open('Login/cekLogin'); ?>
        <legend><b>Hi, Orang Baik!</b></legend>
        <legend>Silahkan login untuk meminjam barang di I_Theatrisic</legend>
          <?php echo validation_errors()?>
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
            </div>

            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-large btn-block btn-primary">Masuk</button>
          </div>
          <label>Belum punya akun <a href="<?php echo site_url("login/register");?>">Daftar</a></label>
         <?php echo form_close(); ?>
    </div>
  </div>
  </div>
  </div>