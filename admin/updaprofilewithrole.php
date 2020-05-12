<?php
@ob_start();

session_start();
date_default_timezone_set("Asia/Jakarta");

$email = $_POST['email'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$iduser = $_POST['iduser'];
$role = $_POST['roleuser'];

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "inventory";

$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

$cek = "SELECT * FROM user WHERE email='$iduser'";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($result = mysqli_query($conn, $cek)) {
	
    if(mysqli_num_rows($result) > 0){
        $sql = "UPDATE user SET email='$email', name='$nama' , role='$role', password = '" . md5($password) . "' WHERE email = '$iduser'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Update data berhasil !')
        location.replace('userlist.php')</script>";

        } else {
            echo "<script>alert('Terjadi kesalahan!')location.replace('profile.php')</script>";
        }

    } else {
        echo "<script>alert('Somehthing went wrong !')
        location.replace('index.php')</script>";
    }

} else {

    echo "<script>alert('Somehthing went wrong !')
    location.replace('userlist.php')</script>";
}

mysqli_close($conn);

?>