<?php
//include_once "library/inc.seslogin.php";
$kelas=$_GET['kelas'];
$kompetensi=$_GET['kompetensi'];
if($_GET) {
	if(isset($_POST['btnSave'])){
		$pesanError = array();
		if (trim($_POST['a'])=="") {
			$pesanError[] = "Data <b>Kode</b> tidak boleh kosong !";		
		}
		if (trim($_POST['b'])=="") {
			$pesanError[] = " <b>Guru Kode</b> tidak boleh kosong !";		
		}
		
		if (trim($_POST['d'])=="") {
			$pesanError[] = "<b>SK Nama</b> tidak boleh kosong !";		
		}
		
		if (trim($_POST['f'])=="") {
			$pesanError[] = "<b>KKM</b> tidak boleh kosong !";		
		}
		
	
		
		
		
		# Baca Variabel Form
		$a	= $_POST['a'];
		$b	= $_POST['b'];
		$c	= $_GET['kompetensi'];
		$d		= $_POST['d'];
		$e	= $_GET['kelas'];
		$f	= $_POST['f'];
		
	
	
		
		
		
			

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
			
			$mySql	= "INSERT INTO tb_standarkompetensi VALUES ('$a','$b','$c','$d','$e','$f')";
			$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=skompetensiview&kelas=$kelas&kompetensi=$kompetensi'>";
			}
			exit;
		}
	} // Penutup POST
	
	# Variabel Temporary
	$a		= buatKode("tb_standarkompetensi","SK");
	$b		= isset($_POST['b']) ? $_POST['b'] : '';
	
	$d	= isset($_POST['d']) ? $_POST['d'] : '';

	$f			= isset($_POST['f']) ? $_POST['f'] : '';
	


} // Penutup GET
?>
<div class="well">





	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

   <div class="table-header">
		  <a class="brand" href='?page=skompetensiview&kompetensi=<?php echo $_GET['kompetensi'] ?>&kelas=<?php echo $_GET['kelas'] ?>'>Data Standar Kompetensi</a>
		  <div class="nav-collapse">

<a href='?page=skompetensiadd&kelas=<?php echo $kelas ?>&kompetensi=<?php echo $kompetensi ?>' class="small-box"><button class="btn btn-primary">+ Tambah Setandar Kompetensi</button></a>



				</div>
		</div>
</div>
</div>
<section>
<form enctype="multipart/form-data" method="post" name="form1" target="_self">
  <table width="512" class="table table-hover table-condensed" >
 
    <tr>
      <td width="24%"><strong>SK Kode</strong></td>
      <td width="2%"><b>:</b></td>
      <td width="74%"><input name="a" type="text" id="a" value="<?php echo $a; ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td><strong>Guru Kode </strong></td>
      <td><b>:</b></td>
      <td><select name="b" id="b">
        <option value="<?php echo $b; ?>" selected="selected"><?php echo $b; ?> </option>
        <?php $sqla1=mysql_query("select * from tb_guru where kompetensi_kode='$kompetensi'") or die (mysql_error()); while($tmpwali1=mysql_fetch_array($sqla1)){?>
        <option value="<?php echo $tmpwali1['guru_kode']; ?>"><?php echo $tmpwali1['guru_nama']; ?></option>
        <?php } ?>
      </select></td>
    </tr>
    <tr>
      <td><strong>SK Nama </strong></td>
      <td><b>:</b></td>
      <td><input name="d" class="hurufSaja" type="text" id="d" value="<?php echo $d; ?>" size="60" maxlength="100" /></td>
    </tr>
    <tr>
      <td><strong>KKM</strong></td>
      <td><b>:</b></td>
      <td><input name="f" class="angkaSaja" type="text" id="f" value="<?php echo $f; ?>" size="2" maxlength="2" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input  type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;"  class="btn btn-primary" /></td>
    </tr>
  </table>
  
 
</form>

<?php
$kelas=$_GET['kelas'];
$kompetensi=$_GET['kompetensi'];
include 'db/koneksi.php';
$query = "SELECT * FROM tb_standarkompetensi where kelas='$kelas' and kompetensi_kode='$kompetensi'"; $result = mysql_query($query);
?>

 <table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
         <td> <b>Kode</b> </td>
        <td class='hidden-480'> <b>Kode Guru  </b> </td>
		  <td class='hidden-480'> <b>Kompetensi Kode</b> </td>
		   <td class='hidden-480'> <b> SK Nama</b> </td>	
		   <td class='hidden-480'> <b> Kode Kelas </b> </td>	
     </tr>
	 </thead>
<?php
$i = 0;
while ($data = mysql_fetch_array($result)) { 
  ?> 
 
  <?php echo "<tbody><tr>
  
            <td>".$data['sk_kode']."</td>
			<td class='hidden-480'>".$data['guru_kode']."</td>
		<td class='hidden-480'>".$data['kompetensi_kode']."</td>
			<td class='hidden-480'>".$data['sk_nama']."</td> 
			<td class='hidden-480'>".$data['kelas']."</td>"; 
?>
     <td>
	        <div class="btn-group">
	          
	            <a href="?page=skompetensiedit&Kode=<?php echo $data['sk_kode']; ?>&kelas=<?php echo $kelas ?>&kompetensi=<?php echo $kompetensi ?>"><button class='btn btn-mini btn-primary'> Edit Data</button></a>
	            <a href="?page=skompetensidelete&Kode=<?php echo $data['sk_kode']; ?>&kelas=<?php echo $kelas ?>&kompetensi=<?php echo $kompetensi ?>" onClick="return confirm('Anda yakin..???');"><button class='btn btn-mini btn-danger'> Hapus Data</button></a>
	        </div><!-- /btn-group -->
		</td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>