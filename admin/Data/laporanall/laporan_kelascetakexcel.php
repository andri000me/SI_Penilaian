
<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<?php
include "../../db/koneksi.php";
header("Content-Type: application/force-download"); header("Cache-Control: no-cache, must-revalidate"); header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); header("content-disposition: attachment;filename=kelas".date('dmY').".xls");
 ?>
<table width="429" border="0" >
  <tr>
    <td width="1104" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Kelas </p>
        <p></p>
        <p>&nbsp;</p>
      </div>
    </div>
       <table width="598" border="0" class="table table-bordered table-hover">
          <tr>
            <td width="234" bgcolor="#99CCFF"><strong>Kode</strong></td>
			<td width="256"  bgcolor="#99CCFF"><strong>Kelas</strong></td>
			
          </tr>
		  
<?php $sql=mysql_query("select tb_kelas.*, tb_kompetensikeahlian.* from  tb_kompetensikeahlian, tb_kelas where tb_kelas.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and  bidang_kode='".$_GET['bidang']."'")or die (mysql_error()); while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['kompetensi_nama'] ?></td>
			<td><?php echo $tam['nama_kelas'] ?></td>
			
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
