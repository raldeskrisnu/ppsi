<?php
   ob_start();
   session_start();
           if(!isset($_SESSION['username2']))
           {
   			header("location:../index.php");
           }
   		
   		error_reporting(0);
   		ini_set('display_errors', 0);
       ?>
	   
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Control Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="bootstrap/css/style.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/editor.css">
<link src="dist/editor.css" rel="stylesheet">


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Control Panel</b></span>
    </a>
<?php 
		  include '../assets/connect.php';
			$userid = $_SESSION['username2'];	
			
		
		  ?>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo ucfirst ($userid); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/user.png" class="img-circle" alt="User Image">

                <p>
                 <?php echo ucfirst ($userid); ?>
                </p>
              </li>
              <li class="user-footer">
                <!--<div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>-->
				<center>
               
                  <a href="signout" class="btn btn-default btn-flat">Sign out</a>
               
				</center>
              </li>
            </ul>
          </li>

        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo ucfirst ($userid); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="index">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
          

        <li class="active treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Barang</span>	
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
              <li><a href="stockopname"><i class="fa fa-pencil"></i> Input barang</a></li>
              <li><a href="cekbarang"><i class="fa fa-archive"></i> Check barang</a></li>
            </ul>
              
        </li>   
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Transaksi</span>
          </a>
        </li>
		
		    <li class="treeview">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Hutang</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-o"></i> <span>Report</span>
          </a>
        </li>
		
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input barang
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Contents</a></li>
        <li class="active">Add Contents</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		
		<div class="row">

            <form action="insertbarang" method="post" enctype="multipart/form-data" role="form">
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h4>Id Barang</h4>
                <input type="text" class="form-control form-rounded" id="idbarang" name="idbarang" placeholder="Input ID">
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <h4>Id Barang</h4>
                <input type="text" class="form-control form-rounded" id="namabarang" name="namabarang" placeholder="Input Nama barang">
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h4>Jenis barang</h4>
                <input type="text" class="form-control form-rounded" id="jenisbarang" name="jenisbarang" placeholder="Input Jenis barang">
            </div>
           
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h4>Harga beli</h4>
                <input type="number" class="form-control form-rounded" id="hargabeli" name="hargabeli" placeholder="Input Harga beli">
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <h4>Harga jual</h4>
                <input type="number" class="form-control form-rounded" id="hargajual" name="hargajual" placeholder="Input Harga jual">
            </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <h4>Jumlah stock</h4>
            <input type="number" class="form-control form-rounded" id="jumlahstock" name="jumlahstock" placeholder="Input jumlah stock">
        </div>
    </div>
  
    <br>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h4>Deskripsi</h4>
          <textarea class="description" name="description" id="description" rows="10" cols="100"></textarea><br>
        </div>
    </div>
    
		
		<input type="submit" onclick="activation()" id="1" name="1" class="btn btn-primary" role="button" value="Submit">
		</form>
		
		<br>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.12
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="#">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/editor.js"></script>
 <script>
		function setfilename(val)
		{
			var fileName = val.substr(val.lastIndexOf("\\")+1, val.length);
			document.getElementById("imagename").value = fileName;
			
		}
		
		
	</script>
</body>
</html>
