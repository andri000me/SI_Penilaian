<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('koneksi.php');
$sql = mysql_query ("select*from tb_siswa ORDER BY id_siswa DESC");
$kelas=$_GET['kelas'];
?>

</p>
<h2>Tambah Siswa </h2>
<form id="form1" name="form1" method="post" action='?page=sql_tambah&kelas=<?php echo $kelas?>'>
  <table width="200" border="1">
  
    <tr>
      <td width="54">Id Siswa</td>
      <td width="20">:</td>
      <td width="104"><label for="textfield"></label>
        <input type="text" name="id" id="textfield" />    
    </tr>
    
    
    
    <tr>
      <td>Nama Siswa</td>
      <td>:</td>
      <td> <input type="text" name="nama" id="textfield2" value="" /></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><input type="text" name="alamat" id="textfield3" value="" /></td>
    </tr>
  
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Tambah" /></td>
    </tr>
  </table>
</form>
</body>
</html>