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

    <style type="text/css">
      body{
        background-color: #e8e8e8;
      }

      table {
        background-color: white;
      }
    </style>

</head>

<body bgcolor="#e8e8e8">


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Data Barang</a>
      <a class="nav-item nav-link" href="#">Data Peminjaman</a>
    </div>
  </div>
</nav>
    <br>
    <br>
    
    <div class="container">
   <div class="jumbotron shadow p-3 mb-5 bg-white rounded">
     
       <h1>Data Barang</h1>
      <div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <?php echo form_open('DataBarang/update/'.$this->uri->segment(3)); ?>
    <legend>Edit Data Barang</legend>
    <?php echo validation_errors(); ?>
    <div class="form-group">
      <label for="">Id Barang</label>
      <input type="text" class="form-control" name="id_barang" id="id_barang" value="<?php echo $tabel_barang[0]->id_barang ?>" placeholder="Input field">
    </div>
    <div class="form-group">
      <label for="">Nama Barang</label>
      <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?php echo $tabel_barang[0]->nama_barang ?>" placeholder="Input field">
    </div>
    <div class="form-group">
      <label for="">Kondisi</label>
      <input type="text" class="form-control" name="kondisi" id="kondisi" value="<?php echo $tabel_barang[0]->kondisi ?>" placeholder="Input field">
    </div>
    <div class="form-group">
      <label for="">Jumlah</label>
      <input type="text" class="form-control" name="jumlah" id="jumlah" value="<?php echo $tabel_barang[0]->jumlah ?>" placeholder="Input field">
    </div>
    <div class="form-group">
      <label for="">Gambar Barang</label>
      <input type="file" class="form-control" name="hrgSewa" id="hrgSewa" value="<?php echo $tabel_barang[0]->gb_barang ?>" placeholder="Input field">
    </div>
    <div class="form-group">
      <label for="">Status</label>
      <input type="text" class="form-control" name="status" id="status" value="<?php echo $tabel_barang[0]->status ?>" placeholder="Input field">
    </div>
      <br>
    <button type="submit" class="btn btn-success">Submit</button>
    <?php echo form_close(); ?>
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