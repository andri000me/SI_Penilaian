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
 $kelas=$_GET['kelas']; $h=mysql_query("select * from tb_kelas where kode_kelas='$kelas'"); $fg=mysql_fetch_array($h);?>

<table width="988" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Wali Murid</p>
        <p>Kelas <?php  echo $fg['nama_kelas']?> </p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="1100" border="0" class="table table-bordered">
          <tr>
            <td width="33" bgcolor="#99CCFF"><strong>No</strong></td>
            <td width="150" bgcolor="#99CCFF"><strong>Nama Ayah </strong></td>
            <td width="158" bgcolor="#99CCFF"><strong>Nama Ibu </strong></td>
            <td width="114" bgcolor="#99CCFF"><strong>Pekerjaan Ayah </strong></td>
            <td width="114" bgcolor="#99CCFF"><strong>Pekerjaan Ibu </strong></td>
            <td width="183" bgcolor="#99CCFF"><strong>Alamat</strong></td>
            <td width="104" bgcolor="#99CCFF"><strong>Telpon</strong></td>
          </tr>
		  
<?php $sql=mysql_query("select tb_siswa.*, tb_walimurid.*, tb_kelas.* from tb_walimurid, tb_siswa, tb_kelas where tb_walimurid.wali_id=tb_siswa.wali_id and tb_siswa.kode_kelas=tb_kelas.kode_kelas and tb_kelas.kode_kelas='$kelas'")or die (mysql_error()); while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
             <td><?php echo $tam['wali_id'] ?></td>
            <td><?php echo $tam['wali_namaayah'] ?></td>
            <td><?php echo $tam['wali_namaibu'] ?></td>
            <td><?php echo $tam['wali_pekerjaanayah'] ?></td>
            <td><?php echo $tam['wali_pekerjaanibu'] ?></td>
            <td><?php echo $tam['wali_alamat'] ?></td>
            <td><?php echo $tam['wali_telpon'] ?></td>
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
</body>