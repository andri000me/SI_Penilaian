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
			# SIMPAN PERUBAHAN DATA, Jika jumlah error pesanError tidak ada, simpan datanya
			$mySql	= "UPDATE tb_bidangstudi SET bidang_kode='$a',bidang_nama='$b' WHERE bidang_kode='".$_POST['a']."'";
			$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=bidangview'>";
			}
			exit;
		}	
	} // Penutup POST
		
	# TAMPILKAN 
	$Kode	= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['a']; 
	$sqlShow= "SELECT * FROM tb_bidangstudi WHERE bidang_kode='$Kode'";
	$qryShow= mysql_query($sqlShow)  or die ("Query salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow); 

	# MASUKKAN DATA KE VARIABEL
	$a	=  isset($dataShow['bidang_kode']) ?  $dataShow['bidang_kode'] : $_POST['a'];
	$b	= isset($dataShow['bidang_nama']) ?  $dataShow['bidang_nama'] : $_POST['b'];
	
	
	
} // Penutup GET
?>
<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

  <div class="table-header">
		  <a class="brand" href='?page=bidangview'>Data Bidang</a>
		  <div class="nav-collapse">

<a href='?page=bidangadd' class="small-box"><button class="btn btn-primary">+ Tambah Bidang</button></a>



		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" action="?page=bidangcari">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
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

 