<?php 
if(isset($_POST['btnSave'])){

	$cek=mysql_query("select * from tb_guru where guru_nip='".$_POST['a']."' and password='".$_POST['c']."'")or die(mysql_error());
$ce=mysql_num_rows($cek);
if($ce>0){
$sdl="update tb_guru set password='".$_POST['d']."' where guru_nip='".$_POST['a']."'  ";
$fd=mysql_query($sdl);
echo "<script>alert('Password Sukses Diubah, Silahkan Login ulang');</script>";
echo "<meta http-equiv='refresh' content='0; url=logout.php'>";
}else{
echo "<script>alert('Masukkan password lama dengan Benar');</script>";
}
}

?>
<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		 Ubah Password
		  <div class="nav-collapse">



			</div>
		</div>
</div>
</div>
<section>
<?php
if(isset($_SESSION['Kode_Pengguna'])){
$sql=mysql_query("select * from tb_guru where guru_kode='".$_SESSION['Kode_Pengguna']."'")or die(mysql_error());
$data=mysql_fetch_array($sql);



 ?>
<form enctype="multipart/form-data" method="post" name="form1" target="_self">
  <table width="512" class="table table-hover table-condensed" >
    <tr>
      <td width="24%"><strong>NIP</strong></td>
      <td width="2%"><b>:</b></td>
      <td width="74%"><input name="a" type="text" id="d" value="<?php echo $data['guru_nip'] ?>" size="60" maxlength="100" readonly="readonly" /></td>
    </tr>
    <tr>
      <td><b>Nama</b></td>
      <td><b>:</b></td>
      <td><input name="b" class="hurufSaja" type="text" id="c" value="<?php echo $data['guru_nama'] ?>" size="60" maxlength="100" readonly="readonly" />      </td>
    </tr>
    <tr>
      <td><strong>Password Lama </strong></td>
      <td><b>:</b></td>
      <td><input name="c" type="text" id="e" value="" size="60" maxlength="100" /></td>
    </tr>
    <tr>
      <td><b>Password Baru </b></td>
      <td><b>:</b></td>
      <td><input name="d" type="text" id="e" value="" size="60" maxlength="100" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input  type="submit" name="btnSave" value=" SIMPAN " style="cursor:pointer;"  class="btn btn-primary" /></td>
    </tr>
  </table>
</form>
<?php } ?>
 