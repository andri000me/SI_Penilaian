<?php
include 'db/koneksi.php';
$query = "SELECT * FROM tb_kelas"; 
$result = mysql_query($query);
?>

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=kelassiswa'>Data Kelas</a>
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
     <td><?php $sql0=mysql_query("select tb_siswa.* from tb_siswa where tb_siswa.kode_kelas='$kode2'"); $cek=mysql_num_rows($sql0); if($cek>0){ ?>
	        <div class="btn-group">
	            <a href="?page=laporwali&kelas=<?php echo $data['kode_kelas']; ?>"><button class='btn btn-mini btn-primary'> Wali </button></a>&nbsp;&nbsp;
				
	        </div><?php }else{ ?>
			<div class="btn-group">
	            <button class='btn btn-mini btn-danger'> Belum Ada</button>
	        </div><?php } ?><!-- /btn-group -->
		</td> 
		<td><?php if($cek>0){ ?><div class="btn-group">
	            <a href="?page=laporsiswa&kelas=<?php echo $data['kode_kelas']; ?>"><button class='btn btn-mini btn-success'> Siswa </button></a>&nbsp;&nbsp;
				
	        </div><?php }else{ ?>
			<div class="btn-group">
	            <button class='btn btn-mini btn-danger'> Belum Ada</button>
	        </div><?php } ?><!-- /btn-group --></td></tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>
