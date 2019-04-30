<?php
//include_once "library/inc.seslogin.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		$pesanError = array();
		if (trim($_POST['a'])=="") {
			$pesanError[] = "<b>Kode</b> tidak boleh kosong !";		
		}
		if (trim($_POST['b'])=="") {
			$pesanError[] = " <b>Nama Bidang</b> tidak boleh kosong !";		
		}
		
		
		
		
		
		# Baca Variabel Form
		$a	= $_POST['a'];
		$b	= $_POST['b'];
		
	
		
		
		
			

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
			
			$mySql	= "INSERT INTO tb_bidangstudi VALUES ('$a','$b')";
			$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=bidangview'>";
			}
			exit;
		}
	} // Penutup POST
	
	# Variabel Temporary
		$a		= buatKode("tb_bidangstudi", "BS");
	$b		= isset($_POST['b']) ? $_POST['b'] : '';
	

} // Penutup GET
?>
<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

  <div class="table-header">
		  <a class="brand" href='?page=bidangview'>Data Bidang</a>
		  <div class="nav-collapse">

<a href='?page=bidangadd' class="small-box"><button class="btn btn-primary">+ Tambah Bidang</button></a>



		<form id="form"  class="navbar-form pull-right" method="post" accept-charset="utf-8" action="?page=bidangcari">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
		  <button type="submit" class="btn btn-primary" name="btncari">Cari Data</button>
		</form>			</div>
		</div>
</div>
</div>
<section>
<form enctype="multipart/form-data" method="post" name="form1" target="_self">
  <table width="512" class="table table-hover table-condensed" >
 
    <tr>
      <td width="24%"><strong>Kode</strong></td>
      <td width="2%"><b>:</b></td>
      <td width="74%"><input name="a" type="text" id="a" value="<?php echo $a; ?>" size="10" readonly="readonly" /></td>
    </tr>
    <tr>
      <td><strong>Nama Bidang </strong></td>
      <td><b>:</b></td>
      <td><input name="b" type="text" id="d2" value="<?php echo $b; ?>" size="60" maxlength="100" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input  type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;"  class="btn btn-primary" /></td>
    </tr>
  </table>
  
 
</form>

 