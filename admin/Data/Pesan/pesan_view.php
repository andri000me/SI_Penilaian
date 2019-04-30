<?php
include 'db/koneksi.php';
$query = "SELECT * FROM komentar order by id_komentar ASC"; 
$result = mysql_query($query);
?>

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=pesanview'>Komentar</a>
		  <div class="nav-collapse">




		<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" action="?page=kelascari">		  <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
		  <button type="submit" class="btn btn-primary" name="btncari">Cari Data</button>
		</form>		</div>
		</div>
</div>
</div>
<section>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
         <td> <b>Kode Komentar</b> </td>
        <td class='hidden-480'> <b> Kode Berita </b> </td>
		<td class='hidden-480'> <b>Nama Komentar </b> </td>
		<td class='hidden-480'> <b>Isi Komentar </b> </td>
		<td class='hidden-480'> <b>Aktif </b> </td>
		 
     </tr>
	 </thead>
<?php
$i = 0;
while ($data = mysql_fetch_array($result)) { 
  ?> 
 
  <?php if($data['aktif']=="Y"){ echo "<tbody><tr>
  
            <td>".$data['id_komentar']."</td>
			<td class='hidden-480'>".$data['id_berita']."</td>
			<td class='hidden-480'>".$data['nama_komentar']."</td>
			<td class='hidden-480'>".$data['isi_komentar']."</td>
			<td class='hidden-480'>".$data['aktif']."</td>
		"; }else{
		
		echo "<tbody><tr>
  
            <td style='color:red'>".$data['id_komentar']."</td>
			<td style='color:red' class='hidden-480'>".$data['id_berita']."</td>
			<td style='color:red' class='hidden-480'>".$data['nama_komentar']."</td>
			<td style='color:red' class='hidden-480'>".$data['isi_komentar']."</td>
			<td style='color:red' class='hidden-480'>".$data['aktif']."</td>
		";
		}
?>
     <td>
	        <div class="btn-group">
	          <?php if($data['aktif']=="N"){ ?>
	            <a href="?page=pesanedit&Kode=<?php echo $data['id_komentar']; ?>&Berita=<?php echo $data['id_berita']; ?>&Aktif=<?php echo $data['aktif']; ?>"><button class='btn btn-mini btn-primary'> Setujui </button></a>
				<?php }else{ ?>
				<a href="?page=pesanedit&Kode=<?php echo $data['id_komentar']; ?>&Berita=<?php echo $data['id_berita']; ?>&Aktif=<?php echo $data['aktif']; ?>"><button class='btn btn-mini btn-primary'> Batal Setujui </button></a>
				
				<?php } ?>
	            <a href="?page=pesandelete&Kode=<?php echo $data['id_komentar']; ?>&Berita=<?php echo $data['id_berita']; ?>&Aktif=<?php echo $data['aktif']; ?>" onClick="return confirm('Anda yakin..???');"><button class='btn btn-mini btn-danger'> Hapus Data</button></a>
	        </div><!-- /btn-group -->
		</td> </tr></tbody>
        <?php
$i;
}
echo "  </table>";
?>
