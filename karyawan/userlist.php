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

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
	  
	   <?php 
		  include '../assets/connect.php';
			$userid = $_SESSION['username2'];	
			$sql = "select * from special_access where username = '$userid'";
			
			if($result = @mysql_query($sql)){
				 if(mysql_num_rows($result) > 0){
					 while($row = mysql_fetch_array($result)){
						$username = $row['username'];
						
					}
				 }
			}
		
		  ?>
		  
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo ucfirst ($username); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/user.png" class="img-circle" alt="User Image">

                <p>
                 <?php echo ucfirst ($username); ?>
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
          <p><?php echo ucfirst ($username); ?></p>
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
         <a href="allcontent">
            <i class="fa fa-laptop"></i>
            <span>Contents</span>	
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
		 <li><a href="allcontent"><i class="fa fa-circle-o"></i> All Content</a></li>
             <li><a href="news"><i class="fa fa-circle-o"></i> News</a></li>
            <li><a href="kth"><i class="fa fa-circle-o"></i> Kth</a></li>
            <li><a href="event"><i class="fa fa-circle-o"></i> Event</a></li>
          </ul>
         
        </li>
		
        <li class="treeview">
          <a href="viewcomment">
            <i class="fa fa-comments"></i> <span>View Comments</span>
          </a>
        </li>
		
		<li class="active treeview">
          <a href="userlist">
            <i class="fa fa-user"></i> <span>User List</span>
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
        User List
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User list</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		
		<div class="row">
		<!--<div class="col-md-3 col-sm-6 col-xs-12">
		<h4>Title News</h4>
		<input type="text" class="form-control form-rounded" id="pwd" placeholder="Input Title">	
		</div> -->
			  <div class="col-xs-12">
				<div class="box">
                      <div class="box-body table-responsive no-padding">
					  
					  <?php
                           include_once "../assets/connect.php";
                           
                           $sql = mysql_query("SELECT COUNT(id_user) as num FROM user") or die (mysql_error());
                           $total_pages = mysql_fetch_array($sql);
                            $yourcount = $total_pages['num'];
                           $no =1;
                           $limit = 10;
                           $adjacents = 50;
                           $targetpage = "topik.php";
                           
                           $page = $_GET['page'];
                           if($page)
                           {
                               $start = ($page - 1) * $limit;
                               $no = 1 + (($page - 1) * $limit);
                               
                               if($page == 1)
                               {
                                   //include_once "getData.php";
                               }
                           }
                           else
                           {
                               $start = 0;
                           }
                           
                           /* Setup page vars for display. */
                           if ($page == 0) $page = 1;                  //if no page var is given, default to 1.
                           $prev = $page - 1;                          //previous page is page - 1
                           $next = $page + 1;                          //next page is page + 1
                           $lastpage = ceil($yourcount/$limit);      //lastpage is = total pages / items per page, rounded up.
                           $lpm1 = $lastpage - 1;
                           
                           $pagination = "";
                           if($lastpage > 1)
                           {   
                               $pagination .= "<div class=\"pagination\">";
                               //previous button
                               if ($page > 1) 
                                   $pagination.= "<a href=\"$targetpage?page=$prev\"><< Sebelumnya</a>";
                               else
                                   $pagination.= "<span class=\"disabled\"><< Sebelumnya</span>";  
                               
                               //pages 
                               if ($lastpage < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
                               {   
                                   for ($counter = 1; $counter <= $lastpage; $counter++)
                                   {
                                       if ($counter == $page)
                                           $pagination.= "<span class=\"current\">$counter</span>";
                                       else
                                           $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                                   }
                               }
                               elseif($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
                               {
                                   //close to beginning; only hide later pages
                                   if($page < 1 + ($adjacents * 2))        
                                   {
                                       for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                                       {
                                           if ($counter == $page)
                                               $pagination.= "<span class=\"current\">$counter</span>";
                                           else
                                               $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                                       }
                                       $pagination.= "...";
                                       $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                                       $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";       
                                   }
                                   //in middle; hide some front and some back
                                   elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
                                   {
                                       $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                                       $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                                       $pagination.= "...";
                                       for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                                       {
                                           if ($counter == $page)
                                               $pagination.= "<span class=\"current\">$counter</span>";
                                           else
                                               $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                                       }
                                       $pagination.= "...";
                                       $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                                       $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";       
                                   }
                                   //close to end; only hide early pages
                                   else
                                   {
                                       $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                                       $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                                       $pagination.= "...";
                                       for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                                       {
                                           if ($counter == $page)
                                               $pagination.= "<span class=\"current\">$counter</span>";
                                           else
                                               $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                                       }
                                   }
                               }
                               
                               //next button
                               if ($page < $counter - 1) 
                                   $pagination.= "<a href=\"$targetpage?page=$next\">Berikutnya >></a>";
                               else
                                   $pagination.= "<span class=\"disabled\">Berikutnya >></span>";
                               $pagination.= "</div>\n";       
                           }
                           ?>
						   
					 <table class="table table-hover">
						<thead>
                           <th>No</th>
                           <th>Username</th>
                           <th>Email</th>
                           <th>Join Date</th>
                           <th>
                              <center>Action</center>
                           </th>
                        </thead>
						
						<?php
					
						$sql = "Select * from user order by id_user DESC LIMIT $start, $limit";
                                             
                                             if($result = @mysql_query($sql)){
                                                 if(mysql_num_rows($result) > 0){
                                                     while($row = mysql_fetch_array($result)){
														// $TopicCategori = $row['nama_kategori'];
														// $grups = $row['nama_grup'];
														
                           ?>
                        <tbody>
                           <td><?php echo $no++ ?></td>
                           <td><?php echo $row['name'] ?></td>
                           <td><?php echo $row['email'] ?></td>
                           <td><?php echo $row['date_join'] ?></td>
                           <td width="140x">
                              <center><!--<button class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row['id_comment'] ?>">Ubah</button> -->
                                 <button class="btn btn-primary" data-toggle="modal" data-target="#false">Banned</button>
                              </center>
                           </td> 
							
							 <!-- Dialog Banned -->
                           <div class="modal fade" id="false" tabindex="-1" role="dialog" aria-labelledby="yourmodallabel" aria-hidden="true">
                              <form action="deletecomment" method="post" id="clickform" class="form-horizontal">
                                 <div class="modal-dialog">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="delmodal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title" id="yourmodallabel"><font face="Comic Sans MS" align="center">Comment <?php echo $row['name'] ?> </font></h4>
                                       </div>
                                       <div class="modal-body">
                                          <!-- Start -->
                                          <center>
                                             <h4> Are you sure banned this user? </h4>
                                             <button name="idform" type="submit" class="btn btn-primary" value="<?php echo $row['id_comment'] ?>">Ban</button>
                                             <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                          </center>
                                       </div>
                                       <div class="modal-footer">
                                          <p> © Copyright 2017. Gaming Zone</p>
                                       </div>
                                    </div>
                                 </div>
								 </form>
                           </div>
						   
                        </tbody>
                        <?php
                           }
                           }echo "</table>";
                           } else{
                           echo "ERROR: Could not able to execute $sql. ";
                           }
                           ?>
                        <?php echo "<div align='center'>"?>
                        <?=$pagination?>
                        <?php echo "</div>"?>	
				 </div>
					 
				</div>
				
				
			  </div>
			   
		</div>
		
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
</body>
</html>
