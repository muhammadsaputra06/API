<?php 
	require 'koneksi.php';


	session_start();
	$nama = $_POST['nama'];
	$asal_negara = $_POST['asal_negara'];
	$prestasi = $_POST['prestasi'];
	
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$nama','$asal_negara','$prestasi',null)");

		if ($tambah>0) {
			echo "data berhasil ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
		else {
			echo "data gagal ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
		echo " bray";

		}
	

 ?>