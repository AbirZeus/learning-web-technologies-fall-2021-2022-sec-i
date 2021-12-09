<?php 

	$des = "upload/".$_FILES["myfile"]["name"];

	$src = $_FILES["myfile"]["Downloads"];

	move_uploaded_file($src, $des);
		
	
?>