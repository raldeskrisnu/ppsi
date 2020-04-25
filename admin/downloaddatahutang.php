<html>
<head>
	<title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Hutang.xls");
	?>
 
 <center>
		<h1>Data Hutang<br/></h1>
	</center>
 
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
            <th>Harga jual</th>
            <th>Total Harga</th>
            <th>Jumlah beli</th>
            <th>Transaksi</th>
			<th>Nama customer</th>
        </tr>
        
		<?php
		$mysql_hostname = "localhost";
		$mysql_user = "root";
		$mysql_password = "";
		$mysql_database = "inventory";
			
		$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

		$sql = "SELECT nama_barang, id_transaksi, harga_jual, total_harga, jumlah_beli, jenis_transaksi, customer FROM barang t1 INNER JOIN transaksi t2 ON t2.id_barang = t1.id_barang";
		$i = 1;
		if($result = @mysqli_query($conn,$sql)){
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
                    
        ?>
		
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $row['nama_barang'];?></td>
			<td><?php echo $row['harga_jual'];?></td>
            <td><?php echo $row['total_harga'];?></td>
            <td><?php echo $row['jumlah_beli'];?></td>
            <td><?php echo $row['jenis_transaksi'];?></td>
            <td><?php echo $row['customer'];?></td>
        </tr>
        
            <?php }
            }
        }?>
	</table>
</body>
</html>