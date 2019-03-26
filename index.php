 <?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE HTML>  
<html>
<head>
 <title>CRUD</title>
</head>
<body style="background: url('messi.jpg');">
  <div id="kanan">
  <br><br> 
   <form id="form-container" class="form-container">

      <center>  
      <h2>DAFTAR PEMAIN TERBAIK DUNIA</h2>
      <input type="text" id="input" placeholder="search wikipedia">
      <button id="cari-btn" class="">cari</button>
    <div class="wikipedia-container">
          <h3 id="wikipedia-header">link wikipedia</h3>
          <h3 id="wikipedia-links">ms53877732@gmail.com</h3>
      </div>
</div>
<center> 
  <br>
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
    <td><?= $x["prestasi"] ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
      <a href="register.php">ubah</a> | <a href="formregister.php">hapus</a>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</center>
<script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
  </body>
</html>
