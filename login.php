<?php
ob_start();
session_start();

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "inventory";
$prefix = "";
	
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
	
$encrypt_password = $_POST['form-password'];
$username         = $_POST['form-username'];
$cek              = "SELECT * FROM user WHERE email='$username' and password='" . md5($encrypt_password) . "'";
$hasil            = mysqli_query($bd,$cek);

// $result = mysqli_query($bd,$cek);
$link = mysqli_connect("localhost", "root", "", "inventory");

if ($result = mysqli_query($link, $cek)) {
	header('Location: admin/index');
	$_SESSION['username2'] = $_POST['form-username'];
} else {
    echo "<script>alert('Maaf Username atau Password anda Salah !')
location.replace('index.php')</script>";
}

?>