<?php

    $databarang = $_POST['namabarang'];
   
    if($databarang == "Data Transaksi") {
        header("Location: downloaddatatransaksi.php");
    } else if($databarang == "Data Barang") {
        header("Location: downloaddatabarang.php");
    } else if($databarang == "Data Hutang") {
        header("Location: downloaddatahutang.php");
    }
    

    
?>