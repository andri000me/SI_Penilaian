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
		$g		= $_POST['pass'];

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
			$mySql	= "UPDATE tb_guru SET guru_kode='$a',kompetensi_kode='$b', guru_nip='$d', guru_nama='$c', guru_alamat='$e', guru_telpon='$f',password='$g' WHERE guru_kode='".$_GET['Kode']."'";
			$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=guruview'>";
			}
			exit;
		}	
	} // Penutup POST
		
	# TAMPILKAN 
	$Kode	= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['a']; 
	$sqlShow= "SELECT * FROM tb_guru WHERE guru_kode='$Kode'";
	$qryShow= mysql_query($sqlShow)  or die ("Query salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow); 

	# MASUKKAN DATA KE VARIABEL
	$a	=  isset($dataShow['guru_kode']) ?  $dataShow['guru_kode'] : $_POST['a'];
	$b	= isset($dataShow['kompetensi_kode']) ?  $dataShow['kompetensi_kode'] : $_POST['b'];
	$d	= isset($dataShow['guru_nip']) ?  $dataShow['guru_nip'] : $_POST['c'];
	$c	= isset($dataShow['guru_nama']) ?  $dataShow['guru_nama'] : $_POST['d'];
	$e	= isset($dataShow['guru_alamat']) ?  $dataShow['guru_alamat'] : $_POST['e'];
	$f	= isset($dataShow['guru_telpon']) ?  $dataShow['guru_telpon'] : $_POST['f'];
	$g	= isset($dataShow['password']) ?  $dataShow['password'] : $_POST['pass'];

	
	
	
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
		</form>	</div>
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
      <td><input name="d" class="angkaSaja" type="text" id="d" value="<?php echo $d; ?>" size="60" maxlength="100" /></td>
    </tr>
    <tr>
      <td><b>Nama</b></td>
      <td><b>:</b></td>
      <td><input name="c" class="hurufSaja" type="text" id="c" value="<?php echo $c; ?>" size="60" maxlength="100" />      </td>
    </tr>
    <tr>
      <td><strong>Kompetensi</strong></td>
      <td><b>:</b></td>
      <td><select name="b" class="chzn-select" data-placeholder="Kompetensi...">
          <option value="<?php echo $b; ?>&quot;&quot;"><?php echo $b; ?> </option>
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
      <td><strong>Password</strong></td>
      <td><b>:</b></td>
      <td>
        <input type="text" name="pass" value="<?php echo $g; ?>" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input  type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;"  class="btn btn-primary" /></td>
    </tr>
  </table>
</form>

 