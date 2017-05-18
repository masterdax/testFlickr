<?php
//function to get recent photos from flickr
function getRecentPhotos($api_key){
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
		$dcodedRes = json_decode($postResult);
	} 
	curl_close($ch); 

return $dcodedRes;
}
//function to get size of given photo
function getPhotoSize($api_key,$photo_id){
	$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.getSizes&api_key='.$api_key.'&photo_id='.$photo_id.'&format=json&extras=original_format&nojsoncallback=?';

	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, $url ); 

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$postResult = curl_exec($ch); 

	if(curl_errno($ch)) { 
	   print curl_error($ch); 
	}else{
		$dcodedRes = json_decode($postResult);
	} 
	curl_close($ch); 

return $dcodedRes;
}