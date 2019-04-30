<?php
//include_once "library/inc.seslogin.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		$pesanError = array();
		if (trim($_POST['a'])=="") {
			$pesanError[] = "Data <b>NISN</b> tidak boleh kosong !";		
		}
		if (trim($_POST['b'])=="") {
			$pesanError[] = " <b>SK Kode</b> tidak boleh kosong !";		
		}
		if (trim($_POST['c'])=="") {
			$pesanError[] = " <b>Nilai Angka</b> tidak boleh kosong !";		
		}
		
		
		
		
		
		# Baca Variabel Form
		$a	= $_POST['a'];
		$b	= $_POST['b'];
			$c	= $_POST['c'];
		
		
		# JIKA ADA PESAN ERROR DARI VALIDASI
		if (count($pesanError)>=1 ){
            echo "<div class='mssgBox'>";
			echo "<img src='images/attention.png'> <br><hr>";
				$noPesan=0;
				foreach ($pesanError as $indeks=>$pesan_tampil) { 
				$noPesan++;
					echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";	
				} 
			echo "</div> <br>"; 
		}
		else {
		if(strval($c)<40){ $d="E"; }elseif(strval($c)>=40 and strval($c)<50){ $d="D"; }elseif(strval($c)>=50 and strval($c)<70){ $d="C"; }elseif(strval($c)>=70 and strval($c)<90){ $d="B"; }else{ $d="A"; }
			# SIMPAN PERUBAHAN DATA, Jika jumlah error pesanError tidak ada, simpan datanya
			$mySql	= "UPDATE tb_nilai SET siswa_nisn='$a',sk_kode='$b',nilai_angka='$c', nilai_huruf='$d' WHERE siswa_nisn='".$_POST['a']."'";
			$myQry	= mysql_query($mySql) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=nilaiview'>";
			}
			exit;
		}	
	} // Penutup POST
		
	# TAMPILKAN 
	$Kode	= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['a']; 
	$SK	= isset($_GET['sk']) ?  $_GET['sk'] : $_POST['b']; 
	$sqlShow= "SELECT * FROM tb_nilai WHERE siswa_nisn='$Kode' and sk_kode='$SK'";
	$qryShow= mysql_query($sqlShow)  or die ("Query salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow); 

	# MASUKKAN DATA KE VARIABEL
	$a	=  isset($dataShow['siswa_nisn']) ?  $dataShow['siswa_nisn'] : $_POST['a'];
	$b	= isset($dataShow['sk_kode']) ?  $dataShow['sk_kode'] : $_POST['b'];
	$c	= isset($dataShow['nilai_angka']) ?  $dataShow['nilai_angka'] : $_POST['c'];
	
	
	
} // Penutup GET
?>
<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

  <div class="table-header">
		  <a class="brand" href='?page=nilaiview'>Data Nilai</a>
		  <div class="nav-collapse">

<a href='?page=nilaiadd' class="small-box"><button class="btn btn-primary">+ Penilaian</button></a>



		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" action="?page=nilaicari">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
		  <button type="submit" class="btn btn-primary" name="btncari">Cari Data</button>
		</form>		</div>

		</div>
</div>
</div>
<section>
<form enctype="multipart/form-data" method="post" name="form1" target="_self">
  <table width="512" class="table table-hover table-condensed" >
    <tr>
      <td width="27%"><strong>NISN</strong></td>
      <td width="2%"><b>:</b></td>
      <td width="71%"><select name="a" id="a">
          <option value="<?php echo $a; ?>"><?php echo $a; ?></option>
          <?php $sql0=mysql_query("select * from tb_siswa") or die (mysql_query()); while($ta=mysql_fetch_array($sql0)){?>
          <option value="<?php echo $ta['siswa_nisn']; ?>"><?php echo $ta['siswa_nama']; ?> </option>
          <?php } ?>
      </select></td>
    </tr>
    <tr>
      <td><strong>SK Kode </strong></td>
      <td><b>:</b></td>
      <td><label>
        <select name="b" id="b">
          <option value="<?php echo $b; ?>"><?php echo $b; ?></option>
          <?php $sql0=mysql_query("select * from tb_standarkompetensi") or die (mysql_query()); while($ta=mysql_fetch_array($sql0)){?>
          <option value="<?php echo $ta['sk_kode']; ?>"><?php echo $ta['sk_nama']; ?> </option>
          <?php } ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><strong>Nilai Angka </strong></td>
      <td><b>:</b></td>
      <td><input name="c" type="text" id="b" value="<?php echo $c; ?>" size="60" maxlength="100" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input  type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;"  class="btn btn-primary" /></td>
    </tr>
  </table>
</form>

 