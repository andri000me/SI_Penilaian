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
$kelas=$_GET['kelas'];
$kompetensi=$_GET['kompetensi'];
$query = "SELECT * FROM tb_standarkompetensi where kelas='$kelas' and kompetensi_kode='$kompetensi'"; 
$result = mysql_query($query);
 ?>
<table width="506" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p align="left">Data Pelajaran </p>
        <p align="left">Kelas <?php echo $_GET['kelas'] ?></p>
       
      </div>
    </div>
        <table class="gridtable">
    <thead>
    <tr>
         <td> <b>Kode</b> </td>
        <td class='hidden-480'> <b>Kode Guru  </b> </td>
		  <td class='hidden-480'> <b>Kompetensi Kode</b> </td>
		   <td class='hidden-480'> <b> SK Nama</b> </td>	
		   <td class='hidden-480'> <b> Kelas </b> </td>	
     </tr>
	 </thead>
<?php
$i = 0;
while ($data = mysql_fetch_array($result)) { 
  ?> 
 
  <?php echo "<tbody><tr>
  
            <td>".$data['sk_kode']."</td>
			<td class='hidden-480'>".$data['guru_kode']."</td>
		<td class='hidden-480'>".$data['kompetensi_kode']."</td>
			<td class='hidden-480'>".$data['sk_nama']."</td> 
			<td class='hidden-480'>".$data['kelas']."</td>"; 
?>
      </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>

    </td>
  </tr>

</table>

<?php
$html = ob_get_clean();

$dompdf = new DOMPDF();
$dompdf->set_paper('legal', 'potrait');
$dompdf->load_html($html);
$dompdf->render();


$dompdf->stream("pelajaran.pdf");
?>