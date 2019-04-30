<?php
if($_GET){
$kd=$_GET['Kode'];
$kdber=$_GET['Berita'];
$aktif=$_GET['Aktif'];
echo "<img src='load.gif' width='400px' />";
if($aktif=="Y"){
$sql="update komentar set aktif='N' where id_komentar='$kd' and id_berita='$kdber' and aktif='$aktif'";
$masuk=mysql_query($sql);

}else{
$sql="update komentar set aktif='Y' where id_komentar='$kd' and id_berita='$kdber' and aktif='$aktif'";
$masuk=mysql_query($sql);
}
echo "<meta http-equiv='refresh' content='0; url=?page=pesanview'>";
}
 ?>