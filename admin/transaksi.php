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
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Inventory Tokoku</b></span>
    </a>
<?php 
		  
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
                  <div class="pull-left">
                      <a href="profile" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="signout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
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
          

        <li class="treeview">
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
		
        <li class="active treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Transaksi</span>	
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
              <li><a href="transaksi"><i class="fa fa-pencil"></i> Input transaksi</a></li>
              <li><a href="cektransaksi"><i class="fa fa-archive"></i> Lihat transaksi</a></li>
            </ul>
              
        </li>
		
		    <li class="treeview">
          <a href="hutang">
            <i class="fa fa-archive"></i> <span>Hutang</span>
          </a>
        </li>

        <li class="treeview">
          <a href="report">
            <i class="fa fa-folder-o"></i> <span>Report</span>
          </a>
        </li>

        <li class="treeview">
          <a href="user">
            <i class="fa fa-user"></i> <span>Pengelola User</span>
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
        Input transaksi
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

            <form action="insertransaksi" method="post" enctype="multipart/form-data" role="form">
            
            <div class="col-md-3 col-sm-6 col-xs-12">
            <h4>Pilih barang</h4>
            <select class="form-control" id="namabarang" name="namabarang" required onchange="changeValue(this.value)">
            <option selected="true" disabled="disabled">Pilih barang</option>
            <?php
                $mysql_hostname = "localhost";
                $mysql_user = "root";
                $mysql_password = "";
                $mysql_database = "inventory";

                $conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM barang ORDER BY id_barang asc";
                $jsArray = "var prdName = new Array();\n";
                if($result = @mysqli_query($conn,$sql)){
                  if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){

                        $namabarang = $row['nama_barang'];
                        $idbarang = $row['id_barang'];
                        $jsArray .= "prdName['" . $row['id_barang'] . "'] = {harga_barang:'" . addslashes($row['harga_jual']) . "'};\n";
         ?>
        
              <option value=<?=$idbarang?>><?php echo $namabarang ?></option>
                <?php } 
                        } 
                      }
                      
                      ?>


              </select>
              
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <h4>Jenis transaksi</h4>
                <select class="form-control" id="jenistransaksi" name="jenistransaksi">
                  <option>Cash</option>
                  <option>Kredit</option>
                </select>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h4>Harga barang</h4>
                
                <input type="number" class="form-control form-rounded" id="harga_barang" name="harga_barang" placeholder="harga barang" readonly>
            </div>
           
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h4>Jumlah beli</h4>
                <input type="number" class="form-control form-rounded" id="jumlahbeli" name="jumlahbeli" placeholder="Input jumlah beli" onchange="calculateHarga()">
            </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <h4>Total harga</h4>
            <input type="number" class="form-control form-rounded" id="totalhargabarang" name="totalhargabarang" placeholder="Harga barang" readonly>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <h4>Nama customer</h4>
            <input type="text" class="form-control form-rounded" id="namacustomer" name="namacustomer" placeholder="Nama customer">
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <h4>NIK Customer</h4>
            <input type="text" class="form-control form-rounded" id="nikcustomer" name="nikcustomer" placeholder="NIK">
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <h4>Tempat lahir</h4>
            <input type="text" class="form-control form-rounded" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir">
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
            <h4>Tanggal lahir</h4>
            <input type="date" class="form-control form-rounded" id="tanggallahir" name="tanggallahir">
        </div>
        
    </div>
  
    <br>
    
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
<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
  var harga = prdName[id].harga_barang;
  document.getElementById('harga_barang').value = harga;

};

</script>
<script type="text/javascript">
function calculateHarga()
{
  var jumlahbeli = document.getElementById("jumlahbeli").value;
  var totalhargabarang = document.getElementById("totalhargabarang");
  var hargabarang = document.getElementById('harga_barang').value;

  var total = jumlahbeli * hargabarang;

  totalhargabarang.value = total;
}
</script>
</body>
</html>