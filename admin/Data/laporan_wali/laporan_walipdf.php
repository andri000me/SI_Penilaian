

<?php

require_once("../../dompdf-master/dompdf_config.inc.php");
ob_start();
?>
<?php

 
 
 ?><?php
include "../../db/koneksi.php";

 
 
 
 
 ?>
<?php if(isset($_GET['cari'])){ $cari=$_GET['cari']; }?>
<table width="943" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Wali Murid</p>
        <p> </p>
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
		  
<?php if(isset($cari)){
$sql=mysql_query("select  tb_walimurid.* from tb_walimurid where wali_id like '%$cari%' or wali_namaayah like '%$cari%' or wali_namaibu like '%$cari%' or wali_pekerjaanayah like '%$cari%' or wali_pekerjaanibu like '%$cari%' or wali_alamat like '%$cari%' or wali_telpon like '%$cari%'")or die (mysql_error()); 

}else{ $sql=mysql_query("select tb_siswa.*, tb_walimurid.*, tb_kelas.* from tb_walimurid, tb_siswa, tb_kelas where tb_walimurid.wali_id=tb_siswa.wali_id and tb_siswa.kode_kelas=tb_kelas.kode_kelas group by wali_pekerjaanayah")or die (mysql_error()); 
}?> <?php while($tam=mysql_fetch_array($sql)){ ?>
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