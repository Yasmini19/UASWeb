<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Inventaris Theatrisic</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="<?php echo site_url();?>/Login/logout" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="">Logout</i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Admin</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item " href="<?php echo base_url('index.php/HomeAdmin/')?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        
        
        <li class="treeview"><a class="app-menu__item active"  href="<?php echo base_url('index.php/DataBarang/')?>" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data Barang</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          
        </li>
        <li class="treeview"><a class="app-menu__item" href="<?php echo base_url('index.php/DataPeminjaman/')?>" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data Peminjaman</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          
        </li>

        <li class="treeview"><a class="app-menu__item" href="<?php echo base_url('index.php/User/getUser')?>" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data User</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          
        </li>
        
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Barang</h1>
          
        </div>
        
      </div>
      
   <div class="container ">
     <a href="<?php echo site_url('/DataBarang/create') ?>" class="btn btn-info my-3 shadow p-3 mb-5 bg-white rounded" ><span class="glyphicon glyphicon-plus"><font color="black">Add Barang</font></span></a>
     <a href="<?php echo site_url('/Buatpdf/createPdf') ?>" class="btn btn-info my-3 shadow p-3 mb-5 bg-white rounded" ><span class="glyphicon glyphicon-plus"><font color="black">Add Pdf</font></span></a>

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
          <td><img src="<?php echo base_url()?>./assets/upload/<?php echo $value->gb_barang?>" alt="" width=100 height=100></td>
          <td><?php echo $value->status ?></td>

          <td>
                <a href="<?php echo site_url("/dataBarang/updateData/".$value->id_barang) ?>" class="fa fa-pencil-square-o fa-2x" aria-hidden="true" ></a>

                <a href="<?php echo site_url("/DataBarang/deleteData/".$value->id_barang) ?>" class="fa fa-trash fa-2x" aria-hidden="true"></a>
                
              </td>
         
       </tr>
       <?php endforeach ?>
     </tbody>
   </table>
   </main>

    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url();?>asset/admin/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>asset/admin/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>asset/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/admin/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url();?>asset/admin/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="<?php echo base_url();?>asset/admin/text/javascript" src="js/plugins/chart.js"></script>
    <script type="<?php echo base_url();?>asset/admin/text/javascript">
      var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56]
          },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86]
          }
        ]
      };
      var pdata = [
        {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
        },
        {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="<?php echo base_url();?>asset/admin/text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
  </body>
</html>





