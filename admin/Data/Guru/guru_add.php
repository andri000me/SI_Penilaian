<?php
//include_once "library/inc.seslogin.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		$pesanError = array();
		
		if (trim($_POST['a'])=="") {
			$pesanError[] = "Data <b>Kode</b> tidak boleh kosong !";		
		}
		if (trim($_POST['b'])=="") {
			$pesanError[] = " <b>Kompetensi</b> tidak boleh kosong !";		
		}
		if (trim($_POST['c'])=="") {
			$pesanError[] = "<b>Nama</b> tidak boleh kosong !";		
		}
		if (trim($_POST['d'])=="") {
			$pesanError[] = "<b>NIP</b> tidak boleh kosong !";		
		}
		if (trim($_POST['e'])=="") {
			$pesanError[] = "<b>Alamat</b> tidak boleh kosong !";		
		}
		if (trim($_POST['f'])=="" ) {
			$pesanError[] = "<b>Telpon</b> tidak boleh kosong!";		
		}
	
		

		
		# Baca Variabel Form
		$a	= $_POST['a'];
		$b	= $_POST['b'];
		$c	= $_POST['c'];
		$d		= $_POST['d'];
		$e	= $_POST['e'];
		$f		= $_POST['f'];
	
	
		
		
		
			

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
		$ni=mysql_query("select * from tb_guru where guru_nip='".$_POST['d']."'") or die(mysql_error());
		$cekl=mysql_num_rows($ni);
		if($cekl>0){
			echo "<script>alert('NISN sudah terdaftar');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=guruadd'>";
			}else{
			
				echo "<img src='load.gif' width='400px' />";
			# SIMPAN DATA KE DATABASE. 
			// Jika tidak menemukan error, simpan data ke database
			
			$mySql	= "INSERT INTO tb_guru VALUES ('$a','$b','$d','$c','$e','$f','$d')";
			$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=guruview'>";
			}
			}
			exit;
		}
	} // Penutup POST
	
	# Variabel Temporary
	$a		= buatKode("tb_guru","GR");
	$b		= isset($_POST['b']) ? $_POST['b'] : '';
	$c		= isset($_POST['c']) ? $_POST['c'] : '';
	$d	= isset($_POST['d']) ? $_POST['d'] : '';
	$e			= isset($_POST['e']) ? $_POST['e'] : '';
	$f 		= isset($_POST['f']) ? $_POST['f'] : '';


} // Penutup GET
?>
<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

  <div class="table-header">
		  <a class="brand" href='?page=guruview'>Data Guru</a>
		  <div class="nav-collapse">

<a href='?page=guruadd' class="small-box"><button class="btn btn-primary">+ Tambah Guru</button></a>



		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" action="?page=gurucari">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
		  <button type="submit" class="btn btn-primary" name="btncari">Cari Data</button>
		</form>		</div>
		</div>
</div>
</div>
<section>
<form enctype="multipart/form-data" method="post" name="form1" target="_self">
  <table width="512" class="table table-hover table-condensed" >
 
    <tr>
      <td width="24%"><strong>Kode</strong></td>
      <td width="2%"><b>:</b></td>
      <td width="74%"><input name="a" type="text" id="a" value="<?php echo $a; ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td><strong>NIP</strong></td>
      <td><b>:</b></td>
      <td><input name="d" type="text" class="angkaSaja" id="d" value="<?php echo $d; ?>" size="60" maxlength="100" /></td>
    </tr>
	<tr>
      <td><b>Nama</b></td>
      <td><b>:</b></td>
      <td><input name="c" class="hurufSaja" type="text" id="c" value="<?php echo $c; ?>" size="60" maxlength="100" />      </tr>
    <tr>
      <td><strong>Kompetensi</strong></td>
      <td><b>:</b></td>
      <td><select name="b" class="chzn-select" data-placeholder="Kompetensi...">
        <option value=<?php echo $b; ?>""><?php echo $b; ?> </option>
        <?php $sqla=mysql_query("select * from tb_kompetensikeahlian") or die (mysql_error()); while($tmpwali=mysql_fetch_array($sqla)){?>
        <option value="<?php echo $tmpwali['kompetensi_kode']; ?>"><?php echo $tmpwali['kompetensi_nama']; ?></option>
        <?php } ?>
      </select></td>
    </tr>
    <tr>
      <td><b>Alamat</b></td>
      <td><b>:</b></td>
      <td><input name="e" type="text" id="e" value="<?php echo $e; ?>" size="60" maxlength="100" /></td>
    </tr>
	<tr>
      <td><b>Telepon</b></td>
      <td><b>:</b></td>
      <td><input name="f" class="angkaSaja" type="text" id="f" value="<?php echo $f; ?>" size="12" maxlength="12" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input  type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;"  class="btn btn-primary" /></td>
    </tr>
  </table>
  
 
</form>

 