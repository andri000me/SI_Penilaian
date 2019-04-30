<?php
include 'koneksi.php';
$data = $_POST['id']; //get all the id book that will be deleted

foreach($data as $data1) { //looping according to the total data that checked
	//echo $data1;
	$query = "DELETE FROM tb_kelas where id = $data1"; //the query to delete data according to id
	$result = mysql_query($query);
}
if ($result) {
	include "kelas_view.php";
	echo "Delete sucess";
}
?>