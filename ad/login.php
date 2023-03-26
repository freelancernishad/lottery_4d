<?php
session_start();
include '../config.php';
	
	if(isset($_POST['email'])){
		
		  $email = $_POST['email'];
		 $password = $_POST['password'];
		 
		 
		 $qu = $conn->query("SELECT * FROM `users` WHERE `email`='$email' && `password`='$password'");
	
		 $count = $qu->num_rows;
		 $fetch = $qu->fetch_assoc();

		 if($count){
		
			 $_SESSION['adminId'] = $fetch['id'];
			 echo '<script type="text/javascript">window.location.href="index.php"</script>'; 
			
			 
		 }else{
			  $_SESSION['alert'] = 'error';
				 $_SESSION['flash_message'] = 'Authentication failed';
			 $_SESSION['flash_message2'] = 'Password is Incorrect.Please enter correct password or contact with admin!';
			 
			echo '<script type="text/javascript">window.location.href="index.php"</script>'; 
		 }
		
	}
