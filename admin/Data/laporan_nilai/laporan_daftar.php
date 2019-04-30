<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
.style4 {font-size: 14px}
-->
</style>
<?php $kelas=$_GET['kelas'];$skkode=$_GET['skkode']; $h=mysql_query("select * from tb_kelas where kode_kelas='$kelas'"); $fg=mysql_fetch_array($h);
$h2=mysql_query("select * from tb_standarkompetensi where sk_kode='$skkode'"); $fg2=mysql_fetch_array($h2);

?>
<div class="table-header">
  <div class="nav-collapse"> <strong>Data Daftar <?php  echo $fg['nama_kelas']?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <a target="_blank" href="Data/laporan_nilai/laporan_daftarcetak.php?kelas=<?php echo $kelas ?>&skkode=<?php echo $skkode ?>">
    <button type="submit" class="btn btn-inverse" name="btncari"><i class="icon-print"></i>Cetak</button>
  </a> &nbsp;&nbsp;&nbsp;
  <!-----------------word------------->
  <a target="_blank" href="Data/laporan_nilai/laporan_daftarword.php?kelas=<?php echo $kelas ?>&skkode=<?php echo $skkode ?>">
    <button type="submit" class="btn btn-info" name="btncari"><i class="icon-save"></i>Word</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------excel------------->
  <a target="_blank" href="Data/laporan_nilai/laporan_daftarexcel.php?kelas=<?php echo $kelas ?>&skkode=<?php echo $skkode ?>">
    <button type="submit" class="btn btn-success" name="btncari"><i class="icon-save"></i>Excel</button>
  </a>&nbsp;&nbsp;&nbsp;
  <!-----------------pdf------------->
  <a target="_blank" href="Data/laporan_nilai/laporan_daftarpdf.php?kelas=<?php echo $kelas ?>&skkode=<?php echo $skkode ?>">
    <button type="submit" class="btn btn-danger" name="btncari"><i class="icon-save"></i>Pdf</button>
  </a>
  
  
  </div>
</div>
<table width="846" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><img src="kop.jpg" width="779" height="140" /><br>
        <p class="style4">Daftar Nilai </p>
        <p class="style4">Kelas <?php  echo $fg['nama_kelas']?> </p>
        <p class="style4">Mata Pelajaran <?php echo $fg2['sk_nama']?></p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="821" border="0" align="center" class="table table-bordered table-hover">
          <tr>
            <td width="77" bgcolor="#99CCFF"><strong>NISN</strong></td>
            <td width="565" bgcolor="#99CCFF"><strong>Nama </strong></td>
            <td width="77" bgcolor="#99CCFF"><strong>Nilai</strong></td>
            <td width="84" bgcolor="#99CCFF"><strong>Grade</strong></td>
          </tr>
		  
<?php $sql=mysql_query("select tb_siswa.*, tb_kelas.* from tb_siswa, tb_kelas where  tb_siswa.kode_kelas=tb_kelas.kode_kelas and tb_kelas.kode_kelas='$kelas'")or die (mysql_error()); while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['siswa_nisn'] ?></td>
            <td><?php echo $tam['siswa_nama'] ?></td>
            <td><?php $skl=mysql_query("select tb_nilai.*, tb_standarkompetensi.* from tb_nilai, tb_standarkompetensi where tb_nilai.sk_kode=tb_standarkompetensi.sk_kode and tb_nilai.siswa_nisn='".$tam['siswa_nisn']."' and tb_standarkompetensi.sk_kode='".$_GET['skkode']."'") or die(mysql_error());  $df=mysql_fetch_array($skl); 
			if($df['nilai_angka']<>""){ echo $df['nilai_angka']; }else{ echo "0";}
			
			
			?></td>
            <td><?php if($df['nilai_huruf']<>""){ echo $df['nilai_huruf']; }else{ echo "-"; }  ?></td>
          </tr><?php } ?>
      </table>    </td>
  </tr>
  <tr>
    <td height="42"><table width="840" border="0">
      <tr>
        <td width="81">&nbsp;</td>
        <td width="600">&nbsp;</td>
        <td width="285">Jember, <?php echo date('d-m-Y') ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Guru Pengajar </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><?php $gf=mysql_query("select tb_standarkompetensi.*, tb_guru.* from tb_standarkompetensi, tb_guru where tb_standarkompetensi.guru_kode=tb_guru.guru_kode and tb_standarkompetensi.sk_kode='$skkode'") or die(mysql_error()); $fg=mysql_fetch_array($gf); echo $fg['guru_nama']?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>NIP. <?php echo $fg['guru_nip']; ?></td>
      </tr>
    </table></td>
  </tr>
</table>
