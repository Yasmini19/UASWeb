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
         <th>Id</th>
         <th>Nama Barang</th>
         <th>Jumlah</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody style="background-color: white">
      <?php foreach ($carts as $key): ?>
       <tr>
          <td><?php echo $key['id'] ?></td>
          <td><?php echo $key['name'] ?></td>
          <td><?php echo $key['qty'] ?></td>

          <td>

                <button><a href="<?php echo site_url("/Pinjam/delete/".$key['rowid']) ?>" class="fa fa-trash fa-2x" aria-hidden="true"></a></button>
                
              </td>
         
       </tr>
       <?php endforeach ?>
     </tbody>
   </table>
   </main>

<div class="container-fluid">
   <a href="<?php echo base_url('index.php/Pinjam/')?>" type="submit" class="btn btn-primary btn-lg " value="Pinjam" data-toggle="modal" data-target="#modalPinjam" >Pinjam</a>
</div>
    <!-- Button trigger modal -->

    

<!-- Modal -->
<div class="modal fade" id="modalPinjam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Form Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Keperluan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="colFormLabel">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="colFormLabel">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Kembali</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="colFormLabel">
    </div>
  </div>
  
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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