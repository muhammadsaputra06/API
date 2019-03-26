<?php 
	require 'koneksi.php';
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jabatan = $_POST['jabatan'];


	$result = mysqli_query($conn,"INSERT INTO user VALUES(null,'$username','$password','$jabatan')");

	//copy sampe sini btw ini dicopy dari action login




	if ($result) {
		echo "register berhasil";
		echo("<br>");
		echo "login ";
		echo "<a href='register.php'>disini</a>";
		
	}
	else {
		echo "mohon anda lebih selesai";
		echo "<a href='formregister.php'>try egen bray</a>";
	}


?>