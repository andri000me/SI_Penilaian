<?php
include 'koneksi.php';
error_reporting(0);
if(isset($_POST['cari'])){

$query = "SELECT * FROM tb_kelas where nama_kelas REGEXP '".$_POST['cari']."' order by nama_kelas ASC"; 
$result = mysql_query($query);
}else{

$query = "SELECT * FROM tb_kelas order by nama_kelas ASC"; 
$result = mysql_query($query);
}
?>

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=kelasview'>Data Kelas</a>
		  <div class="nav-collapse">

<a href='?page=kelasadd' class="small-box"><button class="btn btn-primary">+ Tambah Kelas</button></a>



		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" enctype="multipart/form-data"">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
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
         <td> <b>Kode</b> </td>
        <td class='hidden-480'> <b>Kompetensi Kode </b> </td>
		<td class='hidden-480'> <b>Kelas </b> </td>
		 
     </tr>
	 </thead>
<?php
$i = 0;
$count=mysql_num_rows($result);
while ($data = mysql_fetch_array($result)) { 
  ?> 
 
  <tbody><tr>
  <td align="center" bgcolor="#FFFFFF">
  <input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $data['kode_kelas']; ?>"></td>
  
  <?php echo "
            <td>".$data['kode_kelas']."</td>
			<td class='hidden-480'>".$data['kompetensi_kode']."</td>
			<td class='hidden-480'>".$data['nama_kelas']."</td>
		"; 
?>
     <td>
	       
	            <a href="?page=kelasedit&Kode=<?php echo $data['kode_kelas']; ?>">Edit Data</a>
                
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
		$sql = "DELETE FROM tb_kelas WHERE kode_kelas='$del_id'";
		$result = mysql_query($sql);
	}
	if ($result){
		echo "<meta http-equiv='refresh' content='0; url=menu.php?page=kelasview'>";
	}else{
		echo'<span style="color:red">gagal menghapus data </span>';
	}
	}else{ //jika tidak ada yang centang
	echo'<span style="color:red">silakan pilih data yang akan dihapus</span>';
}
}
mysql_close();
?>
