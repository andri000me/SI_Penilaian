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
</style><?php if(isset($_GET['cari'])){ $cari=$_GET['cari']; }?>

<?php
include "../../db/koneksi.php";
 ?>
<table width="801" border="0" >
  <tr>
    <td width="1104" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Kelas </p>
        <p></p>
        <p>&nbsp;</p>
      </div>
    </div>
       <table width="803" border="0" class="table table-bordered table-hover">
          <tr>
            <td width="129" bgcolor="#99CCFF"><strong>Kode</strong></td>
			<td width="165"  bgcolor="#99CCFF"><strong>Kompetensi</strong></td>
			<td width="141"  bgcolor="#99CCFF"><strong>Kelas</strong></td>
			<td width="228"  bgcolor="#99CCFF"><strong>Nama Kelas</strong></td>
			
          </tr>
		  
<?php if(isset($cari)){

$sql=mysql_query("select  tb_kelas.*from  tb_kelas where   kode_kelas like '%$cari%' or kompetensi_kode like '%$cari%' or kelas like '%$cari%' or nama_kelas like '%$cari%'   ")or die (mysql_error());

}else{ $sql=mysql_query("select  tb_kelas.*, tb_kompetensikeahlian.* from  tb_kompetensikeahlian, tb_kelas where tb_kelas.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode")or die (mysql_error()); } ?> 

<?php  while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['kode_kelas'] ?></td>
			<td><?php echo $tam['kompetensi_kode'] ?></td>
			<td><?php echo $tam['kelas'] ?></td>
			<td><?php echo $tam['nama_kelas'] ?></td>
			
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
</body>