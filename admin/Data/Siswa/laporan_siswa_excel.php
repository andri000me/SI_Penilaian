<?php
include '../../db/koneksi.php';

header("Content-Type: application/force-download"); header("Cache-Control: no-cache, must-revalidate"); header("Expires: Sat, 26 Jul 2014 05:00:00 GMT"); header("content-disposition: attachment;filename=laporan_pelanggan".date('dmY').".xls");

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Pengguna</title>
<link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h2 align="center">LAPORAN PENGGUNA</h2>
<table width="638" border="0" align="center" cellpadding="2" cellspacing="1" class="table-list">
  <tr>
  <td bgcolor="#CCCCCC"> <b> No </b> </td>
     <td bgcolor="#CCCCCC"> <b> Kode </b> </td>
        <td bgcolor="#CCCCCC"> <b> Nama Pelanggan </b> </td>
		<td bgcolor="#CCCCCC"> <b> Umur </b> </td>
        <td bgcolor="#CCCCCC"> <b> Alamat </b> </td>
		 <td bgcolor="#CCCCCC"> <b> HP </b> </td>
		  <td bgcolor="#CCCCCC"> <b> No KTP </b> </td>
		   <td bgcolor="#CCCCCC"> <b> Username </b> </td>
			
  </tr>
  <?php
  	# MENAMPILKAN DATA 
	$mySql = "SELECT * FROM tb_pelanggan ORDER BY kdpel ASC";
	$myQry = mysql_query($mySql, $koneksidb) or die ("Query salah :".mysql_error());
	$nomor = 0; 
	while ($kolomData = mysql_fetch_array($myQry)) {
		$nomor++;
		# MENGHITUNG JUMLAH PRODUK
	#	$Kode = $kolomData['KodeMotor'];
	#	$my2Sql = "SELECT COUNT(*) As KodeMotor FROM motor WHERE KodeMotor='$Kode'";
	#	$my2Qry = mysql_query($my2Sql, $koneksidb) or die("Query salah:".mysql_error());
	#	$kolom2Data = mysql_fetch_array($my2Qry);
  ?>
  <tr>
    <td> <?php echo $nomor; ?> </td>
    <td> <?php echo $kolomData['kdpel']; ?> </td>
	<td> <?php echo $kolomData['nama']; ?> </td>
	<td> <?php echo $kolomData['umur']; ?> </td>
	<td> <?php echo $kolomData['alamat']; ?> </td>
	<td> <?php echo $kolomData['nohp']; ?> </td>
	<td> <?php echo $kolomData['noktp']; ?> </td>
	<td> <?php echo $kolomData['username']; ?> </td>
	
  </tr>
  <?php } ?>
</table>
<a href="javascript:window.print()" target="_self"></a>
</body>
</html>
