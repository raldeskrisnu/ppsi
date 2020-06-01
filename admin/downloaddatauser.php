<html>
<head>
	<title>Data User</title>
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
	header("Content-Disposition: attachment; filename=Data User.xls");
	?>
 
 <center>
		<h1>Data Hutang<br/></h1>
	</center>
 
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
        
		<?php
		$mysql_hostname = "localhost";
		$mysql_user = "root";
		$mysql_password = "";
		$mysql_database = "inventory";
			
		$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

		$sql = "SELECT * FROM user";
		$i = 1;
		if($result = @mysqli_query($conn,$sql)){
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
                    
        ?>
		
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['email'];?></td>
            <td><?php echo $row['role'];?></td>
        </tr>
        
            <?php }
            }
        }?>
	</table>
</body>
</html>