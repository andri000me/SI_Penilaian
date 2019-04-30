<?php
$kelas=$_GET['kelas'];

include 'db/koneksi.php';
$query = "SELECT tb_siswa.*, tb_kelas.* FROM tb_kelas, tb_siswa where tb_kelas.kode_kelas=tb_siswa.kode_kelas and tb_siswa.kode_kelas='$kelas' "; 
$result = mysql_query($query);
?> 

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=laporkelasnilai'>Data Siswa</a>
		  <div class="nav-collapse">



			</div>
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
		<td class='hidden-480'> <b>Kode Kelas </b> </td>
		 
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
			<td class='hidden-480'>".$data['kode_kelas']."</td>
		"; 
?>
     <td>
	        <div class="btn-group">
	          
	            <a href="?page=siswadet1&kelas=<?php echo $data['kode_kelas']; ?>&nisn=<?php echo $data['siswa_nisn']; ?>"><button class='btn btn-mini btn-primary'> Raport</button></a>
	            
	        </div><!-- /btn-group -->
		</td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>
