<?php
include 'db/koneksi.php';
$query = "SELECT * FROM slider"; //the query for get all 
$result = mysql_query($query);
?>


<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="table-header">
<button class="btn btn-primary">+ Tambah</button></div>

<table width="327" class="table table-striped table-bordered table-hover" id="sample-table-2">
		<thead>
			<tr>
			<th hidden="true" class="center">
			<th>No</th>
			<th>Slide</th>
			<th></th>
			</tr>
		</thead>

		<tbody>
	<?php $no=0; while($data=mysql_fetch_array($result)){ $no++; ?>		<tr>

			<td class="center" hidden="true"></td>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['slider1']; ?></td>
			<td class="td-actions">
				<div class="hidden-phone visible-desktop action-buttons"><a class="blue" href="#"><i class="icon-zoom-in bigger-130"></i></a>
				<a class="green" href="#"><i class="icon-pencil bigger-130"></i></a>
				<a class="red" href="#"><span class="btn btn-mini btn-danger"><i class="icon-trash bigger-130"></i>Delete</span></a>
				</div></td> 
			</tr><?php } ?>
		</tbody>
</table>
</div>
</div>
</div>
