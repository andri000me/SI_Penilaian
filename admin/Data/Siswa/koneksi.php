<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='devi';
$konek=mysql_connect ($dbhost,$dbuser,$dbpass) or die ('Koneksi gagal!');
mysql_select_db($dbname);
?>