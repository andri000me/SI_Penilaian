<?php
//include_once "library/inc.seslogin.php";

if($_GET) {
	if(empty($_GET['Kode'])){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
		$mySql = "DELETE FROM tb_nilai WHERE siswa_nisn='".$_GET['Kode']."'";
		$myQry = mysql_query($mySql) or die ("Eror hapus data".mysql_error());
		if($myQry){
			echo "<meta http-equiv='refresh' content='0; url=?page=nilaiview'>";
		}
	}
}
?>