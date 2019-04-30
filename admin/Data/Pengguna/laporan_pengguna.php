<?php
include '../../db/koneksi.php';

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
     <td width="24" bgcolor="#CCCCCC"> <b> No </b> </td>
	 <td width="112" bgcolor="#CCCCCC"> <b> Kode Pengguna </b> </td>
        <td width="179" bgcolor="#CCCCCC"> <b> Nama Pengguna </b> </td>
	
		<td width="81" bgcolor="#CCCCCC"> <b> Umur </b> </td>
		<td width="87" bgcolor="#CCCCCC"> <b> Alamat </b> </td>
        <td width="124" bgcolor="#CCCCCC"> <b> No Hp </b> </td>
  </tr>
  <?php
  	# MENAMPILKAN DATA 
	$mySql = "SELECT * FROM tb_pengguna ORDER BY Kode_Pengguna ASC";
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
    <td> <?php echo $kolomData['Kode_Pengguna']; ?> </td>
	<td> <?php echo $kolomData['Nama_Pengguna']; ?> </td>
	<td> <?php echo $kolomData['Umur_Pengguna']; ?> </td>
	<td> <?php echo $kolomData['Alamat_Pengguna']; ?> </td>
	<td> <?php echo $kolomData['No_Hp']; ?> </td>
  </tr>
  <?php } ?>
</table>
<a href="javascript:window.print()" target="_self">Print</a> <a href="laporan_pengguna_exel.php">Excel</a>
</body>
</html>
