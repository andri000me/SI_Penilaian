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
		if (trim($_POST['txtNohpPng'])=="" ) {
			$pesanError[] = "Data <b>No Hp</b> tidak boleh kosong, isi dengan angka !";		
		}
		
		
		# Baca Variabel Form
		$txtNamaPng= $_POST['txtNamaPng'];
		$txtPassPng= $_POST['txtPassPng'];
		$txtUmurPng= $_POST['txtUmurPng'];
		$txtAlamatPng= $_POST['txtAlamatPng'];
		$txtNohpPng= $_POST['txtNohpPng'];

		
		# Validasi Nama, jika sudah ada akan ditolak
		$cekSql="SELECT * FROM tb_pengguna WHERE Nama_Pengguna='$txtNamaPng'";
		$cekQry=mysql_query($cekSql, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($cekQry)>=1){
			$pesanError[] = "Maaf, Nama <b> $txtNamaPng </b> sudah ada, ganti dengan yang lain";
		}		

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
			$kodeBaru	= buatKode("tb_pengguna", "U");
			$mySql	= "INSERT INTO tb_pengguna (Kode_Pengguna, Nama_Pengguna, Password, Umur_Pengguna, Alamat_Pengguna, No_Hp) VALUES ('$kodeBaru','$txtNamaPng','$txtPassPng','$txtUmurPng','$txtAlamatPng','$txtNohpPng')";
			$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=penggunaview'>";
			}
			exit;
		}
	} // Penutup POST
	
	# Variabel Temporary
	$dataKodePng	= buatKode("tb_pengguna", "U");
	$dataNamaPng	= isset($_POST['txtNamaPng']) ? $_POST['txtNamaPng'] : '';
	$dataPassPng	= isset($_POST['txtPassPng']) ? $_POST['txtPassPng'] : '';
	$dataUmurPng	= isset($_POST['txtUmurPng']) ? $_POST['txtUmurPng'] : '';
	$dataAlamatPng= isset($_POST['txtAlamatPng']) ? $_POST['txtAlamatPng'] : '';
	$dataHpPng = isset($_POST['txtNohpPng']) ? $_POST['txtNohpPng'] : '';
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
<form action="?page=penggunaadd" method="post" name="form1" target="_self">
  <table class="table table-hover table-condensed" >
   
    <tr>
      <td width="24%"><b>Kode Pengguna</b></td>
      <td width="2%"><b>:</b></td>
      <td width="74%"><input type="text" name="textfield" value="<?php echo $dataKodePng; ?>" size="10" maxlength="4" readonly="readonly"/></td>
    </tr>
    <tr>
      <td><b>Nama Pengguna </b></td>
      <td><b>:</b></td>
      <td><input type="text" name="txtNamaPng" value="<?php echo $dataNamaPng; ?>" size="60" maxlength="100" /></td>
    </tr>
	<tr>
      <td><b>Password</b></td>
      <td><b>:</b></td>
      <td><input type="Password" name="txtPassPng" value="<?php echo $dataPassPng; ?>" size="60" maxlength="100" /></td>
    </tr>
    <tr>
      <td><b>Umur Pengguna</b></td>
      <td><b>:</b></td>
      <td><input type="text" name="txtUmurPng" value="<?php echo $dataUmurPng; ?>" size="60" maxlength="100" /></td>
    </tr>
    <tr>
      <td><b>Alamat Pengguna</b></td>
      <td><b>:</b></td>
      <td><input type="text" name="txtAlamatPng" value="<?php echo $dataAlamatPng; ?>" size="60" maxlength="100" /></td>
    </tr>
	<tr>
      <td><b>No Hp </b></td>
      <td><b>:</b></td>
      <td><input type="text" name="txtNohpPng" value="<?php echo $dataHpPng; ?>" size="60" maxlength="100" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input  type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;"  class="btn btn-primary" /></td>
    </tr>
  </table>
  
 
</form>
</div>
 