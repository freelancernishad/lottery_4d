<?php
session_start();
if(isset($_SESSION['type'])){
	if($_SESSION['type']=='Grand Dragon'){
		
	}else{
		 echo '<script type="text/javascript">window.location.href="index.php"</script>';
	}
	
	
	
}else{
	 echo '<script type="text/javascript">window.location.href="index.php"</script>';
}

 include 'scrap/function.php';
 

 function scrapWebsite($url) {	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);
	$html = new simple_html_dom();
	$html->load($response);
	return $html;	
}

function getPostDetails ($html) {
	$titles = array();
	$i = 0 ;
	foreach($html->find('td') as $post) {		
		$titles[$i] = $post->plaintext;  
	//$titles[$i]['link'] = $post->href;			
		$i++;
	}
	$i = 0 ;
	foreach($html->find('div[class=entry-content] img') as $img) {		
		$titles[$i]['img'] = $img->src;  			
		$i++;
	}
	return $titles;	
}	

function writeToCSV ($postDetail) {
	ob_clean();
	ob_start();
	header('Content-Type: application/csv');
	header('Content-Disposition: attachment; filename="output.csv";');
	$f = fopen('php://memory', 'w'); 
	fputcsv($f, array('Title', 'Link', 'image')); 
	foreach ($postDetail as $key => $value){	
		fputcsv($f, $value);
	}
	fseek($f, 0);		
	fpassthru($f);
	fclose($f);
	exit();
}
 
	$html = scrapWebsite('https://www.check4d.org/');	
	$postDetail = getPostDetails($html);
 	// echo '<pre>';
	// print_r($postDetail);

	/* echo $postDetail[1].'<br/>';
	echo '1st Prize : '.$postDetail[4].'<br/>';
	echo '2nd Prize : '.$postDetail[6].'<br/>';
	echo '3rd Prize : '.$postDetail[8]; */
  


 
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="120;url=logout.php" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lottery World</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  </head>
  <body style="background: linear-gradient(to right, #000000bd, #000000b8),url(img/gdBg.jpeg);  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;    height: 100vh;">

  <header>
  
  <a href="logout.php">Logout</a>
  
  
  </header>
<!-- Gd-lotto-star -->
<div class="gd-lotto border border-dark" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
    <div class="text-center mt-5">
        <h1 class="border border-danger d-inline-block bg-primary p-3">Dragon-4D</h1>
    </div>
    <div class="text-center">
        <h3 class="border border-danger d-inline-block text-white bg-success p-3">1ST PRIZE NUMBER</h3>
    </div>
    <div class="text-center mt-5">
	

	
	
        <input style="height: 50px; font-size: 20px; outline: none;text-align:center" class="border border-danger" type="text" name="lottoNumber" id="lottoNumber" value="<?php echo  $postDetail[740] ?>" readonly>
    </div>

    
</div>
    
<!-- Gd-lotto-end -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
  
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
   
  </body>
</html>