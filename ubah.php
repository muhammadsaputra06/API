<?php 
	require 'koneksi.php';
	session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

	$id = $_GET["id"];

	$ubah = query("SELECT * FROM blog WHERE id = $id")[0];


	if (isset($_POST["submit"])) {
		if (ubah ($_POST) > 0){
			header('location: admin.php');
		}
		else{
			echo "data gagal diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " bray";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<center>
<head>
	<title>Edit articel</title>
</head>
<body  bgcolor="blue">
	<br><br><!-- 
	<?php $waktu = date_default_timezone_set('Asia/Jakarta');  ?> -->

 	<form method="POST" action="">
 		<input type="hidden" name="id" value="<?= $ubah["id"]?>">
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
 	</form>
</body>
</center>
</html>