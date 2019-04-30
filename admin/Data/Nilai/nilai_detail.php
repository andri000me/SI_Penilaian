<div class="well">
<?php $Kode=$_GET['Kode']; $kelas=$_GET['kelas']; $kompetensi=$_GET['kompetensi'];
$sql=mysql_query("select * from tb_siswa siswa where siswa_nisn='$Kode'") or die (mysql_error()); 
$tampil=mysql_fetch_array($sql);?>
<table width="653" border="0">
  <tr>
    <td width="199">NISN</td>
    <td width="9">:</td>
    <td width="221"><?php echo $tampil['siswa_nisn'] ?></td>
    <td width="206">&nbsp;</td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><?php echo $tampil['siswa_nama'] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $tampil['siswa_alamat'] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $tampil['siswa_tgllahir'] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kode Kompetensi </td>
    <td>:</td>
    <td><?php echo $tampil['kompetensi_kode'] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kode Kelas </td>
    <td>:</td>
    <td><?php echo $tampil['kode_kelas'] ?></td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="654" border="0" class="table table-bordered table-striped">
  <tr>
    <td width="20">No</td>
    <td width="308">Mata Pelajaran </td>
    <td width="110">KKM</td>
    <td width="82">Nilai</td>
    <td width="112">Grade</td>
  </tr><?php if($_SESSION['level']<>"Admin"){ ?>
  <?php $sql1=mysql_query("select tb_standarkompetensi.* from tb_standarkompetensi where kompetensi_kode='$kompetensi' and kelas='$kelas' and guru_kode='".$_SESSION['Kode_Pengguna']."'  ") or die (mysql_error());
     }else{
	$sql1=mysql_query("select tb_standarkompetensi.* from tb_standarkompetensi where kompetensi_kode='$kompetensi' and kelas='$kelas'") or die (mysql_error());
	
	}$no=1;
   while($tamp=mysql_fetch_array($sql1)){ ?>
  <tr>
    <td><?php echo $no ?></td>
    <td><a href="?page=nilaiadd&Kode=<?php echo $tampil['siswa_nisn'] ?>&skkode=<?php echo $tamp['sk_kode'] ?>&kelas=<?php echo $_GET['kelas'] ?>&kompetensi=<?php echo $_GET['kompetensi'] ?>"><?php echo $tamp['sk_nama']; ?></a></td>
    <td><?php echo $tamp['kkm']; ?></td>
	
	<?php $sk_kode1=$tamp['sk_kode']; $sql2=mysql_query("select tb_nilai.* from tb_nilai where   tb_nilai.sk_kode='$sk_kode1' and tb_nilai.siswa_nisn='$Kode'") or die (mysql_error());
	$ni=mysql_fetch_array($sql2); ?>
    <td><?php if(strval($ni['nilai_angka'])>strval($tamp['kkm'])){ echo $ni['nilai_angka']; }else{ ?> <font color="#FF0000"><?php echo $ni['nilai_angka']; ?></font><?php } ?></td>
    <td><?php echo $ni['nilai_huruf']; ?></td>
  </tr><?php  $no++;}  ?>
<?php if($_SESSION['level']=="Admin"){ ?>
  <tr>
    <td>&nbsp;</td>
    <td>Total</td>
    <td>&nbsp;</td>
    <td><?php $dfg=mysql_query("select sum(nilai_angka) as total1, tb_siswa.*, tb_kelas.* from tb_siswa, tb_kelas, tb_nilai where tb_nilai.siswa_nisn='$Kode' and tb_siswa.siswa_nisn=tb_nilai.siswa_nisn and tb_siswa.kode_kelas=tb_kelas.kode_kelas and tb_kelas.kelas='$kelas' ") or die (mysql_error()); $to=mysql_fetch_array($dfg);  ?>
      <?php echo $to['total1']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Rata-rata</td>
    <td>&nbsp;</td>
    <td><?php $ds=mysql_query("select tb_standarkompetensi.*,  count(kelas) as coun1 from tb_standarkompetensi where  kelas='$kelas' and kompetensi_kode='$kompetensi'") or die(mysql_error()); $hj=mysql_fetch_array($ds); $rat=strval($to['total1'])/strval($hj['coun1']); echo substr(trim($rat),0,5); ?></td>
    <td>&nbsp;</td>
  </tr> <?php } ?>
</table>
<p>&nbsp;</p>
</div>