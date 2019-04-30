

<?php

require_once("../../dompdf-master/dompdf_config.inc.php");
ob_start();
?>
<?php
include "../../db/koneksi.php";
 $kelas=$_GET['kelas']; $h=mysql_query("select * from tb_kelas where kode_kelas='$kelas'"); $fg=mysql_fetch_array($h);
 
 
 
 
 ?>

<table width="901" border="0" >
  <tr>
    <td width="1103" height="42"><div align="center" class="style3">
      <table width="867" border="0">
          <tr>
            <td>&nbsp;</td>
            <td><div align="center">Data  Murid </div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><div align="center">Kelas
                <?php  echo $fg['nama_kelas']?>
            </div></td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <p align="left">&nbsp;</p>
    </div><table width="895" border="1" class="table table-bordered table-hover">
          <tr>
            <td width="75" bgcolor="#99CCFF"><strong>NISN</strong></td>
            <td width="235" bgcolor="#99CCFF"><strong>Nama </strong></td>
            <td width="186" bgcolor="#99CCFF"><strong>Kelas </strong></td>
            <td width="265" bgcolor="#99CCFF"><strong>Alamat </strong></td>
            <td width="112" bgcolor="#99CCFF"><strong>Tanggal Lahir </strong></td>
            
          </tr>
		  
<?php $sql=mysql_query("select tb_siswa.*, tb_kelas.* from tb_siswa, tb_kelas where  tb_siswa.kode_kelas=tb_kelas.kode_kelas and tb_kelas.kode_kelas='$kelas'")or die (mysql_error()); while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['siswa_nisn'] ?></td>
            <td><?php echo $tam['siswa_nama'] ?></td>
            <td><?php echo $tam['nama_kelas'] ?></td>
            <td><?php echo $tam['siswa_alamat'] ?></td>
            <td><?php echo $tam['siswa_tgllahir'] ?></td>
            
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
<?php
$html = ob_get_clean();

$dompdf = new DOMPDF();
$dompdf->set_paper('legal', 'landscape');
$dompdf->load_html($html);
$dompdf->render();


$dompdf->stream("siswa.pdf");
?>