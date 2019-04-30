<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<?php if(isset($_GET['cari'])){ $cari=$_GET['cari']; }?>
<div class="table-header">
  <div class="nav-collapse"> <strong>Data Guru  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> 
 <?php if(isset($cari)){ ?>
 
 <a target="_blank" href="Data/laporanguru/laporan_gurucetak.php?cari=<?php echo $cari?>">
    <button type="submit" class="btn btn-inverse" name="btncari"><i class="icon-print"></i>Cetak</button>
  </a> &nbsp;&nbsp;&nbsp;
  <!-----------------word------------->
  <a target="_blank" href="Data/laporanguru/laporan_guruword.php?cari=<?php echo $cari?>">
    <button type="submit" class="btn btn-info" name="btncari"><i class="icon-save"></i>Word</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------excel------------->
  <a target="_blank" href="Data/laporanguru/laporan_guruexcel.php?cari=<?php echo $cari?>">
    <button type="submit" class="btn btn-success" name="btncari"><i class="icon-save"></i>Excel</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------pdf------------->
  <a target="_blank" href="Data/laporanguru/laporan_gurupdf.php?cari=<?php echo $cari?>">
    <button type="submit" class="btn btn-danger" name="btncari"><i class="icon-save"></i>Pdf</button>
  </a>
 
 
 <?php }else{ ?>
  <a target="_blank" href="Data/laporanguru/laporan_gurucetak.php">
    <button type="submit" class="btn btn-inverse" name="btncari"><i class="icon-print"></i>Cetak</button>
  </a> &nbsp;&nbsp;&nbsp;
  <!-----------------word------------->
  <a target="_blank" href="Data/laporanguru/laporan_guruword.php">
    <button type="submit" class="btn btn-info" name="btncari"><i class="icon-save"></i>Word</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------excel------------->
  <a target="_blank" href="Data/laporanguru/laporan_guruexcel.php">
    <button type="submit" class="btn btn-success" name="btncari"><i class="icon-save"></i>Excel</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------pdf------------->
  <a target="_blank" href="Data/laporanguru/laporan_gurupdf.php">
    <button type="submit" class="btn btn-danger" name="btncari"><i class="icon-save"></i>Pdf</button>
  </a>
  <?php } ?>
  <form method="get" enctype="multipart/form-data" class="navbar-form pull-right" style="margin-right:20px;">
  <input type="text" name="cari" placeholder="Pencarian..." /><input type="hidden" name="page" value="laporguru" /></form>
  </div>
  
</div>
<table width="988" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Guru </p>
        <p></p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="1100" border="0" class="table table-bordered table-hover">
          <tr>
            <td width="33" bgcolor="#99CCFF"><strong>Kode</strong></td>
            <td  bgcolor="#99CCFF"><strong>NIP </strong></td>
            <td  bgcolor="#99CCFF"><strong>Nama </strong></td>
            <td  bgcolor="#99CCFF"><strong>Kompetensi </strong></td>
            <td  bgcolor="#99CCFF"><strong>Alamat </strong></td>
            <td  bgcolor="#99CCFF"><strong>Telepon</strong></td>
			<td  bgcolor="#99CCFF"><strong>Cetak</strong></td>
       
          </tr>
		  <?php if(isset($cari)){
		  $sql=mysql_query("select * from tb_guru where  guru_kode like '%$cari%' or guru_nip like '%$cari%' or guru_nama like '%$cari%' or kompetensi_kode like '%$cari%' or guru_alamat like '%$cari%' or guru_telpon like '%$cari%'  ")or die (mysql_error());
		  }else{
 $sql=mysql_query("select tb_guru.*, tb_kompetensikeahlian.* from tb_guru, tb_kompetensikeahlian where tb_guru.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode")or die (mysql_error()); } ?>
 <?php while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['guru_kode'] ?></td>
            <td><?php echo $tam['guru_nip'] ?></td>
            <td><?php echo $tam['guru_nama'] ?></td>
            <td><?php echo $tam['kompetensi_kode'] ?></td>
            <td><?php echo $tam['guru_alamat'] ?></td>
            <td><?php echo $tam['guru_telpon'] ?></td>
			<td><a target="_blank" href="Data/laporanguru/laporan_gurucetak1.php?ks=<?php echo $tam['guru_kode'] ?>"><button class="btn btn-danger">Cetak</button></a></td>
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
