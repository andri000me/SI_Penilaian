<?php
include ('koneksi.php');
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$kelas=$_GET['kelas'];


$sql=mysql_query("INSERT INTO tb_siswa (id_siswa,nama_siswa,alamat) VALUES ('$id','$nama','$alamat')");
echo "<script type='text/javascript'> window.location='menu.php?page=siswaview&kelas=".$kelas."'; </script>";
?>