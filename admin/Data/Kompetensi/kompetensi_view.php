<?php $bidangkode=$_GET['kodebidang'];

if($_GET) {
	if(isset($_POST['Simpan'])){
		$pesanError = array();
		
		if (trim($_POST['c'])=="") {
			$pesanError[] = " <b>Nama Kompetensi</b> tidak boleh kosong !";		
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
			# SIMPAN DATA KE DATABASE. 
			// Jika tidak menemukan error, simpan data ke database
			
			$mySql	= "INSERT INTO tb_kompetensikeahlian VALUES ('$a','$b','$c')";
			$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=kompetensiview&kodebidang=$bidangkode'>";
			}
			exit;
		}
	} // Penutup POST
	
	# Variabel Temporary
		$a		= buatKode("tb_kompetensikeahlian", "KK");
	$b		= isset($_POST['b']) ? $_POST['b'] : '';
	$c		= isset($_POST['c']) ? $_POST['c'] : '';
	

} // Penutup GET
?>



<?php


$query = "SELECT * FROM tb_kompetensikeahlian where bidang_kode='$bidangkode'"; 
$result = mysql_query($query);
?>

<div class="well">
<form method="post" enctype="multipart/form-data">
<table width="427" border="0" >
  <tr>
    <td width="199">Bidang</td>
    <td width="10"><strong>:</strong></td>
    <td colspan="2"><input type="hidden" value="<?php echo $a ?>"  name="a" readonly="readonly" />
	<?php $sqld=mysql_query("select * from tb_bidangstudi where bidang_kode='".$_GET['kodebidang']."'") or die (mysql_error()); 
	$hg=mysql_fetch_array($sqld);  ?>
      <input type="text" value="<?php echo $hg['bidang_nama']; ?>"  name="b2" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>Kode Bidang </td>
    <td><strong>:</strong></td>
    <td colspan="2"><input type="text" value="<?php echo $_GET['kodebidang']; ?>"  name="b" readonly="readonly" /></td>
  </tr>
  <tr>
    <td height="40">Nama Kompetensi </td>
    <td><strong>:</strong></td>
    <td width="144"><input  type="text" value="<?php echo $c ?>"   name="c" /> </td>
    <td width="61"><input class="btn btn-primary" name="Simpan" type="submit" id="Simpan" value="Simpan" /></td>
  </tr>
</table></form>

	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">
 <div class="table-header">
		  <a class="brand" href='?page=bidangview'>Data Kompetensi</a>
		  <div class="nav-collapse">

</div>
		</div>
</div>
</div>
<section>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
         <td> <b>Kode</b> </td>
        <td class='hidden-480'> <b>Bidang Kode  </b> </td>
		<td class='hidden-480'> <b>Nama Kompetensi </b> </td>
		 
     </tr>
</thead>
<?php
$i = 0;
while ($data = mysql_fetch_array($result)) { 
  ?> 
 
  <?php echo "<tbody><tr>
  
            <td>".$data['kompetensi_kode']."</td>
			<td class='hidden-480'>".$data['bidang_kode']."</td>
			<td class='hidden-480'>".$data['kompetensi_nama']."</td>
		"; 
?>
     <td>
	        <div class="btn-group">
	          
	            <a href="?page=kompetensiedit&Kode=<?php echo $data['kompetensi_kode']; ?>&kodebidang=<?php echo $data['bidang_kode']; ?>"><button class='btn btn-mini btn-primary'> Edit Data</button></a>
	            <a href="?page=kompetensidelete&Kode=<?php echo $data['kompetensi_kode']; ?>&kodebidang=<?php echo $data['bidang_kode']; ?>" onClick="return confirm('Anda yakin..???');"><button class='btn btn-mini btn-danger'> Hapus Data</button></a>
	        </div><!-- /btn-group -->
	   </td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>
