<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<div class="table-header">
  <div class="nav-collapse"> <strong>Data Guru  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <a target="_blank" href="Data/laporanall/laporan_bidangcetak.php">
    <button type="submit" class="btn btn-inverse" name="btncari"><i class="icon-print"></i>Cetak</button>
  </a> &nbsp;&nbsp;&nbsp;
  <!-----------------word------------->
  <a target="_blank" href="Data/laporanall/laporan_bidangword.php">
    <button type="submit" class="btn btn-info" name="btncari"><i class="icon-save"></i>Word</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------excel------------->
  <a target="_blank" href="Data/laporanall/laporan_bidangcetakexcel.php">
    <button type="submit" class="btn btn-success" name="btncari"><i class="icon-save"></i>Excel</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------pdf------------->
  <a target="_blank" href="Data/laporanall/laporan_bidangcetakpdf.php">
    <button type="submit" class="btn btn-danger" name="btncari"><i class="icon-save"></i>Pdf</button>
  </a>
  
  
  </div>
</div>
<table width="506" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Bidang </p>
        <p></p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="500" border="0" class="table table-bordered table-hover">
          <tr>
            <td width="36" bgcolor="#99CCFF"><strong>Kode</strong></td>
            <td width="454"  bgcolor="#99CCFF"><strong>Bidang</strong></td>
          </tr>
		  
<?php $sql=mysql_query("select tb_bidangstudi.*from tb_bidangstudi")or die (mysql_error()); while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['bidang_kode'] ?></td>
            <td><a href="?page=laporan_kelas&bidang=<?php echo $tam['bidang_kode'] ?>"><?php echo $tam['bidang_nama'] ?></a></td>
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
