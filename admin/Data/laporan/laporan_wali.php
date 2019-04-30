<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<?php $kelas=$_GET['kelas']; $h=mysql_query("select * from tb_kelas where kode_kelas='$kelas'"); $fg=mysql_fetch_array($h);?>
<div class="table-header">
  <div class="nav-collapse"> <strong>Data Wali <?php  echo $fg['nama_kelas']?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <a target="_blank" href="Data/laporan/laporan_walicetak.php?kelas=<?php echo $kelas ?>">
    <button type="submit" class="btn btn-inverse" name="btncari"><i class="icon-print"></i>Cetak</button>
  </a> &nbsp;&nbsp;&nbsp;
  <!-----------------word------------->
  <a target="_blank" href="Data/laporan/laporan_waliword.php?kelas=<?php echo $kelas ?>">
    <button type="submit" class="btn btn-info" name="btncari"><i class="icon-save"></i>Word</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------excel------------->
  <a target="_blank" href="Data/laporan/laporan_waliexcel.php?kelas=<?php echo $kelas ?>">
    <button type="submit" class="btn btn-success" name="btncari"><i class="icon-save"></i>Excel</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------pdf------------->
  <a target="_blank" href="Data/laporan/laporan_walipdf.php?kelas=<?php echo $kelas ?>">
    <button type="submit" class="btn btn-danger" name="btncari"><i class="icon-save"></i>Pdf</button>
  </a>
  
  
  </div>
</div>
<table width="988" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Wali Murid</p>
        <p>Kelas <?php  echo $fg['nama_kelas']?> </p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="1100" border="0" class="table table-bordered table-hover">
          <tr>
            <td width="33" bgcolor="#99CCFF"><strong>No</strong></td>
            <td width="150" bgcolor="#99CCFF"><strong>Nama Ayah </strong></td>
            <td width="158" bgcolor="#99CCFF"><strong>Nama Ibu </strong></td>
            <td width="114" bgcolor="#99CCFF"><strong>Pekerjaan Ayah </strong></td>
            <td width="114" bgcolor="#99CCFF"><strong>Pekerjaan Ibu </strong></td>
            <td width="183" bgcolor="#99CCFF"><strong>Alamat</strong></td>
            <td width="104" bgcolor="#99CCFF"><strong>Telpon</strong></td>
          </tr>
		  
<?php $sql=mysql_query("select tb_siswa.*, tb_walimurid.*, tb_kelas.* from tb_walimurid, tb_siswa, tb_kelas where tb_walimurid.wali_id=tb_siswa.wali_id and tb_siswa.kode_kelas=tb_kelas.kode_kelas and tb_kelas.kode_kelas='$kelas'")or die (mysql_error()); while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['wali_id'] ?></td>
            <td><?php echo $tam['wali_namaayah'] ?></td>
            <td><?php echo $tam['wali_namaibu'] ?></td>
            <td><?php echo $tam['wali_pekerjaanayah'] ?></td>
            <td><?php echo $tam['wali_pekerjaanibu'] ?></td>
            <td><?php echo $tam['wali_alamat'] ?></td>
            <td><?php echo $tam['wali_telpon'] ?></td>
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
