<?php
$kelas=$_GET['kelas'];
$kompetensi=$_GET['kompetensi'];
error_reporting(0);
include 'db/koneksi.php';
if(isset($_POST['cari'])){
$query = "SELECT * FROM tb_standarkompetensi where kelas='$kelas' and kompetensi_kode='$kompetensi' and sk_nama REGEXP '".$_POST['cari']."'"; 
$result = mysql_query($query);
}else{
$query = "SELECT * FROM tb_standarkompetensi where kelas='$kelas' and kompetensi_kode='$kompetensi'"; 
$result = mysql_query($query);
}

?>

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=skompetensikelas'>Data Standar Kompetensi</a>
		  <div class="nav-collapse">

<a href='?page=skompetensiadd&kelas=<?php echo $kelas ?>&kompetensi=<?php echo $kompetensi ?>' class="small-box"><button class="btn btn-primary">+ Tambah Standar Kompetensi</button></a>



		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" enctype="multipart/form-data">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
		  <button type="submit" class="btn btn-primary" name="btncari">Cari Data</button>
		</form>		</div>
		</div>
</div>
</div>
<section>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
         <td> <b>Kode</b> </td>
        <td class='hidden-480'> <b>Kode Guru  </b> </td>
		  <td class='hidden-480'> <b>Kompetensi Kode</b> </td>
		   <td class='hidden-480'> <b> SK Nama</b> </td>	
		   <td class='hidden-480'> <b> Kelas </b> </td>	
     </tr>
	 </thead>
<?php
$i = 0;
while ($data = mysql_fetch_array($result)) { 
  ?> 
 
  <?php echo "<tbody><tr>
  
            <td>".$data['sk_kode']."</td>
			<td class='hidden-480'>".$data['guru_kode']."</td>
		<td class='hidden-480'>".$data['kompetensi_kode']."</td>
			<td class='hidden-480'>".$data['sk_nama']."</td> 
			<td class='hidden-480'>".$data['kelas']."</td>"; 
?>
     <td>
	        <div class="btn-group">
	          
	            <a href="?page=skompetensiedit&Kode=<?php echo $data['sk_kode']; ?>&kelas=<?php echo $kelas ?>&kompetensi=<?php echo $kompetensi ?>"><button class='btn btn-mini btn-primary'> Edit Data</button></a>
	            <a href="?page=skompetensidelete&Kode=<?php echo $data['sk_kode']; ?>&kelas=<?php echo $kelas ?>&kompetensi=<?php echo $kompetensi ?>" onClick="return confirm('Anda yakin..???');"><button class='btn btn-mini btn-danger'> Hapus Data</button></a>
	        </div><!-- /btn-group -->
		</td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>
