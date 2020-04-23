<?php 
	error_reporting(E_ALL ^ ~E_STRICT);
	include '../assets/connect.php';
	
	$id = $_POST['idform'];
	
	if (empty($_POST['idform'])) {  
			echo '<script language="javascript">  
			alert(" Something wrong ! ! !");  
			window.location="viewcomment.php?page=1";  
			</script>';  
			exit();
    } else {
		$deletesql = "DELETE FROM comment_user WHERE id_comment = '$id'";
				if(mysqli_query($deletesql))
				{
					echo '<script language="javascript">  
							window.location="viewcomment.php?page=1";  
						</script>';  
						exit();
				} else {
					echo '<script language="javascript">  
							alert(" Hapus Topik Error ! ! !");  
							window.location="viewcomment.php?page=1";  
						 </script>';  
					exit();
				}
		
	}
?>