<?php

require_once("../../dompdf/dompdf_config.inc.php");
ob_start();
?>
	
		<style type="text/css">


table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
	width:700px;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
</style>


<?php
include "../../db/koneksi.php"; ?>
<?php $kelas=$_GET['kelas'];$skkode=$_GET['skkode']; $h=mysql_query("select * from tb_kelas where kode_kelas='$kelas'"); $fg=mysql_fetch_array($h);
$h2=mysql_query("select * from tb_standarkompetensi where sk_kode='$skkode'"); $fg2=mysql_fetch_array($h2);

?>
<table width="664" border="0" style="margin-left:-180px;" >
  <tr>
    <td width="658" height="42">
      <div align="center">
        <p align="center"><img src="../../kop.jpg" width="779" height="140" /></p>
        <p align="center">Daftar Nilai </p>
        <p align="center">Kelas <?php  echo $fg['nama_kelas']?> </p>
        <p align="center">Mata Pelajaran <?php echo $fg2['sk_nama']?></p>
      </div>
 
        <table width="900"   border="0" align="center" class="gridtable">
          <tr>
            <td  bgcolor="#99CCFF"><strong>NISN</strong></td>
            <td  bgcolor="#99CCFF"><strong>Nama </strong></td>
            <td  bgcolor="#99CCFF"><strong>Nilai</strong></td>
            <td   bgcolor="#99CCFF"><strong>Grade</strong></td>
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
    <td height="42"><table width="639" border="0">
      <tr>
        <td width="81">&nbsp;</td>
        <td width="471">&nbsp;</td>
        <td width="310">Jember, <?php echo date('d-m-Y') ?></td>
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
<?php
$html = ob_get_clean();

$dompdf = new DOMPDF();
$dompdf->set_paper('legal', 'potrait');
$dompdf->load_html($html);
$dompdf->render();


$dompdf->stream("siswa.pdf");
?>