
<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<?php
include "../../db/koneksi.php";
header("Content-Type: application/force-download"); header("Cache-Control: no-cache, must-revalidate"); header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); header("content-disposition: attachment;filename=bidang".date('dmY').".xls");
 ?>
<table width="429" border="0" >
  <tr>
    <td width="1104" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data Bidang </p>
        <p></p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="423" border="0" class="table table-bordered table-hover">
          <tr>
            <td width="36" bgcolor="#99CCFF"><strong>Kode</strong></td>
            <td width="377"  bgcolor="#99CCFF"><strong>Bidang</strong></td>
          </tr>
		  
<?php $sql=mysql_query("select tb_bidangstudi.* from tb_bidangstudi")or die (mysql_error()); while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['bidang_kode'] ?></td>
            <td><?php echo $tam['bidang_nama'] ?></td>
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
