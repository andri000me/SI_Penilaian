<img src="load.gif" />
<?php
include('db/koneksi.php');
$pass1=$_POST['pass']; 
$user1=$_POST['user'];
//fungsi $_GET dan $_POST untuk mendapatkan data tertentu yang cara pengambilannnya menggunakan perintah url. $pass1 meminta isi dari variabel user pada field login.

$login=sprintf("SELECT * FROM tb_pengguna WHERE Nama_Pengguna='$user1' AND Password='$pass1'", mysql_real_escape_string($user1), mysql_real_escape_string($pass1));
//mysql_real_escape_string() adalah fungsi PHP yang digunakan untuk memberi backslash di beberapa kode untuk ditampilkan pada halaman, namun saat menyimpan menuju sql, kode akan tetap normal tanpa ada backslash.


$cek_lagi=mysql_query($login);
$ketemu=mysql_num_rows($cek_lagi);
$r=mysql_fetch_array($cek_lagi);
//mysql_fetch_array untuk mengeluarkan data-data dari tabel dalam database yang dihasilkan dari perintah mysql_query

if ($ketemu > 0){
  session_start();
// Session_start — Membuat sebuah session atau melanjutkan session sebelumnya berdasarkan pada pengidentifikasi session via GET atau POST atau cookie

  $_SESSION['Nama_Pengguna'] = $r['Nama_Pengguna'];
  $_SESSION['Kode_Pengguna'] = $r['Kode_Pengguna'];
   $_SESSION['level'] = "Admin";
 echo "<meta http-equiv='refresh' content='0; url=menu.php?page=menu'>";
}  
 else{
$guru=mysql_query("select * from tb_guru where guru_kode='$user1' and guru_kode='$pass1'") or die(mysql_error());
$cek1=mysql_fetch_array($guru);
$cari=mysql_num_rows($guru);
  
  if ($cari > 0){
  session_start();
  $_SESSION['Nama_Pengguna'] = $cek1['guru_nama'];
  $_SESSION['Kode_Pengguna'] = $cek1['guru_kode'];
  $_SESSION['level'] = "Guru";
echo "<meta http-equiv='refresh' content='0; url=menu.php?page=menu'>";
}else{
?>
<script>alert("Uppzzz... username atau password salah...!!!");</script>
<?php
  echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}}
?>
