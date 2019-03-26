<?php 
	session_start();
	
	session_destroy();

	// die("anda sudah logout");
	header('location:index.php');
	exit;

 ?>
 