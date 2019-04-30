 <?php
$nama= $_POST['cari']; //get the nama value from form 
$q = "SELECT * from tb_pengguna where Nama_Pengguna like '%$nama%'"; //query to get the search result

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
	<div class="navbar navbar-inverse">
	 <div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=penggunaview'>Pengguna</a>
		  <div class="nav-collapse">
			
			  <a href='?page=penggunaadd' class="small-box"><button class="btn btn-primary">+ Tambah Pengguna</button></a>
			
			
		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" action="?page=penggunacari">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
		  <button type="submit" class="btn btn-primary" name="btncari">Cari Data</button>
		</form>		
		</div></div>
</div>
</div>
<section>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
         <td> <b> Kode Pengguna </b> </td>
        <td class='hidden-480'> <b> Nama Pengguna </b> </td>
		<td class='hidden-480'> <b> Umur Pengguna </b> </td>
		<td class='hidden-480'> <b> Alamat </b> </td>
        <td class='hidden-480'> <b> No Hp </b> </td>
		
     </tr>
	 </thead>
<?php
$i = 0;
while ($data = mysql_fetch_array($result)) { //mysql_fetch_array = get the query data into array
  ?> 
 
  <?php echo "<tbody><tr>
  
            <td>".$data['Kode_Pengguna']."</td>
			<td class='hidden-480'>".$data['Nama_Pengguna']."</td>
			<td class='hidden-480'>".$data['Umur_Pengguna']."</td>
			<td class='hidden-480'>".$data['Alamat_Pengguna']."</td>
			<td class='hidden-480'>".$data['No_Hp']."</td> "; 
?>
     <td>
	        <div class="btn-group">
	         
	            <a href="?page=penggunaedit&Kode=<?php echo $data['Kode_Pengguna']; ?>"> <button class='btn btn-mini btn-primary'> Edit Data</button></a>
	            <a href="?page=penggunadelete&Kode=<?php echo $data['Kode_Pengguna']; ?>" onClick="return confirm('Anda yakin..???');"> <button class='btn btn-mini btn-danger'> Hapus Data</button></a>
	        </div><!-- /btn-group -->
		</td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";





// Jika nama yang di cari, tidak ada atau tidak cocok.
}else{
	echo "Pengguna dengan nama '$nama' tidak ada";
}

?>
			          
 