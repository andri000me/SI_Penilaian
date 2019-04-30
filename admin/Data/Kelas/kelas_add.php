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
			# SIMPAN DATA KE DATABASE. 
			// Jika tidak menemukan error, simpan data ke database
			
			$mySql	= "INSERT INTO tb_kelas VALUES ('$a','$b','$c','$d')";
			$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=kelasview'>";
			}
			exit;
		}
	} // Penutup POST
	
	# Variabel Temporary
		$a		= buatKode("tb_kelas", "K");
	$b		= isset($_POST['b']) ? $_POST['b'] : '';
	$c		= isset($_POST['c']) ? $_POST['c'] : '';
	

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
      <td><strong>Kompetensi  </strong></td>
      <td><b>:</b></td>
      <td><label>
        <select name="b" id="b" class="chzn-select"  data-placeholder="Kompetensi...">
		<option value="<?php echo $b; ?>"><?php echo $b; ?></option><?php $sql0=mysql_query("select * from tb_kompetensikeahlian") or die (mysql_query()); while($ta=mysql_fetch_array($sql0)){?>
		<option value="<?php echo $ta['kompetensi_kode']; ?>">  <?php echo $ta['kompetensi_nama']; ?> </option> <?php } ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td><strong>Kelas</strong></td>
      <td><b>:</b></td>
      <td>
        <select name="c" id="c">
		<option value="<?php echo $c; ?>"><?php echo $c; ?></option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input  type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;"  class="btn btn-primary" /></td>
    </tr>
  </table>
  
 
</form>

 