<form method="post" name="scrap_form" id="scrap_form" action="">   
	<label>Enter Website URL To Scrape Data</label>	
	<input type="input" name="website_url" id="website_url"> 
	<input type="submit" name="submit" value="Submit" >    	
</form>
<?php 
include 'simple_html_dom.php';

 
 
 

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
 
	$html = scrapWebsite('https://www.check4d.com/cambodia-4d-results/');	
	$postDetail = getPostDetails($html);
/* 	echo '<pre>';
print_r($postDetail) */;
/* echo $postDetail[1].'<br/>';
echo '1st Prize : '.$postDetail[4].'<br/>';
echo '2nd Prize : '.$postDetail[6].'<br/>';
echo '3rd Prize : '.$postDetail[8];
  */


 
 
?>