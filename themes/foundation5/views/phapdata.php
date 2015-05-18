<?php 
$tableId = '1sWZcThAR9jp0WB_o3tkMT8_Z191-zCd8td8OnxHs';
$key = 'AIzaSyAOq38K1cZ2J9m3cRssa1yDPxeKA19GA_I';
$gSQL = 'https://www.googleapis.com/fusiontables/v1/query?sql=';

$query = "SELECT 'Client Initial', 'Date of Initial Assessment', 'Date of Obtained Consent', Age FROM ".$tableId." ORDER BY 'Date of Initial Assessment' ASC";
$encodedQuery = encodeURIComponent($query);

$url = $gSQL.$encodedQuery."&key=".$key;
		

if (is_ajax()) {
	$response = file_get_contents($url);
	echo $response;
 
  }
  else{header("Location: http://pharmfair.com/ipharm/");}
  
  
//funtion to make an encodedURIcomponent in PHP
function encodeURIComponent($str) {
    $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
    return strtr(rawurlencode($str), $revert);
}
//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

?>