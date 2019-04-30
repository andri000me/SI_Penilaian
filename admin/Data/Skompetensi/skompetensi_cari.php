 <?php
$nama= $_POST['cari']; //get the nama value from form 
$q = "SELECT * from tb_standarkompetensi where sk_nama like '%$nama%'"; //query to get the search result

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
		  <a class="brand" href='?page=skompetensiview'>Data Standar Kompetensi</a>
		  <div class="nav-collapse">

<a href='?page=skompetensiadd' class="small-box"><button class="btn btn-primary">+ Tambah Setandar Kompetensi</button></a>



		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" action="?page=skompetensicari">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
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
		   <td class='hidden-480'> <b> SK Kelas </b> </td>	
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
			<td class='hidden-480'>".$data['sk_kelas']."</td>"; 
?>
     <td>
	        <div class="btn-group">
	          
	            <a href="?page=skompetensiedit&Kode=<?php echo $data['sk_kode']; ?>"><button class='btn btn-mini btn-primary'> Edit Data</button></a>
	            <a href="?page=skompetensidelete&Kode=<?php echo $data['sk_kode']; ?>" onClick="return confirm('Anda yakin..???');"><button class='btn btn-mini btn-danger'> Hapus Data</button></a>
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
			          
 