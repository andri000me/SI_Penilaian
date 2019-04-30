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

<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<?php
include "../../db/koneksi.php";
 ?>
<table width="429" border="0" >
  <tr>
    <td width="1104" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p align="left">Data Kompetensi </p>
        <p></p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="598" border="0" class="gridtable">
          <tr>
            <td  bgcolor="#99CCFF"><strong>Kode</strong></td>
			<td   bgcolor="#99CCFF"><strong>Bidang Kode</strong></td>
			<td   bgcolor="#99CCFF"><strong>Kompetensi Nama</strong></td>
			
          </tr>
		  
<?php $sql=mysql_query("select  tb_kompetensikeahlian.* from  tb_kompetensikeahlian")or die (mysql_error()); while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['kompetensi_kode'] ?></td>
			<td><?php echo $tam['bidang_kode'] ?></td>
			<td><?php echo $tam['kompetensi_nama'] ?></td>
			
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
<?php
$html = ob_get_clean();

$dompdf = new DOMPDF();
$dompdf->set_paper('legal', 'potrait');
$dompdf->load_html($html);
$dompdf->render();


$dompdf->stream("kompetensi.pdf");
?>