<?php
include 'db/koneksi.php';
error_reporting(0);
if(isset($_POST['cari'])){
$query = "SELECT * FROM tb_walimurid where wali_namaayah REGEXP '".$_POST['cari']."' or wali_pekerjaanayah REGEXP '".$_POST['cari']."' or wali_namaibu REGEXP '".$_POST['cari']."' or wali_alamat REGEXP '".$_POST['cari']."'"; 
$result = mysql_query($query);

}else{
$query = "SELECT * FROM tb_walimurid"; 
$result = mysql_query($query);
}
?>


<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">

	<table class="fixed-th">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Muhammad Syakirurohman</td>
				<td>Telukpinang</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Della Nadya Ayu Aprillia</td>
				<td>Cigombong</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Muhammad Andika</td>
				<td>Sukasari</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Galih Tandicha</td>
				<td>Cisaat</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Elma Septiana</td>
				<td>Rancamaya</td>
			</tr>
			<tr>
				<td>6</td>
				<td>Lilis Sulistiawati</td>
				<td>Bitung Sari</td>
			</tr>

			<tr>
				<td>7</td>
				<td>Muhammad Irzal</td>
				<td>Cipinang Gading</td>
			</tr>
			<tr>
				<td>8</td>
				<td>Utami ningrum</td>
				<td>Cipayung</td>
			</tr>
			<tr>
				<td>9</td>
				<td>Fachrurrozi</td>
				<td>Ciawi</td>
			</tr>
			<tr>
				<td>10</td>
				<td>Issep Muhammad Nasrullah Hakim</td>
				<td>Cibedug</td>
			</tr>
		</tbody>
	</table>
	<br/>
</div>
<div class="back">
<a href="http://www.syakirurohman.net/2015/03/tutorial-membuat-table-html-menarik.html">Kembali ke Artikel</a>
</div>
</body>
