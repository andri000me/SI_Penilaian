<?php
//include_once "library/inc.seslogin.php";

if($_GET) {

	if(empty($_GET['Kode'])){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
	$kd=$_GET['Kode'];
$kdber=$_GET['Berita'];
$aktif=$_GET['Aktif'];
	echo "<img src='load.gif' width='400px' />";
		$mySql = "DELETE FROM komentar WHERE id_berita='$kdber' and id_komentar='$kd' and aktif='$aktif'";
		$myQry = mysql_query($mySql) or die ("Eror hapus data".mysql_error());
		if($myQry){
			echo "<meta http-equiv='refresh' content='0; url=?page=pesanview'>";
		}
	}
}
?>