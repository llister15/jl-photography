<?php
if ( isset( $_POST['data'] ) ) {
	$cat = $_POST['data'];
	$dir = "../img/".$cat."/";
	$return = array();
	if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    	if ($file != '.' && $file != '..') {
      	$return[]= $file;
    	}
    }
    closedir($dh);
  }
	}
	echo json_encode($return);
	return;
}