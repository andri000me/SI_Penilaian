<?php
		
		$a=$_GET['kd'];
        $detail = mysql_query("SELECT * FROM berita,kategori    
                               WHERE kategori.id_kategori = berita.id_kategori 
                               AND id_berita = '$a'");
        $d = mysql_fetch_array($detail);
        $tgl = tgl_indo($d['tanggal']);
        $baca = $d['dibaca'] + 1;
    ?><?php
	// Apabila detail berita dilihat, maka tambahkan berapa kali dibacanya
	mysql_query("UPDATE berita SET dibaca = '".$baca."' WHERE id_berita = '$a'"); ?><style type="text/css">
<!--
.style1 {font-size: 12px}
-->
</style>

                <div class="wrapper">
<div class="searchCourse searchCourseHome column c-33 clearfix" style="margin-left:590px; margin-top:-90px">
                        <p>Login Siswa </p>
                        <?php if(isset($_SESSION['nisn'])){  ?>
						<label></label>
                            
                        <table width="200" height="113" border="0">
  <tr>
    <td colspan="3"><label></label>
      Selamat Datang </td>
    </tr>
  <tr>
    <td>NISN</td>
    <td>:</td>
    <td><?php echo  $_SESSION['nisn'] ?></td>
  </tr>
  <tr>
    <td>NAMA</td>
    <td>:</td>
    <td><?php echo  $_SESSION['nama'] ?></td>
  </tr>
  <tr>
  <td height="40" colspan="3"><a target="_blank" href="?page=Nilai&nisn=<?php echo $_SESSION['nisn'] ?>" class="submit" style="padding:5px;">Nilai</a>
	<a target="_blank" href="?page=gantipas&nisn=<?php echo $_SESSION['nisn'] ?>" class="submit" style="padding:5px;">Ubah Password</a>
  
   <a href="logout.php" class="submit" style="padding:5px;">Logout</a></td>
  </tr>
</table>

						
						<?php
						}else{ ?>
                         <form action="login-admin.php" method="post">
                            <input type="text" name="user" placeholder="NIP/NISN..." >
							<input type="password" name="pass" placeholder="Password..." >
                            <input class="submit" type="submit" value="Login"/>
                        </form> <?php } ?>
                    </div>

                    <div class="clear"></div>

                    <div class="clear"></div>

                    <div class="clear"></div>
					<!------------BERITA--------------------------------------------------->
					
                    <div class="blog column c-67 clearfix" style="margin-top:-30px">
            
                        <div class="box" >
						<div class="welcome">
                            <h4>Ubah Password</h4>
                            <div class="boxInfo examInfo">
						
						<?php 
if(isset($_POST['btnSave'])){
if($_POST['c']<>"" and $_POST['d']<>""){

	$cek=mysql_query("select * from tb_siswa where siswa_nisn='".$_POST['a']."' and password='".$_POST['c']."'")or die(mysql_error());
$ce=mysql_num_rows($cek);
if($ce>0){
$sdl="update tb_siswa set password='".$_POST['d']."' where siswa_nisn='".$_POST['a']."'  ";
$fd=mysql_query($sdl);
echo "<script>alert('Password Sukses Diubah, Silahkan Login ulang');</script>";
echo "<meta http-equiv='refresh' content='0; url=logout.php'>";
}else{
echo "<script>alert('Masukkan password lama dengan Benar');</script>";
}

}else{
echo "<script>alert('Masukkan dengan lengkap');</script>";

}
}

?>
						
							<?php
if(isset($_SESSION['nisn'])){
$sql=mysql_query("select * from tb_siswa  where siswa_nisn='".$_SESSION['nisn']."'")or die(mysql_error());
$data=mysql_fetch_array($sql);



 ?>
 
                               <form enctype="multipart/form-data" method="post" name="form1" target="_self">
  <table width="512" class="table  " >
   <input name="a" type="hidden" id="d" style="border:solid 1px #666666; color:#000000;" value="<?php echo $data['siswa_nisn'] ?>" size="60" maxlength="100" readonly="readonly"  />
 
    <input name="b"  type="hidden" style="border:solid 1px #666666;" id="c" value="<?php echo $data['siswa_nama'] ?>" size="60" maxlength="100" readonly="readonly" />     
    <tr>
      <td><strong>Password Lama </strong></td>
      <td><b>:</b></td>
      <td><input name="c" type="password" id="e" value="" style="border:solid 1px #666666" size="60" maxlength="100" /></td>
    </tr>
    <tr>
      <td><b>Password Baru </b></td>
      <td><b>:</b></td>
      <td><input name="d" type="password" id="e" value="" style="border:solid 1px #666666"size="60" maxlength="100" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input  type="submit" name="btnSave" class="submit" value=" SIMPAN " style="cursor:pointer;"  class="btn btn-primary" /></td>
    </tr>
  </table>
</form><?php } ?>
                            </div>
                        </div>
</div>
<!---------------------------------------------------------------------------------------------------------------------------------->
<!--------------------------------->

<!-------------------------------------------------------------------------------------------------------------------------------->
                  </div>
				  <!--------------------------------------------------------------------->
				  
				  <!-------------------------------------------------Count---------------------------------------------->
  
  
  
  <!---------------------------------------------------------------------------------------------------------------------->
                </div>


            </div>
        </div>
