<?php
error_reporting(0);
if(isset($_POST['save'])){
$berita=$_POST['berita'];
$slider=$_POST['slider'];
$pengguna=$_POST['pengguna'];
$bidang=$_POST['bidang'];
$kelas=$_POST['kelas'];
$guru=$_POST['guru'];
$sk=$_POST['sk'];
$wali=$_POST['wali'];
$siswa=$_POST['siswa'];
$penilaian=$_POST['penilaian'];
$lap_bidang=$_POST['lp_bidang'];
$lap_kompetensi=$_POST['lp_kompetensi'];
$lap_kelas=$_POST['lp_kelas'];
$lap_guru=$_POST['lp_guru'];
$lap_pelajaran=$_POST['lp_pelajaran'];
$lap_wali=$_POST['lp_wali'];
$lap_siswa=$_POST['lp_siswa'];
$lap_nilai=$_POST['lp_nilai'];


$sql="Update akses set berita='$berita' 
, slider='$slider' 
, pengguna='$pengguna' 
, bidang='$bidang' 
, kelas='$kelas' 
, guru='$guru' 
, sk='$sk' 
, wali='$wali' 
, siswa='$siswa' 
, penilaian_siswa='$penilaian' 
, lap_bidang='$lap_bidang' 
, lap_kompetensi='$lap_kompetensi' 
, lap_kelas='$lap_kelas' 
, lap_guru='$guru' 
, lap_pelajaran='$lap_pelajaran' 
, lap_wali='$lap_wali' 
, lap_siswa='$lap_siswa' 
, lap_nilai='$lap_nilai' where level='Guru'";
$masuk=mysql_query($sql) or die (mysql_error());;
if($masuk){

echo "<script>alert('Hak akses sukses dirubah');</script>";
echo "<meta http-equiv='refresh' content='0; url=menu.php'>";
}

}

?>

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

  <div class="table-header">
		  <a class="brand" href='?page=guruview'>Hak Akses Guru</a>
		  <div class="nav-collapse">

  </div>
</div>
</div>
<section>
<form method="post" enctype="multipart/form-data">
<label><input name="berita" type="checkbox" value="1" /><span class="lbl"> Berita</span></label>
<label><input name="slider" type="checkbox" value="1"/><span class="lbl"> Slider</span></label>
<label><input name="pengguna" type="checkbox" value="1"/><span class="lbl"> Pengguna</span></label>
<label><input name="bidang" type="checkbox" value="1"/><span class="lbl"> Bidang</span></label>
<label><input name="kelas" type="checkbox" value="1"/><span class="lbl"> Kelas</span></label>
<label><input name="guru" type="checkbox" value="1"/><span class="lbl"> Guru</span></label>
<label><input name="sk" type="checkbox" value="1"/><span class="lbl"> Standar Kompetensi</span></label>
<label><input name="wali" type="checkbox" value="1"/><span class="lbl"> Wali</span></label>
<label><input name="siswa" type="checkbox" value="1"/><span class="lbl"> Siswa</span></label>
<label><input name="penilaian" type="checkbox" value="1"/><span class="lbl"> Penilaian</span></label>
<label><input name="lp_bidang" type="checkbox" value="1"/><span class="lbl"> Laporan Bidang</span></label>
<label><input name="lp_kompetensi" type="checkbox" value="1"/><span class="lbl"> Laporan Kompetensi</span></label>
<label><input name="lp_kelas" type="checkbox" value="1"/><span class="lbl"> Laporan Kelas</span></label>
<label><input name="lp_guru" type="checkbox" value="1"/><span class="lbl"> Laporan Guru</span></label>
<label><input name="lp_pelajaran" type="checkbox" value="1"/><span class="lbl"> Laporan Pelajaran</span></label>
<label><input name="lp_wali" type="checkbox" value="1"/><span class="lbl"> Laporan Wali</span></label>
<label><input name="lp_siswa" type="checkbox" value="1"/><span class="lbl"> Laporan Siswa</span></label>
<label><input name="lp_nilai" type="checkbox" value="1"/><span class="lbl"> Laporan Nilai</span></label>
<input type="submit" name="save" class="btn btn-primary" value="Simpan" />
</form>