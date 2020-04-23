<?php 
	error_reporting(E_ALL ^ ~E_STRICT);
	
    $link = mysqli_connect("localhost", "root", "", "inventory");
	
	$id = $_POST['idform'];
	
	if (empty($_POST['idform'])) {  
			echo '<script language="javascript">  
			alert(" Something wrong ! ! !");  
			window.location="cekbarang";  
			</script>';  
			exit();
    } else {
		$deletesql = "DELETE FROM barang WHERE id_barang = '$id'";
				if(mysqli_query($link,$deletesql))
				{
					echo '<script language="javascript">  
							window.location="cekbarang.php";  
						</script>';  
						exit();
				} else {
					echo '<script language="javascript">  
							alert(" Hapus Barang Error ! ! !");  
							window.location="cekbarang.php";  
						 </script>';  
					exit();
				}
		
    }
    mysqli_close($link);
?>