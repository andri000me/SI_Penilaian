<link href="admin/assets/css/bootstrap-responsive.min.css" rel="stylesheet" /><style type="text/css">
<!--
.style7 {font-size: 10}
.style8 {font-size: 10px}
-->
</style>
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
	padding: 3px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 2px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
.style9 {
	color: #000000;
	font-weight: bold;
}
.style10 {color: #000000}
</style>

<left>
                <div class="wrapper">

                    <div class="welcome column c-67 clearfix">
                        <h3>&nbsp;</h3>
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

<table width="785" border="0">
  <tr>
    <td colspan="6"><a target="_blank" href="laporan_nilaicetak.php?nisn=<?php echo $nisn; ?>"><button class="submit">Cetak</button></a>
	&nbsp;&nbsp;&nbsp;<a target="_blank" href="laporan_nilaiword.php?nisn=<?php echo $nisn; ?>"><button class="submit">Word</button>
    &nbsp;&nbsp;&nbsp;</a><a target="_blank" href="laporan_nilaiexcel.php?nisn=<?php echo $nisn; ?>"><button class="submit">Excel</button>
    &nbsp;&nbsp;&nbsp;</a><a target="_blank" href="laporan_nilaipdf.php?nisn=<?php echo $nisn; ?>"><button class="submit">PDF</button>
    </a></td>
    </tr>
  <?php $sis=mysql_query("select tb_siswa.*, tb_kompetensikeahlian.*, tb_bidangstudi.*, tb_kelas.* from tb_kelas, tb_kompetensikeahlian, tb_bidangstudi, tb_siswa where tb_bidangstudi.bidang_kode=tb_kompetensikeahlian.bidang_kode and tb_siswa.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and tb_kelas.kode_kelas=tb_siswa.kode_kelas and siswa_nisn='$nisn'") or die (mysql_error()); $tsis=mysql_fetch_array($sis); ?>
  <tr>
    <td width="148"><span class="style7 style10">Nama  </span></td>
    <td width="3"><span class="style7 style10">:</span></td>
    <td width="169"><span class="style7 style10"><?php echo $tsis['siswa_nama'] ?></span></td>
    <td width="192"><span class="style7 style10">Nomor Induk </span></td>
    <td width="4"><span class="style7 style10">:</span></td>
    <td width="243"><span class="style8 style10"><?php echo $tsis['siswa_nisn'] ?></span></td>
  </tr>
  <tr>
    <td><span class="style7 style10">Bidang Studi  </span></td>
    <td><span class="style7 style10">:</span></td>
    <td><span class="style7 style10"><?php echo $tsis['bidang_nama'] ?></span></td>
    <td><span class="style7 style10">Kompetensi Keahlian </span></td>
    <td><span class="style7 style10">:</span></td>
    <td><span class="style8 style10"><?php echo $tsis['kompetensi_nama'] ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="style7 style10">Kelas</span></td>
    <td><span class="style7 style10">:</span></td>
    <td><span class="style8 style10"><?php echo $tsis['nama_kelas'] ?></span></td>
  </tr>
  <tr>
    <td colspan="6"><table width="751" border="1" style="border:1px solid" class="gridtable">
      <tr>
        <td width="41" bgcolor="#CCCCCC"><div align="center" class="style9">
          <div align="center">No</div>
        </div></td>
        <td width="457" bgcolor="#CCCCCC"><div align="center" class="style9">Mata Pelajaran </div></td>
        <td width="50" bgcolor="#CCCCCC"><div align="center" class="style9">KKM</div></td>
        <td width="61" bgcolor="#CCCCCC"><div align="center" class="style9">Nilai</div></td>
        <td width="57" bgcolor="#CCCCCC"><div align="center" class="style9">Grade</div></td>
      </tr>
	  <?php $no=1; $hcv=mysql_query("select tb_standarkompetensi.*, tb_kompetensikeahlian.*, tb_kelas.*  from tb_standarkompetensi, tb_kompetensikeahlian, tb_kelas where tb_standarkompetensi.kompetensi_kode=tb_kompetensikeahlian.kompetensi_kode and tb_kelas.kompetensi_kode=tb_standarkompetensi.kompetensi_kode and tb_kelas.kode_kelas='$kelas'  ") or die(mysql_error()); while($tg=mysql_fetch_array($hcv)){ ?>
      <tr>
        <td><div align="center" class="style10"><?php echo $no ?></div></td>
        <td><span class="style10"><?php echo $tg['sk_nama'] ?></span></td>
        <td><span class="style10"><?php echo $tg['kkm'] ?></span></td>
		<?php $xc=mysql_query("select * from tb_nilai where siswa_nisn='$nisn' and sk_kode='".$tg['sk_kode']."'") or die(mysql_error()); $uj=mysql_fetch_array($xc); ?>
        <td><span class="style10">
          <?php if(isset($uj['nilai_angka'])){ echo $uj['nilai_angka']; }else{ echo "0"; } ?>
        </span></td>
        <td><span class="style10">
          <?php if(isset($uj['nilai_huruf'])){ echo $uj['nilai_huruf']; }else{ echo "-"; } ?>
        </span></td>
      </tr><?php $no++;}  ?>
      <tr>
        <td colspan="3"><span class="style10">Total</span></td>
        <td><span class="style10">
          <?php $dfg=mysql_query("select sum(nilai_angka) as total1, tb_siswa.*, tb_kelas.* from tb_siswa, tb_kelas, tb_nilai where tb_nilai.siswa_nisn='$nisn' and tb_siswa.siswa_nisn=tb_nilai.siswa_nisn and tb_siswa.kode_kelas=tb_kelas.kode_kelas and tb_kelas.kode_kelas='$kelas' ") or die (mysql_error()); $to=mysql_fetch_array($dfg);  ?>
          <?php echo $to['total1']; ?></span></td>
        <td><span class="style10"></span></td>
      </tr>
      <tr>
        <td colspan="3"><span class="style10">Rata-rata</span></td>
        <td><span class="style10">
          <?php $ds=mysql_query("select tb_standarkompetensi.*,  count(*) as coun1 from tb_kelas, tb_standarkompetensi where  tb_kelas.kode_kelas='$kelas' and tb_standarkompetensi.kompetensi_kode=tb_kelas.kompetensi_kode") or die(mysql_error()); $hj=mysql_fetch_array($ds); $rat=strval($to['total1'])/strval($hj['coun1']); echo substr(trim($rat),0,5); ?>
        </span></td>
        <td><span class="style10"></span></td>
      </tr>
    </table>      <table width="509" border="0">
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


                    </div>

                    <div class="searchCourse searchCourseHome column c-33 clearfix" style="margin-top:-90px">
                        
					
						
						<?php if(isset($_SESSION['nisn'])){  ?>
						<label></label>
                  <br/><br/><br/><br/><br/><br/>          
                        <table width="200" border="0">
  <tr>
    <td colspan="3"><label></label>
      Selamat Datang </td>
    </tr>
  
  <tr>
    <td>NISN</td>
    <td>:</td>
    <td><?php echo  $_SESSION['nisn'] ?></td>
  </tr>
  <tr>
    <td>NAMA</td>
    <td>:</td>
    <td><?php echo  $_SESSION['nama'] ?></td>
  </tr>
  <tr>
    <td colspan="3"><a target="_blank" href="?page=Nilai&nisn=<?php echo $_SESSION['nisn'] ?>" class="submit" style="padding:5px;">Nilai</a>
	<a target="_blank" href="?page=gantipas&nisn=<?php echo $_SESSION['nisn'] ?>" class="submit" style="padding:5px;">Ubah Password</a>
  
   <a href="logout.php" class="submit" style="padding:5px;">Logout</a></td>
  </tr>
</table>

						
						<?php
						}else{ ?>
                        <form action="login-admin.php" method="post">
                            <input type="text" name="nisn" placeholder="Masukkan NISN..." >
							<input type="text" name="nisn1" placeholder="Masukkan NISN..." >
                            <input class="submit" type="submit" value="Login"/>
                        </form> <?php } ?>
                    </div>

                    <div class="clear"></div>

                    <div class="clear"></div>

                    <div class="clear"></div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
<div id="contentBk" class="clearfix" style="margin-top:-40px">
            <div id="content">
               
                <div class="wrapper">
                    <div class="blog column c-67 clearfix">
					
				
                                             
                    </div>


              </div>
            </div>
        </div>
</left>

		<!--fonts-->

		
		<!--ace styles-->

	
