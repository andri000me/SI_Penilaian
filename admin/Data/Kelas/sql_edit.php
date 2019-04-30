<?php
include ('koneksi.php');
$ini = $_GET['ini'];
$kode = $_POST['kode_kelas'];
$kkompetensi = $_POST['kompetensi_kode'];
$nama = $_POST['nama_kelas'];


$sql= mysql_query("UPDATE tb_kelas set kode_kelas='$kode', kompetensi_kode='$kkompetensi', nama_kelas='$nama', WHERE kode_kelas='$ini'");
echo '<script type="text/javascript"> window.location = "menu.php?page=kelasview"; </script>';
?>