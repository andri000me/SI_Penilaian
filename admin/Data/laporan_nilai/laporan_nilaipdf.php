
<?php

require_once("../../dompdf-master/dompdf_config.inc.php");
ob_start();
?>
<style type="text/css">


table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
	width:700px;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
.style1 {font-size: 12px}
</style>
<?php
include "../../db/koneksi.php";
$kelas=$_GET['kelas'];$nisn=$_GET['nisn']; $h=mysql_query("select * from tb_kelas where kode_kelas='$kelas'"); $fg=mysql_fetch_array($h);?>

<table width="600px" border="0" >
  <tr>
    <td width="67">&nbsp;</td>
    <td width="5">&nbsp;</td>
    <td width="198">&nbsp;</td>
    <td width="106">&nbsp;</td>
    <td width="5">&nbsp;</td>
    <td width="299">&nbsp;</td>
  </tr>
  <?php $sis=mysql_query("select tb_siswa.*, tb_kompetensikeahlian.*, tb_bidangstudi.*, tb_kelas.* from tb_kelas, tb_kompetensikeahlian, tb_bidangstudi, tb_siswa where tb_bidangstudi.bidang_kode=tb_kompetensikeahlian.bidang_kode and tb_siswa.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and tb_kelas.kode_kelas=tb_siswa.kode_kelas and siswa_nisn='$nisn'") or die (mysql_error()); $tsis=mysql_fetch_array($sis); ?>
  <tr>
    <td><span class="style1">Nama  </span></td>
    <td><span class="style1">:</span></td>
    <td><span class="style1"><?php echo $tsis['siswa_nama'] ?></span></td>
    <td><span class="style1">Nomor Induk </span></td>
    <td><span class="style1">:</span></td>
    <td><span class="style1"><?php echo $tsis['siswa_nisn'] ?></span></td>
  </tr>
  <tr>
    <td><span class="style1">Bidang Studi  </span></td>
    <td><span class="style1">:</span></td>
    <td><span class="style1"><?php echo $tsis['bidang_nama'] ?></span></td>
    <td><span class="style1">Kompetensi Keahlian </span></td>
    <td><span class="style1">:</span></td>
    <td><span class="style1"><?php echo $tsis['kompetensi_nama'] ?></span></td>
  </tr>
  <tr>
    <td><span class="style1"></span></td>
    <td><span class="style1"></span></td>
    <td><span class="style1"></span></td>
    <td><span class="style1">Kelas</span></td>
    <td><span class="style1">:</span></td>
    <td><span class="style1"><?php echo $tsis['nama_kelas'] ?></span></td>
  </tr>
  <tr>
    <td colspan="6"><table width="435" border="1"  class="gridtable">
      <tr>
        <td  bgcolor="#CCCCCC">No</td>
        <td  bgcolor="#CCCCCC">Mata Pelajaran </td>
        <td  bgcolor="#CCCCCC">KKM</td>
        <td  bgcolor="#CCCCCC">Nilai</td>
        <td  bgcolor="#CCCCCC">Grade</td>
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
        <td width="338"><span class="style1">Mengetahui</span></td>
        <td width="129">&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="style1">Orang Tua / Wali </span></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="style1"></span></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="style1"></span></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="style1">
          <?php $wal=mysql_query("select * from tb_siswa, tb_walimurid where tb_siswa.wali_id=tb_walimurid.wali_id and tb_siswa.siswa_nisn='$nisn'") or die(mysql_error()); $gk=mysql_fetch_array($wal); echo $gk['wali_namaayah'] ?>
        </span></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="style1"></span></td>
        <td>&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>

<?php
$html = ob_get_clean();

$dompdf = new DOMPDF();
$dompdf->set_paper('legal', 'potrait');
$dompdf->load_html($html);
$dompdf->render();


$dompdf->stream("siswa.pdf");
?>