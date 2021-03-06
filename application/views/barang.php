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
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo site_url();?>/Pinjam/cart/"><i class="fa fa-shopping-cart fa-lg"></i></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
            <div class="btn-group open" style="padding-bottom: -5px; padding-top:10px">
                <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i><b><?php echo $this->session->userdata('logged_in')['username']?></b></a>
                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"> 
            </a>
                <ul class="dropdown-menu">
                <li><a href="<?php echo site_url();?>/Login/logout"><i class="fa fa-user fa-fw"></i> LOGOUT</a></li>
              </ul>
            </div>
            </li>

            
          </ul>
        </div>
      </div>
    </nav>  
    <div class="container" style="padding-top: 200px">
      <div class="row">
       <?php foreach ($data_list as $key => $value): ?>
        <div class="col-4">
        <div class="container">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="<?php echo base_url()?>./assets/upload/<?php echo $value->gb_barang?>" alt="Card image cap" width="100px" height="200px">
          <div class="card-body"> <hr>
            <p class="card-text"><?php echo $value->nama_barang ?></p>
            <?php echo form_open('Pinjam/add')?>
            <input type="hidden" value="<?php echo $value->id_barang?>" name="id">
            <input type="hidden" value="<?php echo $value->nama_barang?>" name="nama">
        
            <button type="submit" class="btn btn-primary btn-lg " value="Pinjam">Pinjam</button>
          <?php echo form_close()?>
          </div>
        </div> &nbsp; &nbsp; &nbsp; </br></div></div>
        <?php endforeach ?>
      </div>
    </div>

    <!-- Button trigger modal -->

<!-- Modal -->

      </div>
      
    </div>
  </div>
</div>
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