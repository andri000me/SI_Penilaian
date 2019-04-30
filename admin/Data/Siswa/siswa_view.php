<?php
$kelas=$_GET['kelas'];
?>

<form name="form1" method="post" action="">
<a href='?page=siswaadd&kelas=<?php echo $kelas ?>'>Tambah Siswa</a> 
  <table width="424" height="82" border="1">
    <tr>
      <td width="35">Id Siswa</td>
      <td width="53">Nama Siswa</td>
      <td width="41">Alamat Siswa</td>
      <td width="140">Aksi</td>
      


  <p>&nbsp;</p>
<?php
include ('koneksi.php');
$sql = mysql_query ("select*from tb_siswa");
while ($row=mysql_fetch_array ($sql)){
	?>
    
     <tr>
      <td><?php echo $row['id_siswa']?></td>
       <td><?php echo $row['nama_siswa']?></td>
      <td><?php echo $row['alamat']?></td>
    <td><a href ="<?php echo "?page=siswaedit&kelas?inialamat=".$row['id_siswa'] ?>"> Edit </a> | 
    <a href ="<?php echo "sql_hapus.php?inialamat=".$row['id_siswa'] ?>"> Hapus </a></td>   
    </tr>
  <?php
}
?>
</table>
</form>
