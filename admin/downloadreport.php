<?php

    $databarang = $_POST['namabarang'];
   
    if($databarang == "Data Transaksi") {
        header("Location: #");
    } else if($databarang == "Data Barang") {
        echo $databarang;
    } else if($databarang == "Data Hutang") {
        header("Location: downloaddatahutang.php");
    }
    

    
?>