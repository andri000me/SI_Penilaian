<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<?php
$kelas=$_GET['kelas'];
$kompetensi=$_GET['kompetensi'];
include 'db/koneksi.php';
$query = "SELECT * FROM tb_standarkompetensi where kelas='$kelas' and kompetensi_kode='$kompetensi'"; 
$result = mysql_query($query);
?>
<div class="table-header">
  <div class="nav-collapse"> <strong>Data Guru  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <a target="_blank" href="Data/laporan_pelajaran/laporan_pelajarancetak.php?kompetensi=<?php echo $kompetensi ?>&kelas=<?php echo $kelas ?>">
    <button type="submit" class="btn btn-inverse" name="btncari"><i class="icon-print"></i>Cetak</button>
  </a> &nbsp;&nbsp;&nbsp;
  <!-----------------word------------->
  <a target="_blank" href="Data/laporan_pelajaran/laporan_pelajaranword.php?kompetensi=<?php echo $kompetensi ?>&kelas=<?php echo $kelas ?>">
    <button type="submit" class="btn btn-info" name="btncari"><i class="icon-save"></i>Word</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------excel------------->
  <a target="_blank" href="Data/laporan_pelajaran/laporan_pelajaranexcel.php?kompetensi=<?php echo $kompetensi ?>&kelas=<?php echo $kelas ?>">
    <button type="submit" class="btn btn-success" name="btncari"><i class="icon-save"></i>Excel</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------pdf------------->
  <a target="_blank" href="Data/laporan_pelajaran/laporan_pelajaranpdf.php?kompetensi=<?php echo $kompetensi ?>&kelas=<?php echo $kelas ?>">
    <button type="submit" class="btn btn-danger" name="btncari"><i class="icon-save"></i>Pdf</button>
  </a>
  
  
  </div>
</div>
<table width="506" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Pelajaran </p>
        <p>Kelas <?php echo $_GET['kelas'] ?></p>
       
      </div>
    </div>
        <table class="table  table-bordered table-hover">
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
      </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>

    </td>
  </tr>

</table>
