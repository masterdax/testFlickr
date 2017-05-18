<?php
echo "Your selected image is:";
	if(isset($_GET['mysource'])){
	?>

		<img src="<?php echo base64_decode($_GET['mysource']); ?>" />

	<?php
	}

