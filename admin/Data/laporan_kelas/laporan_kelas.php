<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<?php if(isset($_GET['cari'])){ $cari=$_GET['cari']; }?>

<div class="table-header">
  <div class="nav-collapse"> <strong>Data Kelas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> 
  <?php if (isset($cari)){ ?>
  
  
   <a target="_blank" href="Data/laporan_kelas/laporan_kelascetak.php?cari=<?php echo $cari?>">
    <button type="submit" class="btn btn-inverse" name="btncari"><i class="icon-print"></i>Cetak</button>
  </a> &nbsp;&nbsp;&nbsp;
  <!-----------------word------------->
  <a target="_blank" href="Data/laporan_kelas/laporan_kelasword.php?cari=<?php echo $cari?>">
    <button type="submit" class="btn btn-info" name="btncari"><i class="icon-save"></i>Word</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------excel------------->
  <a target="_blank" href="Data/laporan_kelas/laporan_kelasexcel.php?cari=<?php echo $cari?>">
    <button type="submit" class="btn btn-success" name="btncari"><i class="icon-save"></i>Excel</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------pdf------------->
  <a target="_blank" href="Data/laporan_kelas/laporan_kelaspdf.php?cari=<?php echo $cari?>">
    <button type="submit" class="btn btn-danger" name="btncari"><i class="icon-save"></i>Pdf</button>
  </a>
  
  
  
  <?php }else{ ?>
  
  <a target="_blank" href="Data/laporan_kelas/laporan_kelascetak.php">
    <button type="submit" class="btn btn-inverse" name="btncari"><i class="icon-print"></i>Cetak</button>
  </a> &nbsp;&nbsp;&nbsp;
  <!-----------------word------------->
  <a target="_blank" href="Data/laporan_kelas/laporan_kelasword.php">
    <button type="submit" class="btn btn-info" name="btncari"><i class="icon-save"></i>Word</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------excel------------->
  <a target="_blank" href="Data/laporan_kelas/laporan_kelasexcel.php">
    <button type="submit" class="btn btn-success" name="btncari"><i class="icon-save"></i>Excel</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------pdf------------->
  <a target="_blank" href="Data/laporan_kelas/laporan_kelaspdf.php">
    <button type="submit" class="btn btn-danger" name="btncari"><i class="icon-save"></i>Pdf</button>
  </a>
  <?php } ?>
  <form method="get" enctype="multipart/form-data" class="navbar-form pull-right" style="margin-right:20px;">
  <input type="text" name="cari" placeholder="Pencarian..." /><input type="hidden" name="page" value="lapor_kelas" /></form>
  </div>
</div>
<table width="649" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Kelas </p>
        <p></p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="647" border="0" class="table table-bordered table-hover">
          <tr>
            <td width="129" bgcolor="#99CCFF"><strong>Kode</strong></td>
			<td width="165"  bgcolor="#99CCFF"><strong>Kompetensi </strong></td>
			<td width="141"  bgcolor="#99CCFF"><strong>Kelas</strong></td>
			<td width="194"  bgcolor="#99CCFF"><strong>Nama Kelas</strong></td>
			
          </tr>
		  
<?php if(isset($cari)){

$sql=mysql_query("select  tb_kelas.*from  tb_kelas where   kode_kelas like '%$cari%' or kompetensi_kode like '%$cari%' or kelas like '%$cari%' or nama_kelas like '%$cari%'   ")or die (mysql_error());

}else{ $sql=mysql_query("select  tb_kelas.*, tb_kompetensikeahlian.* from  tb_kompetensikeahlian, tb_kelas where tb_kelas.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode")or die (mysql_error()); } ?> 

<?php  while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['kode_kelas'] ?></td>
			<td><?php echo $tam['kompetensi_kode'] ?></td>
			<td><?php echo $tam['kelas'] ?></td>
			<td><?php echo $tam['nama_kelas'] ?></td>
			
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
