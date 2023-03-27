<?php
session_start();
include '../config.php';


 ?>
 
 
 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lottery World</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.0/sweetalert2.min.css" integrity="sha512-y4S4cBeErz9ykN3iwUC4kmP/Ca+zd8n8FDzlVbq5Nr73gn1VBXZhpriQ7avR+8fQLpyq4izWm0b8s6q4Vedb9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>

  
	<div class="container">
		
		
		
		<?php 
		
		if(isset($_SESSION['adminId'])){
			//unset($_SESSION['adminId']);
			?>
			  <header>
  
  <a href="logout.php">Logout</a>
  
  
  </header>
			<h3>Grand Dragon Account Password Change</h3>
			<form action="passchange.php" method="POST">
			
				<input type="hidden" name="type" value="Grand Dragon" />
				
				<div class="row">
				
					<div class="col-md-6">
						<div class="from-group">
							<label for="">Old password</label>
							<input type="password" name="oldpass" class="form-control" required />
						</div>
						
					</div>
					<div class="col-md-12"></div>
					<div class="col-md-6">
						<div class="from-group">
							<label for="">New password</label>
								<input type="password" name="newpass" class="form-control" required />
						</div>
						
					</div>
					
					<div class="col-md-6">
						<div class="from-group">
							<label for="">Confirm password</label>
								<input type="password" name="confpass" class="form-control" required />
						</div>
						
					</div>
					
					
					<div class="col-md-6">
						<div class="from-group">
						
				<input type="submit" class="btn btn-info mt-3" value="Change Password" />
						</div>
						
					</div>
					
					
				</div>
				
			
			</form>
			
			
			
			<h3>ToTo Account Password Change</h3>
			
						<form action="passchange.php" method="POST">
			
				<input type="hidden" name="type" value="ToTo" />
				
				<div class="row">
				
					<div class="col-md-6">
						<div class="from-group">
							<label for="">Old password</label>
							<input type="password" name="oldpass" class="form-control" required />
						</div>
						
					</div>
					<div class="col-md-12"></div>
					<div class="col-md-6">
						<div class="from-group">
							<label for="">New password</label>
								<input type="password" name="newpass" class="form-control" required />
						</div>
						
					</div>
					
					<div class="col-md-6">
						<div class="from-group">
							<label for="">Confirm password</label>
								<input type="password" name="confpass" class="form-control" required />
						</div>
						
					</div>
					
					
					<div class="col-md-6">
						<div class="from-group">
						
				<input type="submit" class="btn btn-info mt-3" value="Change Password" />
						</div>
						
					</div>
					
					
				</div>
				
			
			</form>
			
			
			<h3>SINGAPORE Account Password Change</h3>
			
						<form action="passchange.php" class="mb-5" method="POST">
			
				<input type="hidden" name="type" value="Singapore" />
				
				<div class="row">
				
					<div class="col-md-6">
						<div class="from-group">
							<label for="">Old password</label>
							<input type="password" name="oldpass" class="form-control" required />
						</div>
						
					</div>
					<div class="col-md-12"></div>
					<div class="col-md-6">
						<div class="from-group">
							<label for="">New password</label>
								<input type="password" name="newpass" class="form-control" required />
						</div>
						
					</div>
					
					<div class="col-md-6">
						<div class="from-group">
							<label for="">Confirm password</label>
								<input type="password" name="confpass" class="form-control" required />
						</div>
						
					</div>
					
					
					<div class="col-md-6">
						<div class="from-group">
						
				<input type="submit" class="btn btn-info mt-3" value="Change Password" />
						</div>
						
					</div>
					
					
				</div>
				
			
			</form>
			
			<?php
		}else{
			
		
		?>
		
		<form action="login.php" method="POST">
		
			<div class="form-group">
				<label for="">Email</label>
			<input type="email" name="email" class="form-control" required />
			</div>
		
			<div class="form-group">
				<label for="">Password</label>
			<input type="password" name="password" class="form-control" required />
			</div>
		
			<div class="form-group">
				
			<input type="submit"  class="btn btn-info mt-3" value="Login"  />
			</div>
		
		</form>
	<?php } ?>
	</div>
  
  
  
  
  


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
  
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.0/sweetalert2.min.js" integrity="sha512-4tabfKsx9Wdz5xwd0sT7jqKrieHkIpLXWXVeG/GT4BohF2l/eIaE54Gxb2gzeSH/kVwz0tLL4qpJwsluJuSymA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<?php 
	if(isset($_SESSION['flash_message'])) {
    $alert = $_SESSION['alert'];
    $title = $_SESSION['flash_message'];
    $message = $_SESSION['flash_message2'];
    unset($_SESSION['alert']);
    unset($_SESSION['flash_message']);
    unset($_SESSION['flash_message2']);

	?>
	<script type="text/javascript">
	Swal.fire({
  icon: '<?php echo  $alert ?>',
  title: '<?php echo $title ?>',
  text: '<?php echo $message ?>',

})
	</script>
	<?php 
}
?>

   
  </body>
</html>