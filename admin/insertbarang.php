<?php
@ob_start();

session_start();
date_default_timezone_set("Asia/Jakarta");

$idbarang = $_POST['idbarang'];
$jenisbarang = $_POST['jenisbarang'];
$namabarang = $_POST['namabarang'];
$hargabeli = $_POST['hargabeli'];
$hargajual = $_POST['hargajual'];
$jumlahstock = $_POST['jumlahstock'];
$description = $_POST['description'];

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

$sql = "INSERT INTO barang (id_barang, jenis_barang, nama_barang, harga_beli, harga_jual, jumlah_stock, deskripsi) VALUES ('$idbarang', '$jenisbarang', '$namabarang','$hargabeli','$hargajual','$jumlahstock','$description')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Input data berhasil!')location.replace('stockopname.php')</script>";
} else {
    echo "<script>alert('Terjadi kesalahan!')location.replace('stockopname.php')</script>";
}

mysqli_close($conn);

?>