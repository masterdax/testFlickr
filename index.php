<?php

$api_key = '6a31a483b416a592a274ebfcf367bc08';


$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.getRecent&api_key='.$api_key.'&format=json&extras=original_format&nojsoncallback=?';

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url ); 

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$postResult = curl_exec($ch); 


if(curl_errno($ch)) { 
   print curl_error($ch); 
}else{
	$d = json_decode($postResult);
} 
curl_close($ch); 
foreach($d->photos->photo as $n){
if(isset($n->originalformat)){
?>
	<img src="https://farm<?php echo $n->farm; ?>.staticflickr.com/<?php echo $n->server; ?>/<?php echo $n->id ?>_<?php echo $n->secret ?>.<?php echo $n->originalformat; ?>" />
<?php	
}
}
