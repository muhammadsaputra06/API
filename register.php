<?php 
	session_start();
	if (isset($_SESSION['login'])) {
		header("location : admin.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<center>
	<title>Login</title>
</head>
<body  style="background: url('f.jpg');">
 <div class="row">
  <div class="col-md-6 col-md-offset-3">

 	Login <br><br>
 	<form method="POST" action="actionlogin.php">
 		username	: 
		<input type="text" name="username" placeholder="username">
		<br>
		<br>
		password	:
		<input type="password" name="password" placeholder="password">
		<br>
		<br>
		jabatan	:
		<input type="text" name="jabatan" placeholder="jabatan">
		<br><br>
		<input type="submit" name="masuk">
 	</form>
 		<br><br> <h3>anda belum punya akun?</h3> <button><a href="formregister.php"> Sign Up</a></button>
 </div>
</div>
</body>
</center>
</html>