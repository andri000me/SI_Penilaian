<?php
//include_once "library/inc.seslogin.php";

if($_GET) {
	if(empty($_GET['Kode'])){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
	echo "<img src='load.gif' width='400px' />";
		$mySql = "DELETE FROM slider WHERE no='".$_GET['Kode']."'";
		$myQry = mysql_query($mySql, $koneksidb) or die ("Eror hapus data".mysql_error());
		if($myQry){
			echo "<meta http-equiv='refresh' content='0; url=?page=sliderview'>";
		}
	}
}
?>