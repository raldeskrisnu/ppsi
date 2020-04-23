<?php
  error_reporting(E_ALL ^ E_DEPRECATED);
    $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "gzone";
    $prefix = "";
	
    $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");

    $db_select = mysqli_select_db($bd, $mysql_database);
    if (!$db_select) {
      error_log("Database selection failed: " . mysqli_error($bd));
      die('Internal server error');
    }

    // mysqli_select_db($mysql_database, $bd) or die("database tidak ditemukan");
?>
	