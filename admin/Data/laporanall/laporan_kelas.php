<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<div class="table-header">
  <div class="nav-collapse"> <strong>Data Guru  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <a target="_blank" href="Data/laporanall/laporan_kelascetak.php?bidang=<?php echo $_GET['bidang'] ?>">
    <button type="submit" class="btn btn-inverse" name="btncari"><i class="icon-print"></i>Cetak</button>
  </a> &nbsp;&nbsp;&nbsp;
  <!-----------------word------------->
  <a target="_blank" href="Data/laporanall/laporan_kelasword.php?bidang=<?php echo $_GET['bidang'] ?>">
    <button type="submit" class="btn btn-info" name="btncari"><i class="icon-save"></i>Word</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------excel------------->
  <a target="_blank" href="Data/laporanall/laporan_kelascetakexcel.php?bidang=<?php echo $_GET['bidang'] ?>">
    <button type="submit" class="btn btn-success" name="btncari"><i class="icon-save"></i>Excel</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------pdf------------->
  <a target="_blank" href="Data/laporanall/laporan_kelascetakpdf.php?bidang=<?php echo $_GET['bidang'] ?>">
    <button type="submit" class="btn btn-danger" name="btncari"><i class="icon-save"></i>Pdf</button>
  </a>
  
  
  </div>
</div>
<table width="596" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Kelas </p>
        <p></p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="598" border="0" class="table table-bordered table-hover">
          <tr>
            <td width="234" bgcolor="#99CCFF"><strong>Kompetensi</strong></td>
			<td width="256"  bgcolor="#99CCFF"><strong>Kelas</strong></td>
			
          </tr>
		  
<?php $sql=mysql_query("select tb_kelas.*, tb_kompetensikeahlian.* from  tb_kompetensikeahlian, tb_kelas where tb_kelas.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and  bidang_kode='".$_GET['bidang']."'")or die (mysql_error()); while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['kompetensi_nama'] ?></td>
			<td><?php echo $tam['nama_kelas'] ?></td>
			
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
