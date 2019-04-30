<?php
$dbhost = 'localhost';
$dbuser = 'root'; 
$dbpass = ''; 
$dbname = 'devi'; 

// Konek ke MySQL Server 
$koneksidb	= mysql_connect($dbhost, $dbuser, $dbpass);
if (! $koneksidb) {
  echo "Failed Connection !";
}

// Memilih database pd MySQL Server
mysql_select_db($dbname) or die ("Database not Found !");
?>