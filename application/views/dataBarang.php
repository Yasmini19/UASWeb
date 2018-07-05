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
      
     </div>
   </div>
   <div class="container ">
     <a href="<?php echo site_url('/DataBarang/create') ?>" class="btn btn-info my-3 shadow p-3 mb-5 bg-white rounded" ><span class="glyphicon glyphicon-plus"><font color="black">Add Barang</font></span></a>

   </div>
   <main role="main" class="container">
   <table class="table" back>
    <thead class="thead-dark">
       <tr>
         <th>Id</th>
         <th>Nama Barang</th>
         <th>Kondisi</th>
         <th>Jumlah</th>
         <th>Gambar</th>
         <th>Status</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody style="background-color: white">
      <?php foreach ($data_list as $key => $value): ?>
       <tr>
          <td><?php echo $value->id_barang ?></td>
          <td><?php echo $value->nama_barang ?></td>
          <td><?php echo $value->kondisi ?></td>
          <td><?php echo $value->jumlah ?></td>
          <td><img src="<?php echo base_url()?>assets/upload/<?php echo $value->gb_barang?>" alt="" width=100 height=100></td>
          <td><?php echo $value->status ?></td>

          <td>
                <a href="<?php echo site_url("/dataBarang/updateData/".$value->id_barang) ?>" class="btn btn-sm btn-success">Update</a>

                <a href="<?php echo site_url("/DataBarang/deleteData/".$value->id_barang) ?>" class="btn btn-sm btn-danger">Delete</a>
                
              </td>
         
       </tr>
       <?php endforeach ?>
     </tbody>
   </table>
   </main>

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