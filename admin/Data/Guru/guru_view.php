<?php
include 'koneksi.php';
error_reporting(0);
if(isset($_POST['cari'])){
$query = "SELECT * FROM tb_guru where guru_kode REGEXP '".$_POST['cari']."' or kompetensi_kode REGEXP '".$_POST['cari']."' or guru_nip REGEXP '".$_POST['cari']."' or guru_nama REGEXP '".$_POST['cari']."' or guru_alamat REGEXP '".$_POST['cari']."' or guru_telpon REGEXP '".$_POST['cari']."'"; 
$result = mysql_query($query);
}else{
$query = "SELECT * FROM tb_guru"; 
$result = mysql_query($query);
}
?>

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=guruview'>Data Guru</a>
		  <div class="nav-collapse">

<a href='?page=guruadd' class="small-box"><button class="btn btn-primary">+ Tambah Guru</button></a>



		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" enctype="multipart/form-data">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
		  <button type="submit" class="btn btn-primary" name="btncari">Cari Data</button>
		</form>		</div>
		</div>
</div>
</div>
<section>
<form method="post">
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
    <td> <b>Delete</b> </td>
         <td> <b>NIP</b> </td>
        <td class='hidden-480'> <b>Nama  </b> </td>
		  <td class='hidden-480'> <b>Kompetensi Kode</b> </td>
		   <td class='hidden-480'> <b> Alamat</b> </td>	
		   <td class='hidden-480'> <b> Telepon </b> </td>	
     </tr>
	 </thead>
<?php
$i = 0;
$count=mysql_num_rows($result);
while ($data = mysql_fetch_array($result)) { 
  ?> 
 
  <tbody><tr>
  
   <td align="center" bgcolor="#FFFFFF">
  <input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $data['guru_kode']; ?>"></td>
   <?php echo "
  
            <td>".$data['guru_nip']."</td>
			<td class='hidden-480'>".$data['guru_nama']."</td>
		<td class='hidden-480'>".$data['kompetensi_kode']."</td>
			<td class='hidden-480'>".$data['guru_alamat']."</td> 
			<td class='hidden-480'>".$data['guru_telpon']."</td>"; 
?>
     <td>
	       
	          
	            <a href="?page=guruedit&Kode=<?php echo $data['guru_kode']; ?>"> Edit Data</a>
	          
	       
		</td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>

<input name="delete" type="submit" id="delete" value="delete" onclick=\"return confirm("yakin ingin menghpusnya? ");\>

<?php
if ($_POST['delete']){
	$jml = count($_POST['checkbox']);
	if($jml > 0){
	for($i=0; $i<$count; $i++){
		$del_id = $_POST['checkbox'][$i];
		$sql = "DELETE FROM tb_guru WHERE guru_kode='$del_id'";
		$result = mysql_query($sql);
	}
	if ($result){
		echo "<meta http-equiv='refresh' content='0; url=menu.php?page=guruview'>";
	}else{
		echo'<span style="color:red">gagal menghapus data </span>';
	}
	}else{ //jika tidak ada yang centang
	echo'<span style="color:red">silakan pilih data yang akan dihapus</span>';
}
}
mysql_close();
?>

