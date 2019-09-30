<?php
$mysqli = new mysqli('localhost', 'root', '', 'datamhs') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
  $npm = $_POST['npm'];
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $mysqli->query("INSERT INTO dataa (npm, nama, jk, alamat) VALUES('npm', 'nama', 'jk', 'alamat')") or die($mysqli->error);
}
 ?>
