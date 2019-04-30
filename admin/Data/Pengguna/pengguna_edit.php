<?php
//include_once "library/inc.seslogin.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		$pesanError = array();
		if (trim($_POST['txtNamaPng'])=="") {
			$pesanError[] = "Data <b>Nama Pengguna</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtPassPng'])=="") {
			$pesanError[] = "Data <b>Nama Pengguna</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtUmurPng'])=="" ) {
			$pesanError[] = "Data <b>Umur</b> tidak boleh kosong, isi dengan angka !";		
		}
		if (trim($_POST['txtAlamatPng'])=="") {
			$pesanError[] = "Data <b>Alamat</b> tidak boleh kosong !";		
		}
		if (trim($_POST['txtNohpPng'])=="") {
			$pesanError[] = "Data <b>No Hp</b> tidak boleh kosong, isi dengan angka !";		
		}
		
		# Baca Variabel Form
		$txtNamaPng= $_POST['txtNamaPng'];
		$txtPassPng= $_POST['txtPassPng'];
		$txtUmurPng= $_POST['txtUmurPng'];
		$txtAlamatPng= $_POST['txtAlamatPng'];
		$txtNohpPng= $_POST['txtNohpPng'];
		
	

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
			$mySql	= "UPDATE tb_pengguna SET Nama_Pengguna='$txtNamaPng', Password='$txtPassPng', Umur_Pengguna='$txtUmurPng', Alamat_Pengguna='$txtAlamatPng', No_Hp='$txtNohpPng'  WHERE Kode_Pengguna='".$_POST['txtKode']."'";
			$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=penggunaview'>";
			}
			exit;
		}	
	} // Penutup POST
		
	# TAMPILKAN 
	$Kode	= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 
	$sqlShow= "SELECT * FROM tb_pengguna WHERE Kode_Pengguna='$Kode'";
	$qryShow= mysql_query($sqlShow, $koneksidb)  or die ("Query salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow); 

	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['Kode_Pengguna'];
	$dataNama	= isset($dataShow['Nama_Pengguna']) ?  $dataShow['Nama_Pengguna'] : $_POST['txtNamaPng'];
	$dataLama	= $dataShow['Nama_Pengguna'];
	$dataPass	= $dataShow['Password'];
	$dataUmur = isset($dataShow['Umur_Pengguna']) ?  $dataShow['Umur_Pengguna'] : $_POST['txtUmurPng'];
	$dataAlamat = isset($dataShow['Alamat_Pengguna']) ?  $dataShow['Alamat_Pengguna'] : $_POST['txtAlamatPng'];
	$dataHp= isset($dataShow['No_Hp']) ?  $dataShow['No_Hp'] : $_POST['txtNohpPng'];	
} // Penutup GET
?>
<div class="well">
<div class="navbar navbar-inverse">
	 <div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=penggunaview'>Pengguna</a>
		  <div class="nav-collapse">
			
			  <a href='?page=penggunaadd' class="small-box"><button class="btn btn-primary">+ Tambah Pengguna</button></a>
			
			
		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" action="?page=penggunacari">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
		  <button type="submit" class="btn btn-primary" name="btncari">Cari Data</button>
		</form>		
		</div></div>
</div>
</div>
<section>
<form action="?page=penggunaedit" method="post" name="form1" target="_self">
  <table class="table table-hover table-condensed" width="650" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td width="23%"><strong>Kode Pengguna</strong></td>
      <td width="2%"><strong>:</strong></td>
      <td width="75%"><input  type="text" name="textfield" value="<?php echo $dataKode; ?>" size="10" maxlength="4" readonly="readonly"/>
      <input name="txtKode" type="hidden" value="<?php echo $dataKode; ?>" /></td>
    </tr>
    <tr>
      <td><strong>Nama Pengguna </strong></td>
      <td><strong>:</strong></td>
      <td><input  type="text" name="txtNamaPng" value="<?php echo $dataNama; ?>" size="70" maxlength="100" />
      <input name="txtLama" type="hidden" value="<?php echo $dataLama; ?>" /></td>
    </tr>
	<tr>
      <td><strong>Password</strong></td>
      <td><strong>:</strong></td>
      <td><input  type="Password" name="txtPassPng" value="<?php echo $dataPass; ?>" size="70" maxlength="100" />      </td>
    </tr>
    <tr>
      <td><strong>Umur Pengguna </strong></td>
      <td><strong>:</strong></td>
      <td><input  type="text" name="txtUmurPng" value="<?php echo $dataUmur; ?>" size="70" maxlength="200" /></td>
    </tr>
    
	<tr>
      <td><strong>Alamat Pengguna</strong></td>
      <td><strong>:</strong></td>
      <td><input  type="text" name="txtAlamatPng" value="<?php echo $dataAlamat; ?>" size="70" maxlength="200" /></td>
    </tr>
    <tr>
      <td><strong>No Hp</strong></td>
      <td><strong>:</strong></td>
      <td><input  type="text" name="txtNohpPng" value="<?php echo $dataHp; ?>" size="20" maxlength="20" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer; "  class="btn btn-primary"/></td>
    </tr>
  </table>
</form>
</div>