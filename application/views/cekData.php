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

<body id="page-top">

   <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <img src="<?php echo base_url()?>assets/img/thea.png" width="180" height="50">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo site_url()?>/Dashboard">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo site_url();?>/Barang/">Barang</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo site_url();?>/Cart/"><i class="fa fa-shopping-cart fa-lg"></i></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo site_url();?>/CekData/">Cek Data</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
            <div class="btn-group open" style="padding-bottom: -5px; padding-top:10px">
                <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i><b><?php echo $this->session->userdata('logged_in')['username']?></b></a>
                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"> 
            </a>
                <ul class="dropdown-menu">
                <li><a href="<?php echo site_url();?>/Login/"><i class="fa fa-user fa-fw"></i> LOGOUT</a></li>
              </ul>
            </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>  

    <br><br><br><br><br><br><br>
    <main role="main" class="container">
   <table class="table" back>
    <thead class="thead-dark">
       <tr>
         <th>ID Pinjam</th>
         <th>ID User</th>
         <th>Keperluan</th>
         <th>Tanggal Pinjam</th>
         <th>Tanggal Kembali</th>
         <th>Status</th>
       </tr>
     </thead>
     <tbody style="background-color: white">
      <?php foreach ($cekData as $key): ?>
       <tr>
          <td><?php echo $key['id_pinjam'] ?></td>
          <td><?php echo $key['id_user'] ?></td>
          <td><?php echo $key['keperluan'] ?></td>
          <td><?php echo $key['tanggal_pinjam'] ?></td>
          <td><?php echo $key['tanggal_kembali'] ?></td>
          <td><?php echo $key['status'] ?></td>
         
       </tr>
       <?php endforeach ?>
     </tbody>
   </table>
   </main>


    <!-- Button trigger modal -->

    

<!-- Modal -->

<!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/js/freelancer.min.js"></script>
</body>
</html>