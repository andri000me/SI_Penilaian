<?php
//include_once "library/inc.seslogin.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		$pesanError = array();
		if (trim($_POST['a'])=="") {
			$pesanError[] = "<b>Kode</b> tidak boleh kosong !";		
		}
		if (trim($_POST['b'])=="") {
			$pesanError[] = " <b>Kompetensi Kode</b> tidak boleh kosong !";		
		}
		if (trim($_POST['c'])=="") {
			$pesanError[] = " <b>Kelas</b> tidak boleh kosong !";		
		}
		
		
		
		
		
		# Baca Variabel Form
		$a	= $_POST['a'];
		$b	= $_POST['b'];
		$c	= $_POST['c'];
		
		$dfs=mysql_query("select * from tb_kompetensikeahlian where kompetensi_kode='$b'")or die (mysql_error());
		$fg=mysql_fetch_array($dfs);
		$ce=mysql_query("select count(*) as coun from tb_kelas where kelas='$c' and kompetensi_kode='$b'") or die (mysql_error());
		$check=mysql_fetch_array($ce);
		$tam=$check['coun']+1;
		$nama=$fg['kompetensi_nama'];
		$d="$c $nama $tam";
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
		echo "<img src='load.gif' width='400px' />";
			# SIMPAN PERUBAHAN DATA, Jika jumlah error pesanError tidak ada, simpan datanya
			$mySql	= "UPDATE tb_kelas SET kode_kelas='$a',kompetensi_kode='$b',kelas='$c', nama_kelas='$d' WHERE kode_kelas='".$_POST['a']."'";
			$myQry	= mysql_query($mySql) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=kelasview'>";
			}
			exit;
		}	
	} // Penutup POST
		
	# TAMPILKAN 
	$Kode	= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['a']; 
	$sqlShow= "SELECT * FROM tb_kelas WHERE kode_kelas='$Kode'";
	$qryShow= mysql_query($sqlShow)  or die ("Query salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow); 

	# MASUKKAN DATA KE VARIABEL
	$a	=  isset($dataShow['kode_kelas']) ?  $dataShow['kode_kelas'] : $_POST['a'];
	$b	= isset($dataShow['kompetensi_kode']) ?  $dataShow['kompetensi_kode'] : $_POST['b'];
	$c	= isset($dataShow['kelas']) ?  $dataShow['kelas'] : $_POST['c'];
	
	
	
} // Penutup GET
?>
<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

  <div class="table-header">
		  <a class="brand" href='?page=kelasview'>Data Kelas</a>
		  <div class="nav-collapse">

<a href='?page=kelasadd' class="small-box"><button class="btn btn-primary">+ Tambah Kelas</button></a>



		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" action="?page=kelascari">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
		  <button type="submit" class="btn btn-primary" name="btncari">Cari Data</button>
		</form>			</div>
		</div>
</div>
</div>
<section>
<form enctype="multipart/form-data" method="post" name="form1" target="_self">
  <table width="512" class="table table-hover table-condensed" >
    <tr>
      <td width="27%"><strong>Kode Kelas </strong></td>
      <td width="2%"><b>:</b></td>
      <td width="71%"><input name="a" type="text" id="a" value="<?php echo $a; ?>" size="10" maxlength="10" readonly="readonly" /></td>
    </tr>
    <tr>
      <td><strong>Kompetensi </strong></td>
      <td><b>:</b></td>
      <td><label>
        <select name="b" id="b" class="chzn-select"  data-placeholder="Kompetensi...">
          <option value="<?php echo $b; ?>"><?php echo $b; ?></option>
          <?php $sql0=mysql_query("select * from tb_kompetensikeahlian") or die (mysql_query()); while($ta=mysql_fetch_array($sql0)){?>
          <option value="<?php echo $ta['kompetensi_kode']; ?>"><?php echo $ta['kompetensi_nama']; ?> </option>
          <?php } ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><strong>Kelas</strong></td>
      <td><b>:</b></td>
      <td><select name="c" id="c">
		<option value="<?php echo $c; ?>"><?php echo $c; ?></option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input  type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;"  class="btn btn-primary" /></td>
    </tr>
  </table>
</form>

 