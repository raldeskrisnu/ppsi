<?php
@ob_start();

session_start();
date_default_timezone_set("Asia/Jakarta");

$idbarang = $_POST['namabarang'];
$jenistransaksi = $_POST['jenistransaksi'];
$hargabarang = $_POST['harga_barang'];
$jumlahbeli = $_POST['jumlahbeli'];
$totalhargabarang = $_POST['totalhargabarang'];
$customer = $_POST['namacustomer'];

$uploadDirImage = "assets/img/";
$author = $_SESSION['username2'];
$dateregister = date('Y-m-d');

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "inventory";

$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO transaksi (id_barang, jenis_transaksi, jumlah_beli, total_harga, customer) VALUES ('$idbarang', '$jenistransaksi', '$jumlahbeli','$totalhargabarang', '$customer')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Input data berhasil !')
location.replace('transaksi.php')</script>";
} else {
    echo "<script>alert('Terjadi kesalahan!')location.replace('transaksi.php')</script>";
}

mysqli_close($conn);

?>