<?php
include 'db/koneksi.php';
$query = "SELECT  DISTINCT kompetensi_kode,kelas FROM tb_kelas "; 
$result = mysql_query($query) or die (mysql_error());

?>

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=skompetensikelas'>Standar Kompetensi</a>
		  <div class="nav-collapse">




	</div>
		</div>
</div>
</div>
<section>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
       
        <td class='hidden-480'> <b>Kode Kompetensi  </b> </td>
		  
		
     </tr>
	 </thead>
<?php
$i = 0;
while ($data = mysql_fetch_array($result)) { 
$kompe=$data['kompetensi_kode'];
$sqdl=mysql_query("select * from tb_kompetensikeahlian where kompetensi_kode='$kompe'") or die (mysql_error());
$tam=mysql_fetch_array($sqdl);
?> 
 
  <?php echo "<tbody><tr>
  
      
			<td class='hidden-480'>".$data['kompetensi_kode']."</td>
			<td class='hidden-480'>".$data['kelas']."&nbsp;".$tam['kompetensi_nama']."</td>
		"; 
$kode2=$data['kompetensi_kode'];?>
     <td><?php $sql0=mysql_query("select tb_standarkompetensi.* from tb_standarkompetensi where tb_standarkompetensi.kompetensi_kode='$kode2'") or die (mysql_query()); $cek=mysql_num_rows($sql0); if($cek>0){ ?>
	        <div class="btn-group">
	            <a href="?page=pelajaran&kompetensi=<?php echo $data['kompetensi_kode']; ?>&kelas=<?php echo $data['kelas']; ?>"><button class='btn btn-mini btn-primary'> Lihat</button></a>
	        </div><?php }else{ ?>
			<div class="btn-group">
	            <a href="?page=pelajaran&kompetensi=<?php echo $data['kompetensi_kode']; ?>&kelas=<?php echo $data['kelas']; ?>"><button class='btn btn-mini btn-danger'> Lihat</button></a>
	        </div><?php } ?><!-- /btn-group -->
		</td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>
