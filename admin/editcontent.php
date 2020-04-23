<?php 
	error_reporting(E_ALL ^ ~E_STRICT);
	include '../assets/connect.php';
	
	$id = $_POST['editform'];
	
		if (empty($_POST['editform'])) {  
			echo '<script language="javascript">  
			alert(" Something wrong ! ! !");  
			window.location="allcontent.php?page=1";  
			</script>';  
			exit();
    } else {
				$sql = "select * from main_content where id_content = '$id'";
			
				if($result = @mysqli_query($sql)){
				 if(mysqli_num_rows($result) > 0){
					 while($row = mysqli_fetch_array($result)){
						$show = $row['show_content'];
						
					}
					
					if($show == '1')
					{
						$updatesql = "UPDATE main_content SET show_content='0' where id_content = '$id'";
						if(mysql_query($updatesql))
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
						
					} else if($show == '0')
					{
						$updatesql = "UPDATE main_content SET show_content='1' where id_content = '$id'";
						if(mysql_query($updatesql))
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
				 }
				 
				}
				
		
	}
?>