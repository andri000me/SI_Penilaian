<?php
include('admin/db/koneksi.php');



$user1 = $_POST['user'];
$pass1     =$_POST['pass'];




$login=mysql_query("SELECT * FROM tb_siswa WHERE siswa_nisn='$user1' AND password='$pass1'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);
if ($ketemu > 0){
  session_start();
  $_SESSION['nisn'] = $r['siswa_nisn'];
  $_SESSION['nama'] = $r['siswa_nama'];

 $_SESSION['level'] = "Siswa";
  ?>
  <?php
echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
else{
?>
<?php
	$guru=mysql_query("select * from tb_guru where guru_nip='$user1' and password='$pass1'") or die(mysql_error());
$cek1=mysql_fetch_array($guru);
$cari=mysql_num_rows($guru);
if ($cari > 0){
  session_start();
  $_SESSION['Nama_Pengguna'] = $cek1['guru_nama'];
  $_SESSION['Kode_Pengguna'] = $cek1['guru_kode'];
  $_SESSION['level'] = "Guru";
echo "<meta http-equiv='refresh' content='0; url=admin/menu.php?page=menu'>";
}else{
?>
<script>alert("Uppzzz... username atau password salah...!!!");</script>
<?php
  echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
}
?>