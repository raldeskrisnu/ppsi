<?php 
	error_reporting(E_ALL ^ ~E_STRICT);
	include '../assets/connect.php';
	
	$id = $_POST['idform'];
	
	if (empty($_POST['idform'])) {  
			echo '<script language="javascript">  
			alert(" Something wrong ! ! !");  
			window.location="allcontent.php?page=1";  
			</script>';  
			exit();
    } else {
		$deletesql = "DELETE FROM main_content WHERE id_content = '$id'";
				if(mysqli_query($deletesql))
				{
					echo '<script language="javascript">  
							window.location="allcontent.php?page=1";  
						</script>';  
						exit();
				} else {
					echo '<script language="javascript">  
							alert(" Hapus Topik Error ! ! !");  
							window.location="allcontent.php?page=1";  
						 </script>';  
					exit();
				}
		
	}
?>