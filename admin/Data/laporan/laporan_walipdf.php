

<?php

require_once("../../dompdf-master/dompdf_config.inc.php");
ob_start();
?>
<?php

 
 
 ?><?php
include "../../db/koneksi.php";
 $kelas=$_GET['kelas']; $h=mysql_query("select * from tb_kelas where kode_kelas='$kelas'"); $fg=mysql_fetch_array($h);
 
 
 
 
 ?>

<table width="943" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Wali Murid</p>
        <p>Kelas <?php  echo $fg['nama_kelas']?> </p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="937" border="1px"  style="border:1px thin #000000; " class="table table-bordered">
          <tr style="border:1px solid #000000">
            <td style="border:1px solid #000000" width="37" bgcolor="#99CCFF"><strong>No</strong></td>
            <td style="border:1px solid #000000" width="149" bgcolor="#99CCFF"><strong>Nama Ayah </strong></td>
            <td style="border:1px solid #000000" width="139" bgcolor="#99CCFF"><strong>Nama Ibu </strong></td>
            <td style="border:1px solid #000000" width="118" bgcolor="#99CCFF"><strong>Pekerjaan Ayah </strong></td>
            <td style="border:1px solid #000000" width="99" bgcolor="#99CCFF"><strong>Pekerjaan Ibu </strong></td>
            <td style="border:1px solid #000000" width="248" bgcolor="#99CCFF"><strong>Alamat</strong></td>
            <td style="border:1px solid #000000" width="117" bgcolor="#99CCFF"><strong>Telpon</strong></td>
          </tr>
		  
<?php $sql=mysql_query("select tb_siswa.*, tb_walimurid.*, tb_kelas.* from tb_walimurid, tb_siswa, tb_kelas where tb_walimurid.wali_id=tb_siswa.wali_id and tb_siswa.kode_kelas=tb_kelas.kode_kelas and tb_kelas.kode_kelas='$kelas'")or die (mysql_error()); while($tam=mysql_fetch_array($sql)){ ?>
          <tr style="border-bottom:1px solid #000000">
            <td style="border-left:1px solid #000000"><?php echo $tam['wali_id'] ?></td>
            <td style="border-left:1px solid #000000"><?php echo $tam['wali_namaayah'] ?></td>
            <td style="border-left:1px solid #000000"><?php echo $tam['wali_namaibu'] ?></td>
            <td style="border-left:1px solid #000000"><?php echo $tam['wali_pekerjaanayah'] ?></td>
            <td style="border-left:1px solid #000000"><?php echo $tam['wali_pekerjaanibu'] ?></td>
            <td style="border-left:1px solid #000000"><?php echo $tam['wali_alamat'] ?></td>
            <td style="border-left:1px solid #000000"><?php echo $tam['wali_telpon'] ?></td>
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table><?php
$html = ob_get_clean();

$dompdf = new DOMPDF();
$dompdf->set_paper('legal', 'landscape');
$dompdf->load_html($html);
$dompdf->render();


$dompdf->stream("wali.pdf");
?>