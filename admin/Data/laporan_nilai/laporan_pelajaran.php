<?php $kelas=$_GET['kelas'];
$sql=mysql_query("select * from tb_kelas where kode_kelas='$kelas'") or die(mysql_error());
$nama=mysql_fetch_array($sql); ?><div class="table-header">
  <div class="nav-collapse"> <strong>Daftar Pelajaran Kelas <?php echo $nama['nama_kelas'] ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> 
  
  
  </div>
</div>
<table width="684" border="0">
  <tr>
    <td width="585"><br>
<table width="414" border="0" class="table table-bordered table-hover">
  
  <tr>
    <td width="53" bgcolor="#99CCFF"><div align="left"><strong>No</strong></div></td>
    <td width="253" bgcolor="#99CCFF"><div align="left"><strong>Pelajaran</strong></div></td>
 <!---   <td width="94" bgcolor="#99CCFF"><div align="left"><strong>Jumlah Siswa </strong></div></td> --->
  </tr>
  <?php 
  if($_SESSION['level']<>"Admin"){
  
  $no=1; $swl=mysql_query("select  tb_standarkompetensi.*, tb_kompetensikeahlian.*  from tb_kompetensikeahlian, tb_kelas, tb_standarkompetensi where tb_standarkompetensi.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and tb_standarkompetensi.kelas=tb_kelas.kelas and  tb_kelas.kompetensi_kode=tb_standarkompetensi.kompetensi_kode  and tb_kelas.kode_kelas='$kelas' and tb_kompetensikeahlian.kompetensi_kode='".$_GET['kompetensi']."' and tb_standarkompetensi.guru_kode='".$_SESSION['Kode_Pengguna']."'");
  }else{
  
  $no=1; $swl=mysql_query("select  tb_standarkompetensi.*, tb_kompetensikeahlian.*  from tb_kompetensikeahlian, tb_kelas, tb_standarkompetensi where tb_standarkompetensi.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and tb_standarkompetensi.kelas=tb_kelas.kelas and tb_kelas.kode_kelas='$kelas' and tb_kompetensikeahlian.kompetensi_kode='".$_GET['kompetensi']."' ");
  
  }
  
  
  while ($tam=mysql_fetch_array($swl)){ ?>
  <tr>
    <td><?php echo $no ?></td>
    <td><a href="?page=lapordaftarnilai&kelas=<?php echo $kelas ?>&skkode=<?php echo $tam['sk_kode'];?>"><?php echo $tam['sk_nama']; ?></a></td>
   <!--- <td><?php #$sql3=mysql_query("select count(*) as coun, tb_nilai.*, tb_standarkompetensi.*, tb_kompetensikeahlian.* from tb_kompetensikeahlian, tb_nilai, tb_standarkompetensi where tb_nilai.sk_kode=tb_standarkompetensi.sk_kode and tb_standarkompetensi.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and tb_nilai.sk_kode='".$tam['sk_kode']."'") or die (mysql_error()); $tam12=mysql_fetch_array($sql3); echo $tam12['coun']; ?></td>-->
  </tr><?php $no++; } ?>
</table>
</td>
  </tr>
</table>
