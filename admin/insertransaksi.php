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
$nikcustomer = $_POST['nikcustomer'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];

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

$sql = "INSERT INTO transaksi (id_barang, jenis_transaksi, jumlah_beli, total_harga, customer, nik_customer, tempat_lahir, tanggal_lahir) VALUES ('$idbarang', '$jenistransaksi', '$jumlahbeli','$totalhargabarang', '$customer', '$nikcustomer', '$tempatlahir', '$tanggallahir')";

if (mysqli_query($conn, $sql)) {

    $sql2 = "SELECT * FROM barang WHERE id_barang ='$idbarang'";
    if($result = @mysqli_query($conn,$sql2)){
        if(mysqli_num_rows($result) > 0){ 
            while($row = mysqli_fetch_array($result)){
                $jumlahstock = $row['jumlah_stock'];
                $sisabarang = $row['jumlah_stock'] - $jumlahbeli;
                
                $updatesql = "UPDATE barang SET jumlah_stock = '$sisabarang' WHERE id_barang = '$idbarang'";

				if(mysqli_query($conn,$updatesql))
				{
                    echo "<script>alert('Input data sukses !')
location.replace('transaksi.php')</script>"; 
						
				} else {
                    echo "<script>alert('Terjadi kesalahan !')
                    location.replace('transaksi.php')</script>"; 
				}
                break;
            }

            
        } else {
            echo "<script>alert('Terjadi kesalahan !')
                    location.replace('transaksi.php')</script>"; 
        }
    } else {
        echo "<script>alert('Terjadi kesalahan !')
                    location.replace('transaksi.php')</script>"; 
    }

} else {
    echo "<script>alert('Terjadi kesalahan !')
                    location.replace('transaksi.php')</script>"; 
}


?>