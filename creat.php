<?php 
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>add new articel</title>
</head>
<center>
<body>
	<br><br>
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="id" value="<?= $tambah["id"]?>">
 		<br>
 		nama	: 
		<input type="text" name="nama" placeholder="" value="">
		<br>
		<br>
 		asal_negara	: 
		<input type="text" name="asal_negara" placeholder="" value="">
		<br>
		<br>
		prestasi	:
		<textarea type="text" name="prestasi" placeholder="" value=""></textarea>
		<br><br>
		<input type="submit" name="submit"">
</body>
</form></body></center>
</html>