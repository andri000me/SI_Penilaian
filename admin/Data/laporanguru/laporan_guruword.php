<?php 
 ?>
<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
<?php if(isset($_GET['cari'])){ $cari=$_GET['cari']; }?></style>
<?php
include "../../db/koneksi.php";
 
 
 header("Content-Type: application/force-download"); header("Cache-Control: no-cache, must-revalidate"); header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); header("content-disposition: attachment;filename=guru".date('dmY').".doc");
 
 
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
 <?php while($tam=mysql_fetch_array($sql)){ ?>
          <tr>
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

