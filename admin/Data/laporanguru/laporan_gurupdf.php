

<?php

require_once("../../dompdf-master/dompdf_config.inc.php");
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
.style1 {font-size: 12px}
</style>
<?php if(isset($_GET['cari'])){ $cari=$_GET['cari']; }?><?php
include "../../db/koneksi.php";

 
 
 ?>

<table width="706" border="0" >
  <tr>
    <td width="1103" height="42"><table width="506" border="0" align="left">
        <tr>
          <td><div align="center">Data  Guru </div></td>
        </tr>
        <tr>
          <td><div align="center">Mata Pelajaran </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p align="center">&nbsp;</p>
      <table width="731" border="1" class="gridtable">
          <tr>
        
            <td bgcolor="#99CCFF"><strong>NIP </strong></td>
            <td   bgcolor="#99CCFF"><strong>Nama </strong></td>
            <td  bgcolor="#99CCFF"><strong>Alamat </strong></td>
            <td  bgcolor="#99CCFF"><strong>Telepon</strong></td>
            
          </tr>
		  
<?php if(isset($cari)){
		  $sql=mysql_query("select tb_guru.*, tb_kompetensikeahlian.* from tb_guru, tb_kompetensikeahlian where tb_guru.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and guru_kode like '%$cari%' or guru_nip like '%$cari%' or guru_nama like '%$cari%' or kompetensi_nama like '%$cari%' or guru_alamat like '%$cari%' or guru_telpon like '%$cari%'  ")or die (mysql_error());
		  }else{
 $sql=mysql_query("select tb_guru.*, tb_kompetensikeahlian.* from tb_guru, tb_kompetensikeahlian where tb_guru.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode")or die (mysql_error()); } ?>
 <?php while($tam=mysql_fetch_array($sql)){ ?>         <tr>
           
            <td><?php echo $tam['guru_nip'] ?></td>
            <td><?php echo $tam['guru_nama'] ?></td>
            <td><?php echo $tam['guru_alamat'] ?></td>
            <td><?php echo $tam['guru_telpon'] ?></td>
          </tr><?php } ?>      </table>
    </td>
  </tr>

</table>
<?php
$html = ob_get_clean();

$dompdf = new DOMPDF();
$dompdf->set_paper('legal', 'potrait');
$dompdf->load_html($html);
$dompdf->render();


$dompdf->stream("guru.pdf");
?>