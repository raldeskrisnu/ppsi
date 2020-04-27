<?php
@ob_start();

session_start();
date_default_timezone_set("Asia/Jakarta");

$email = $_POST['email'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$roleuser = $_POST['roleuser'];

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "inventory";

$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (email, name, password, role) VALUES ('$email', '$nama', '" . md5($password) . "','". strtolower($roleuser) ."')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Input data berhasil !')
location.replace('user.php')</script>";
} else {
    echo "<script>alert('Terjadi kesalahan!')location.replace('user.php')</script>";
}

mysqli_close($conn);

?>