 <?php
 $kelas=$_GET['kelas'];
$nama= $_POST['cari']; //get the nama value from form 
$q = "SELECT * from tb_siswa where kode_kelas='kelas' and siswa_nama like '%$nama%'"; //query to get the search result

// mysql_query : fungsi yang digunakan untuk mengirim query ke database MySQL
// mysql_error() digunakan untuk menghasilkan pesan error dari operasi mysql.
$result = mysql_query($q); //execute the query $q

// mysql_num_rows : untuk mendapatkan jumlah baris dari query yang dihasilkan oleh fungsi mysql_query() namun hanya berlaku 
//                  pada perintah  SELECT dan SHOW
$jumlah=mysql_num_rows($result);
// $jumlah > 0 : Jika di dalam table terisi data.
if ($jumlah>0){

?>
<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=siswaview&kelas=<?php echo $kelas ?>'>Data Siswa</a>
		  <div class="nav-collapse">

<a href='?page=siswaadd' class="small-box"><button class="btn btn-primary">+ Tambah Siswa</button></a>



		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" action="?page=siswacari&kelas=<?php echo $kelas ?>">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
		  <button type="submit" class="btn btn-primary" name="btncari">Cari Data</button>
		</form>		</div>
		</div>
</div>
</div>
<section>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
         <td> <b>NIS</b> </td>
        <td class='hidden-480'> <b>Nama  </b> </td>
		  <td class='hidden-480'> <b>Alamat</b> </td>
		   <td class='hidden-480'> <b> Tanggal Lahir </b> </td>	
		   <td class='hidden-480'> <b> Foto </b> </td>	
     </tr>
	 </thead>
<?php
$i = 0;
while ($data = mysql_fetch_array($result)) { 
  ?> 
 
  <?php echo "<tbody><tr>
  
            <td>".$data['siswa_nisn']."</td>
			<td class='hidden-480'>".$data['siswa_nama']."</td>
		<td class='hidden-480'>".$data['siswa_alamat']."</td>
			<td class='hidden-480'>".$data['siswa_tgllahir']."</td> 
			<td class='hidden-480'>".$data['siswa_foto']."</td>"; 
?>
     <td>
	        <div class="btn-group">
	          
	            <a href="?page=siswaedit&Kode=<?php echo $data['siswa_nisn']; ?>"><button class='btn btn-mini btn-primary'> Edit Data</button></a>
	            <a href="?page=siswadelete&Kode=<?php echo $data['siswa_nisn']; ?>" onClick="return confirm('Anda yakin..???');"><button class='btn btn-mini btn-danger'> Hapus Data</button></a>
	        </div><!-- /btn-group -->
		</td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";


// Jika nama yang di cari, tidak ada atau tidak cocok.
}else{
	echo "SIswa dengan nama '$nama' tidak ada";
}

?>
			          
 