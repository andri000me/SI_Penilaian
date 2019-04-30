<script language="JavaScript">
  function loadprint(){
  window.print();


} </script><body onLoad="loadprint();">
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />


		<!--fonts-->

		
		<!--ace styles-->

		<link rel="stylesheet" href="../../assets/css/ace.min.css" />
		<link rel="stylesheet" href="../../assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="../../assets/css/ace-skins.min.css" />
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
        <p>Data Pelajaran </p>
        <p>Kelas <?php echo $_GET['kelas'] ?></p>
       
      </div>
    </div>
        <table class="table  table-bordered table-hover">
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
</body>