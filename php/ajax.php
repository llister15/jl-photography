<?php
if ( isset( $_POST['data'] ) ) {
	$cat = $_POST['data'];
	$dir = "../img/".$cat;
	$images = scandir($dir);
	$return = json_encode($images)
	return $images;
}