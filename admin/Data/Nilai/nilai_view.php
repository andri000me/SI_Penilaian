<?php
$kelas=$_GET['kelas'];
$kompetensi=$_GET['kompetensi'];
error_reporting(0);
include 'db/koneksi.php';
if(isset($_POST['cari'])){
$query = "SELECT tb_siswa.*, tb_kelas.*  FROM tb_kelas, tb_siswa where tb_kelas.kode_kelas=tb_siswa.kode_kelas and tb_siswa.kode_kelas='$kelas' and tb_siswa.kompetensi_kode='$kompetensi' and siswa_nisn REGEXP '".$_POST['cari']."' or siswa_nama REGEXP '".$_POST['cari']."' "; 
$result = mysql_query($query);
}else{
$query = "SELECT tb_siswa.*, tb_kelas.* FROM tb_kelas, tb_siswa where tb_kelas.kode_kelas=tb_siswa.kode_kelas and tb_siswa.kode_kelas='$kelas' and tb_siswa.kompetensi_kode='$kompetensi'"; 
$result = mysql_query($query);
}
?> 

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=?page=nilaikelas'>Data Siswa</a>
		  <div class="nav-collapse">



	<!-----	<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" enctype="multipart/form-data">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
		  <button type="submit" class="btn btn-primary" name="btncari">Cari Data</button>
		</form>	--->	</div>
		</div>
</div>
</div>
<section>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
         <td> <b>NISN</b> </td>
        <td class='hidden-480'> <b>Nama  </b> </td>
		<td class='hidden-480'> <b>Kode Kompetensi</b> </td>
		<td class='hidden-480'> <b> Kelas </b> </td>
		 
     </tr>
	 </thead>
<?php
$i = 0;
while ($data = mysql_fetch_array($result)) { 
  ?> 
 
  <?php echo "<tbody><tr>
  
            <td>".$data['siswa_nisn']."</td>
			<td class='hidden-480'>".$data['siswa_nama']."</td>
			<td class='hidden-480'>".$data['kompetensi_kode']."</td>
			<td class='hidden-480'>".$data['nama_kelas']."</td>
		"; 
?>
     <td>
	        <div class="btn-group">
	          
	            <a href="?page=nilaidetail&Kode=<?php echo $data['siswa_nisn']; ?>&kelas=<?php echo $data['kelas']; ?>&kompetensi=<?php echo $data['kompetensi_kode']; ?>"><button class='btn btn-mini btn-primary'> Penilaian</button></a>
	            
	        </div><!-- /btn-group -->
		</td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>
