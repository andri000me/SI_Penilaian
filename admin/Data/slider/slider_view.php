<?php
include 'db/koneksi.php';
$query = "SELECT * FROM slider"; //the query for get all 
$result = mysql_query($query);
?>

<div class="well">
	<div class="navbar navbar-inverse row-fluid">
	  <div class="navbar-inner span12">

 <div class="table-header">
		  <a class="brand" href='?page=sliderview'>Slider</a>
<a href='?page=slideradd'><button class="btn btn-primary">+ Tambah Slider</button></a>
			
			</div>
		</div></div>


<section>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
         <td> <b> Kode </b> </td>
        <td class='hidden-480'> <b> Slider </b> </td>
		

     </tr>
	 </thead>
	 <?php

while ($data = mysql_fetch_array($result)) { //mysql_fetch_array = get the query data into array
  ?> 
 
  <?php echo "<tbody><tr>
  
            <td >".$data['no']."</td>
			<td class='hidden-480'><img width='200px' height='80px' src='images/".$data['slider1']."' /></td>
			";
			
?>
     <td>
	
	           <a href="?page=sliderdelete&Kode=<?php echo $data['no']; ?>" onClick="return confirm('Anda yakin..???');"><button class='btn btn-mini btn-danger'>Hapus Data</button> </a>
	         
	       
		</td> </tr></tbody>
        <?php

}
echo "  </table>";
?>
</div>
