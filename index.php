<?php
include 'MyFlickr.php';

$api_key = '6a31a483b416a592a274ebfcf367bc08';
$d = getRecentPhotos($api_key);

foreach($d->photos->photo as $n){
	if(isset($n->originalformat)){
	?>
	<a href="myphotosizes.php?photoid=<?php echo $n->id; ?>">
		<img src="https://farm<?php echo $n->farm; ?>.staticflickr.com/<?php echo $n->server; ?>/<?php echo $n->id ?>_<?php echo $n->secret ?>.<?php echo $n->originalformat; ?>" />
	</a>
	<?php
	}
}
