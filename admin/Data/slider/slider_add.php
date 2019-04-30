<?php
//include_once "library/inc.seslogin.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		$pesanError = array();
		if (trim($_FILES['gambar']['name'])=="") {
			$pesanError[] = "<b>Slider</b> tidak boleh kosong !";		
		}

		# Baca Variabel Form
		$slider1= $_FILES['gambar']['name'];
		
		# Validasi Nama, jika sudah ada akan ditolak
		$cekSql="SELECT * FROM slider WHERE slider1='$slider1'";
		$cekQry=mysql_query($cekSql, $koneksidb) or die ("Eror Query".mysql_error()); 
		if(mysql_num_rows($cekQry)>=1){
			$pesanError[] = "Maaf, Nama <b> $slider1 </b> sudah ada, ganti dengan yang lain";
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
			if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
			move_uploaded_file ($_FILES['gambar']['tmp_name'], "images/".$slider1);
		}
		
			$mySql	= "INSERT INTO slider(slider1) VALUES ('$slider1')";
			$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=sliderview'>";
			}
			exit;
		}
	} // Penutup POST
	
	

} // Penutup GET
?>
<form enctype="multipart/form-data" method="post" name="form1" target="_self">
  <table width="637" class="table table-hover table-condensed" >
    <tr>
	
	
	
	
    </tr>
    <tr>
      <td><strong>Slider</strong></td>
      <td width="2%"><b>:</b></td>
      <td width="74%"><p>
          <input  name="gambar"multiple="" type="file" id="id-input-file-3" />
	 
      750x300 pixel </p>
      </td>
    </tr>
   
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;"  class="btn btn-primary" /></td>
	</tr>
  </table>
  
 
</form>
