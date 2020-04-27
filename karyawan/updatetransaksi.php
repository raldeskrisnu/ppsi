<?php 
	error_reporting(E_ALL ^ ~E_STRICT);
	
    $link = mysqli_connect("localhost", "root", "", "inventory");
	
	$id = $_POST['idform'];
	
	if (empty($_POST['idform'])) {  
			echo '<script language="javascript">  
			alert(" Something wrong ! ! !");  
			window.location="hutang";  
			</script>';  
			exit();
    } else {
        echo $id;
		$updatesql = "UPDATE transaksi SET jenis_transaksi = 'Cash' WHERE id_transaksi = '$id'";
				if(mysqli_query($link,$updatesql))
				{
					echo '<script language="javascript">  
							window.location="hutang.php";  
						</script>';  
						exit();
				} else {
					echo '<script language="javascript">  
							alert(" Update Hutang Error ! ! !");  
							window.location="hutang.php";  
						 </script>';  
					exit();
				}
		
    }
    mysqli_close($link);
?>