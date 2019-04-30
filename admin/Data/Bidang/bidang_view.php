<?php
include 'koneksi.php';
error_reporting(0);
if(isset($_POST['cari'])){
	
$query = "SELECT * FROM tb_bidangstudi where bidang_kode REGEXP '".$_POST['cari']."' or bidang_nama REGEXP '".$_POST['cari']."'"; 
$result = mysql_query($query);

}else{

$query = "SELECT * FROM tb_bidangstudi"; 
$result = mysql_query($query);
}
?>

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=bidangview'>Data Bidang</a>
		  <div class="nav-collapse">

<a href='?page=bidangadd' class="small-box"><button class="btn btn-primary">+ Tambah Bidang</button></a>



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
         <td> <b>Kode</b> </td>
        <td class='hidden-480'> <b>Nama Bidang  </b> </td>
		 
     </tr>
	 </thead>
<?php
$i = 0;
$count=mysql_num_rows($result);
while ($data = mysql_fetch_array($result)) { 
  ?> 
 
  <tbody><tr>
  <td align="center" bgcolor="#FFFFFF">
  <input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $data['bidang_kode']; ?>"></td>
   <?php echo "
            <td>".$data['bidang_kode']."</td>
			<td class='hidden-480'>".$data['bidang_nama']."</td>
		"; 
		$ds=mysql_query("select count(*) as cou from tb_kompetensikeahlian where bidang_kode='".$data['bidang_kode']."' ");
$as=mysql_fetch_array($ds);

?>
<td width="100px"><a class="label btn-success label-success arrowed label-large arrowed-righ" href="?page=kompetensiview&kodebidang=<?php echo $data['bidang_kode']; ?>">Kompetensi <font color="#000000"> [<?php
	 echo $as['cou']; ?>]</font></a></td>
     <td>
	     
	          
	            <a href="?page=bidangedit&Kode=<?php echo $data['bidang_kode']; ?>"> Edit Data</a>
	          
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
		$sql = "DELETE FROM tb_bidangstudi WHERE bidang_kode='$del_id'";
		$result = mysql_query($sql);
	}
	if ($result){
		echo "<meta http-equiv='refresh' content='0; url=menu.php?page=bidangview'>";
	}else{
		echo'<span style="color:red">gagal menghapus data </span>';
	}
	}else{ //jika tidak ada yang centang
	echo'<span style="color:red">silakan pilih data yang akan dihapus</span>';
}
}
mysql_close();
?>
