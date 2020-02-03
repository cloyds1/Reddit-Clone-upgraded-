<?php

function jsonToArray($filename){
	
	$file = file_get_contents($filename);
	$data = json_decode($file, true);
	
	return $data;

}

?>