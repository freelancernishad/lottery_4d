<?php 
session_start();
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
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.0/sweetalert2.min.css" integrity="sha512-y4S4cBeErz9ykN3iwUC4kmP/Ca+zd8n8FDzlVbq5Nr73gn1VBXZhpriQ7avR+8fQLpyq4izWm0b8s6q4Vedb9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body style="background: linear-gradient(to right, #000000ad, #000000b8),url(img/indexBG.jpeg) !important;">

    <!-- Gd-lotto-star -->
  	<section class="gd_lotto">
      <div class="container">
        <div class="row">
          <div class="border border-danger my-5" class="col-md-12">
            <img class="mx-auto d-block w-50 border border-danger" src="img/gd_lotto.png" alt="gd_lottery logo">
            <button class="mx-auto d-block my-3 btn btn-primary w-50" data-toggle="modal" data-target="#myModal">LOGIN</button>

            <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
					<form action="login.php" method="POST">
                      <div class="modal-header">
                        <h2>Login For Your Number</h2>
                      </div>
					  <input type="hidden" name="type" value="Grand Dragon" />
                      <div class="modal-body mx-auto">
                      <label>Enter Password:</label><br>
                        <input class="w-100" type="password" name="password"  id="userpassword" placeholder="Password">
                      </div>
                      <div class="modal-footer">
                      <button type="submit" class="btn btn-default mx-auto btn-success" >Login</button>
                      </div>
					    </form>
                    </div>
                  </div>
                </div>
                <!-- Modal -->

          </div>
        </div>
      </div>
    </section>
<!-- Gd-lotto-end -->


    
<!-- toto-lotto-star -->
<section class="gd_lotto">
      <div class="container">
        <div class="row">
          <div class="border border-danger my-5" class="col-md-12">
            <img class="mx-auto d-block w-50 border border-danger" src="img/toto_lotto.jpg" alt="gd_lottery logo">
            <button class="mx-auto d-block my-3 btn btn-primary w-50" data-toggle="modal" data-target="#myModal1">LOGIN</button>

            <!-- Modal -->
                <div class="modal fade" id="myModal1" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
					
					<form action="login.php" method="POST">
                      <div class="modal-header">
                        <h2>Login For Your Number</h2>
                      </div>
					   <input type="hidden" name="type" value="ToTo" />
                      <div class="modal-body mx-auto">
                      <label>Enter Password:</label><br>
                    <input class="w-100" type="password" name="password"  id="userpassword" placeholder="Password">
                      </div>
                      <div class="modal-footer">
                      <button type="submit" class="btn btn-default mx-auto btn-success" >Login</button>
                      </div>
					  </form>
					  
                    </div>
                  </div>
                </div>
                <!-- Modal -->

          </div>
        </div>
      </div>
    </section>
<!-- toto-lotto-end -->
  



    
<!-- toto-lotto-star -->
<section class="gd_lotto">
      <div class="container">
        <div class="row">
          <div class="border border-danger my-5" class="col-md-12">
            <img class="mx-auto d-block w-50 border border-danger" src="img/singapur.jpeg" alt="gd_lottery logo">
            <button class="mx-auto d-block my-3 btn btn-primary w-50" data-toggle="modal" data-target="#myModal2">LOGIN</button>

            <!-- Modal -->
                <div class="modal fade" id="myModal2" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
					
					<form action="login.php" method="POST">
                      <div class="modal-header">
                        <h2>Login For Your Number</h2>
                      </div>
					   <input type="hidden" name="type" value="Singapore" />
                      <div class="modal-body mx-auto">
                      <label>Enter Password:</label><br>
                    <input class="w-100" type="password" name="password"  id="userpassword" placeholder="Password">
                      </div>
                      <div class="modal-footer">
                      <button type="submit" class="btn btn-default mx-auto btn-success" >Login</button>
                      </div>
					  </form>
					  
                    </div>
                  </div>
                </div>
                <!-- Modal -->

          </div>
        </div>
      </div>
    </section>
<!-- toto-lotto-end -->
  


























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
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);

	?>
	<script type="text/javascript">
	Swal.fire({
  icon: 'error',
  title: 'Authentication failed',
  text: '<?php echo $message ?>',

})
	</script>
	<?php 
}
?>

   
  </body>
</html>