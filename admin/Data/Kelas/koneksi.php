<?php 
$host="localhost";
$username="root";
$password="";
$db_name="devi";
$tbl_nama="tb_kelas";

mysql_connect("$host", "$username", "$password") or die ("cannot connect");
mysql_select_db("$db_name") or die ("cannot select DB");

$sql="SELECT * FROM $tbl_nama";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
?>