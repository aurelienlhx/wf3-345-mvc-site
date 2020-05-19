<?php 

if( isset($_GET['controller']) ){
	$controller = $_GET['controller'];
}else{
	$controller = 'category';
}

$path = 'controllers/'.$controller.'.php';

if( file_exists($path) ) {
	require_once($path);
}else{
	echo 'Cette page n\'existe pas'; 
}