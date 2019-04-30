<style type="text/css">
<!--
.style3 {	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<?php
include "admin/db/koneksi.php";
$nisn=$_GET['nisn']; $h=mysql_query("select * from tb_siswa where siswa_nisn='$nisn'"); $fg=mysql_fetch_array($h); $kelas=$fg['kode_kelas'];?>
<?php
 
  header("Content-Type: application/force-download"); header("Cache-Control: no-cache, must-revalidate"); header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); header("content-disposition: attachment;filename=raport".$fg['siswa_nisn']."".date('dmY').".xls");

 
 
 ?>



<table width="757" border="0">
  <tr>
    <td width="152">&nbsp;</td>
    <td width="5">&nbsp;</td>
    <td width="186">&nbsp;</td>
    <td width="169">&nbsp;</td>
    <td width="3">&nbsp;</td>
    <td width="216">&nbsp;</td>
  </tr>
  <?php $sis=mysql_query("select tb_siswa.*, tb_kompetensikeahlian.*, tb_bidangstudi.*, tb_kelas.* from tb_kelas, tb_kompetensikeahlian, tb_bidangstudi, tb_siswa where tb_bidangstudi.bidang_kode=tb_kompetensikeahlian.bidang_kode and tb_siswa.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and tb_kelas.kode_kelas=tb_siswa.kode_kelas and siswa_nisn='$nisn'") or die (mysql_error()); $tsis=mysql_fetch_array($sis); ?>
  <tr>
    <td>Nama  </td>
    <td>:</td>
    <td><?php echo $tsis['siswa_nama'] ?></td>
    <td>Nomor Induk </td>
    <td>:</td>
    <td><?php echo $tsis['siswa_nisn'] ?></td>
  </tr>
  <tr>
    <td>Bidang Studi  </td>
    <td>:</td>
    <td><?php echo $tsis['bidang_nama'] ?></td>
    <td>Kompetensi Keahlian </td>
    <td>:</td>
    <td><?php echo $tsis['kompetensi_nama'] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Kelas</td>
    <td>:</td>
    <td><?php echo $tsis['nama_kelas'] ?></td>
  </tr>
  <tr>
    <td colspan="6"><table width="751" border="0" class="table table-bordered table-hover">
      <tr>
        <td width="43" bgcolor="#CCCCCC">No</td>
        <td width="247" bgcolor="#CCCCCC">Mata Pelajaran </td>
        <td width="145" bgcolor="#CCCCCC">KKM</td>
        <td width="145" bgcolor="#CCCCCC">Nilai</td>
        <td width="149" bgcolor="#CCCCCC">Grade</td>
      </tr>
	  <?php $no=1; $hcv=mysql_query("select tb_standarkompetensi.*, tb_kompetensikeahlian.*, tb_kelas.*  from tb_standarkompetensi, tb_kompetensikeahlian, tb_kelas where tb_standarkompetensi.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and tb_kelas.kompetensi_kode=tb_standarkompetensi.kompetensi_kode and tb_kelas.kode_kelas='$kelas'  ") or die(mysql_error()); while($tg=mysql_fetch_array($hcv)){ ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $tg['sk_nama'] ?></td>
        <td><?php echo $tg['kkm'] ?></td>
		<?php $xc=mysql_query("select * from tb_nilai where siswa_nisn='$nisn' and sk_kode='".$tg['sk_kode']."'") or die(mysql_error()); $uj=mysql_fetch_array($xc); ?>
        <td><?php if(isset($uj['nilai_angka'])){ echo $uj['nilai_angka']; }else{ echo "0"; } ?></td>
        <td><?php if(isset($uj['nilai_huruf'])){ echo $uj['nilai_huruf']; }else{ echo "-"; } ?></td>
      </tr><?php $no++;}  ?>
      <tr>
        <td colspan="3">Total</td>
        <td><?php $dfg=mysql_query("select sum(nilai_angka) as total1, tb_siswa.*, tb_kelas.* from tb_siswa, tb_kelas, tb_nilai where tb_nilai.siswa_nisn='$nisn' and tb_siswa.siswa_nisn=tb_nilai.siswa_nisn and tb_siswa.kode_kelas=tb_kelas.kode_kelas and tb_kelas.kode_kelas='$kelas' ") or die (mysql_error()); $to=mysql_fetch_array($dfg);  ?><?php echo $to['total1']; ?></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3">Rata-rata</td>
        <td><?php $ds=mysql_query("select tb_standarkompetensi.*,  count(*) as coun1 from tb_kelas, tb_standarkompetensi where  tb_kelas.kode_kelas='$kelas' and tb_standarkompetensi.kompetensi_kode=tb_kelas.kompetensi_kode") or die(mysql_error()); $hj=mysql_fetch_array($ds); $rat=strval($to['total1'])/strval($hj['coun1']); echo substr(trim($rat),0,5); ?></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="6"><table width="509" border="0">
      <tr>
        <td width="28">&nbsp;</td>
        <td width="338">Mengetahui</td>
        <td width="129">&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Orang Tua / Wali </td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td><?php $wal=mysql_query("select * from tb_siswa, tb_walimurid where tb_siswa.wali_id=tb_walimurid.wali_id and tb_siswa.siswa_nisn='$nisn'") or die(mysql_error()); $gk=mysql_fetch_array($wal); echo $gk['wali_namaayah'] ?></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>



