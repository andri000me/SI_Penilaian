<?php
//include_once "library/inc.seslogin.php";
$bidangkode=$_GET['kodebidang'];
$kode=$_GET['Kode'];
if($_GET) {
	if(isset($_POST['Simpan'])){
		$pesanError = array();
	
		if (trim($_POST['c'])=="") {
			$pesanError[] = " <b>Kompetensi</b> tidak boleh kosong !";		
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
		echo "<img src='load.gif' width='400px' />";
			# SIMPAN PERUBAHAN DATA, Jika jumlah error pesanError tidak ada, simpan datanya
			$mySql	= "UPDATE tb_kompetensikeahlian SET kompetensi_kode='$a',bidang_kode='$b',kompetensi_nama='$c' WHERE kompetensi_kode='".$_POST['a']."'";
			$myQry	= mysql_query($mySql) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=kompetensiview&kodebidang=$bidangkode'>";
			}
			exit;
		}	
	} // Penutup POST
		
	# TAMPILKAN 
	$Kode	= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['a']; 
	$sqlShow= "SELECT * FROM tb_kompetensikeahlian WHERE kompetensi_kode='$kode'";
	$qryShow= mysql_query($sqlShow)  or die ("Query salah : ".mysql_error());
	$dataShow = mysql_fetch_array($qryShow); 

	# MASUKKAN DATA KE VARIABEL
	$a	=  isset($dataShow['kompetensi_kode']) ?  $dataShow['kompetensi_kode'] : $_POST['a'];
	$b	= isset($dataShow['bidang_kode']) ?  $dataShow['bidang_kode'] : $_POST['b'];
	$c	= isset($dataShow['kompetensi_nama']) ?  $dataShow['kompetensi_nama'] : $_POST['c'];
	
	
	
} // Penutup GET
?>
<?php

include 'db/koneksi.php';
$query = "SELECT * FROM tb_kompetensikeahlian where bidang_kode='$bidangkode'"; 
$result = mysql_query($query);
?>

<div class="well">
<form method="post" enctype="multipart/form-data">
<table width="427" border="0" >
  <tr>
    <td width="199">&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td colspan="2"><input type="hidden" value="<?php echo $a ?>"  name="a" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>Kode Bidang </td>
    <td><strong>:</strong></td>
    <td colspan="2"><input type="text" value="<?php echo $_GET['kodebidang']; ?>"  name="b" readonly="readonly" /></td>
  </tr>
  <tr>
    <td height="40">Nama Kompetensi </td>
    <td><strong>:</strong></td>
    <td width="144"><input type="text" value="<?php echo $c ?>"    name="c" /> </td>
    <td width="61"><input class="btn btn-primary" name="Simpan" type="submit" id="Simpan" value="Simpan" /></td>
  </tr>
</table></form>

	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">
 <div class="table-header">
		  <a class="brand" href='?page=kompetensiview&kode=<?php echo $kode ?>'>Data Kompetensi</a>
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
