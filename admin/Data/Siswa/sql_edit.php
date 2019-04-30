<?php
include ('koneksi.php');
$ini = $_GET['ini'];
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];


$sql=mysql_query("UPDATE tb_siswa set id_siswa='$id', nama_siswa='$nama', alamat='$alamat' WHERE id_siswa='$ini'");
echo '<script type="text/javascript"> window.location="index.php"; </script>';
?>
