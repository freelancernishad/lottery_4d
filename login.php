<?php 
session_start();
include 'config.php';





	if(isset($_POST['type'])){
		
		  $type = $_POST['type'];
		 $password = $_POST['password'];
		 
		 
		 $qu = $conn->query("SELECT * FROM `lotary` WHERE `type`='$type' && `password`='$password'");
	
		 $count = $qu->num_rows;
		 $fetch = $qu->fetch_assoc();

		 if($count){
			 $type = $fetch['type'];
			 $_SESSION['type'] = $fetch['type'];
			 $_SESSION['id'] = $fetch['id'];
			 
			 
			 if($type=='Grand Dragon'){
				 echo '<script type="text/javascript">window.location.href="gd.php"</script>';
			 }else if($type=='ToTo'){
					 echo '<script type="text/javascript">window.location.href="toto.php"</script>'; 
			 }else if($type=='Singapore'){
					 echo '<script type="text/javascript">window.location.href="Singapore.php"</script>'; 
			 }
			 
		 }else{
			 
			 $_SESSION['flash_message'] = 'Password is Incorrect.Please enter correct password or contact with admin!';
			 
			  echo '<script type="text/javascript">window.location.href="index.php"</script>'; 
		 }
		
	}

?>