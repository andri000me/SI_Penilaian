<?php
if($_SESSION['level']<>"Admin"){ $kd=$_SESSION['Kode_Pengguna'];

include 'db/koneksi.php';
$query = "SELECT *  FROM tb_kelas,  tb_standarkompetensi where tb_kelas.kompetensi_kode=tb_standarkompetensi.kompetensi_kode and  tb_kelas.kompetensi_kode=tb_standarkompetensi.kompetensi_kode and guru_kode='".$kd."' group by nama_kelas"; 
$result = mysql_query($query);

 }else{
 
 include 'db/koneksi.php';
$query = "SELECT * FROM tb_kelas"; 
$result = mysql_query($query);

 
 
 }
?>

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=nilaikelas'>Standar Kompetensi</a>
		  <div class="nav-collapse">




	</div>
		</div>
</div>
</div>
<section>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
         <td> <b>Kode</b> </td>
        <td class='hidden-480'> <b>Kode Kompetensi  </b> </td>
		  <td class='hidden-480'> <b>Kelas</b> </td>
		
     </tr>
	 </thead>
<?php
$i = 0;
while ($data = mysql_fetch_array($result)) { 
  ?> 
 
  <?php echo "<tbody><tr>
  
            <td>".$data['kode_kelas']."</td>
			<td class='hidden-480'>".$data['kompetensi_kode']."</td>
		<td class='hidden-480'>".$data['nama_kelas']."</td>"; 
$kode2=$data['kode_kelas'];?>
     <td>
	        <div class="btn-group">
	            <a href="?page=nilaiview&kelas=<?php echo $data['kode_kelas']; ?>&kompetensi=<?php echo $data['kompetensi_kode']; ?>"><button class='btn btn-mini btn-primary'> Lihat</button></a>
	        </div><!-- /btn-group -->
		</td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>
