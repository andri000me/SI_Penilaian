<?php
include 'db/koneksi.php';
$query = "SELECT * FROM tb_pengguna"; 
$result = mysql_query($query);
?>

<div class="well">
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
while ($data = mysql_fetch_array($result)) { 
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
	          
	            <a href="?page=penggunaedit&Kode=<?php echo $data['Kode_Pengguna']; ?>"><button class='btn btn-mini btn-primary'> Edit Data</button></a>
	            <a href="?page=penggunadelete&Kode=<?php echo $data['Kode_Pengguna']; ?>" onClick="return confirm('Anda yakin..???');"><button class='btn btn-mini btn-danger'> Hapus Data</button></a>
	          
	        </div><!-- /btn-group -->
		</td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>
