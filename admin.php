<?php 
require 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM blog");
  
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>admin</title>
</head>
<body  bgcolor="pink">

<center>
 <br>
<button><a href="creat.php">Tambah</a></button>
<button><a href="logout.php">Logout</a></button>
<br><br>
    <h2>DERETAN PEMAIN</h2>
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>NO</th>
    <th>NAMA</th>
    <th>ASAL NEGARA</th>
    <th>PRESTASI</th>
    <th>WAKTU</th>
    <th>opsi</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["nama"] ?></td>
    <td><?= $x["asal_negara"];  ?></td>
    <td><?= $x["prestasi"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
      <center><button><a href="ubah.php?id=<?= $x["id"]?>">ubah</a></button><br><br><button><a href="hapus.php?id=<?= $x["id"]?>" onclick =" return confirm ('yakin anda mau menghapus?');">hapus</a></button>
      </center>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
<div id="kanan">
  <br><br> 
   <form id="form-container" class="form-container">

      <center>  
      <h2>WIKIPEDIA</h2>
      <input type="text" id="input" placeholder="search wikipedia">
      <button id="submit-btn" class="">submit</button>
    <div class="wikipedia-container">
          <h3 id="wikipedia-header">link wikipedia</h3>
          <h3 id="wikipedia-links">ms53877732@gmail.com</h3>
      </div>
</div>
<br>
</center>
<script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
  </body>
</html>
