<?php 
session_start();
include '../config.php';





	if(isset($_POST['type'])){
		
		  $type = $_POST['type'];
		 $oldpass = $_POST['oldpass'];
		 $newpass = $_POST['newpass'];
		 $confpass = $_POST['confpass'];
		
		 $qu = $conn->query("SELECT * FROM `lotary` WHERE `type`='$type' && `password`='$oldpass'");
		 $count = $qu->num_rows;
	
		 
		 
	
		 
		 
		 


		 if($count){
			 	 
		 if($newpass===$confpass){
			 
			 $conn->query("UPDATE `lotary` SET `password`='$newpass' WHERE `type`='$type'	");
			 
		$_SESSION['alert'] = 'success';
		$_SESSION['flash_message'] = 'Success';
		$_SESSION['flash_message2'] = "$type Password successfully changed!";
			   echo '<script type="text/javascript">window.location.href="index.php"</script>'; 
			 
		 }else{
			  $_SESSION['alert'] = 'error';
		$_SESSION['flash_message'] = 'Failed';
		$_SESSION['flash_message2'] = 'New password and confirm does not match';
			 
			  echo '<script type="text/javascript">window.location.href="index.php"</script>'; 
			 
		 }
		 
			 
		 }else{
			 $_SESSION['alert'] = 'error';
			 $_SESSION['flash_message'] = 'Failed';
			 $_SESSION['flash_message2'] = 'Old Password Does not match! please enter correct old password';
			 
			  echo '<script type="text/javascript">window.location.href="index.php"</script>'; 
		 }
		
	}

?>