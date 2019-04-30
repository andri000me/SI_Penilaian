<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<?php
include "../../db/koneksi.php";
 $kelas=$_GET['kelas']; $h=mysql_query("select * from tb_kelas where kode_kelas='$kelas'"); $fg=mysql_fetch_array($h);
 
 
  header("Content-Type: application/force-download"); header("Cache-Control: no-cache, must-revalidate"); header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); header("content-disposition: attachment;filename=wali".$fg['nama_kelas']."".date('dmY').".xls");

 
 
 ?>




<table width="988" border="0" >
  <tr>
    <td width="885" height="42"><div align="center" class="style3">
      <div align="center"><br>
        <p>Data  Murid</p>
        <p>Kelas <?php  echo $fg['nama_kelas']?> </p>
        <p>&nbsp;</p>
      </div>
    </div>
        <table width="1100" border="0" class="table table-bordered table-hover">
          <tr>
            <td width="33" bgcolor="#99CCFF"><strong>NISN</strong></td>
            <td width="150" bgcolor="#99CCFF"><strong>Nama </strong></td>
            <td width="158" bgcolor="#99CCFF"><strong>Kelas </strong></td>
            <td width="114" bgcolor="#99CCFF"><strong>Alamat </strong></td>
            <td width="114" bgcolor="#99CCFF"><strong>Tanggal Lahir </strong></td>
            
          </tr>
		  
<?php $sql=mysql_query("select tb_siswa.*, tb_kelas.* from tb_siswa, tb_kelas where  tb_siswa.kode_kelas=tb_kelas.kode_kelas and tb_kelas.kode_kelas='$kelas'")or die (mysql_error()); while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
            <td><?php echo $tam['siswa_nisn'] ?></td>
            <td><?php echo $tam['siswa_nama'] ?></td>
            <td><?php echo $tam['nama_kelas'] ?></td>
            <td><?php echo $tam['siswa_alamat'] ?></td>
            <td><?php echo $tam['siswa_tgllahir'] ?></td>
            
          </tr><?php } ?>
      </table>
    </td>
  </tr>

</table>
