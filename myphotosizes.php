<?php
include 'MyFlickr.php';

$api_key = '6a31a483b416a592a274ebfcf367bc08';
$d = getRecentPhotos($api_key);
if(isset($_GET['photoid'])){
	$photosizes = getPhotoSize($api_key,$_GET['photoid']);
	echo "Available photo sizes for your selected photo are : ";
	?>
	<ul>
	<?php foreach($photosizes->sizes->size as $mysize){ ?>
	<a href="myimage.php?mysource=<?php echo base64_encode($mysize->source); ?>">
		<li><?php echo $mysize->label; ?></li>
	</a>
	<?php } ?>	
	</ul>
	<?php
}else{
	echo "Please select image from home page";
}