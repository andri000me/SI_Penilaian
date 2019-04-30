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

<table width="988" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Guru </p>
        <p></p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="1100" border="0" class="table table-bordered table-hover">
          <tr>
            <td width="33" bgcolor="#99CCFF"><strong>Kode</strong></td>
            <td  bgcolor="#99CCFF"><strong>NIP </strong></td>
            <td  bgcolor="#99CCFF"><strong>Nama </strong></td>
            <td  bgcolor="#99CCFF"><strong>Kompetensi </strong></td>
            <td  bgcolor="#99CCFF"><strong>Alamat </strong></td>
            <td  bgcolor="#99CCFF"><strong>Telepon</strong></td>
       
          </tr>
		  
<?php if(isset($cari)){
		  $sql=mysql_query("select tb_guru.*, tb_kompetensikeahlian.* from tb_guru, tb_kompetensikeahlian where tb_guru.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and guru_kode like '%$cari%' or guru_nip like '%$cari%' or guru_nama like '%$cari%' or kompetensi_nama like '%$cari%' or guru_alamat like '%$cari%' or guru_telpon like '%$cari%'  ")or die (mysql_error());
		  }else{
 $sql=mysql_query("select tb_guru.*, tb_kompetensikeahlian.* from tb_guru, tb_kompetensikeahlian where tb_guru.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode")or die (mysql_error()); } ?>
 <?php while($tam=mysql_fetch_array($sql)){ ?>          <tr>
            <td><?php echo $tam['guru_kode'] ?></td>
            <td><?php echo $tam['guru_nip'] ?></td>
            <td><?php echo $tam['guru_nama'] ?></td>
            <td><?php echo $tam['kompetensi_nama'] ?></td>
            <td><?php echo $tam['guru_alamat'] ?></td>
            <td><?php echo $tam['guru_telpon'] ?></td>
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>

</body>