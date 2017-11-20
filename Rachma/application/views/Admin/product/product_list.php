<?php 
$this->load->view('templates/header');
?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top: 20px;margin-bottom: 10px;">	
			<?php  echo anchor(site_url('product/tambah'),
			'<i class="fa fa-plus-square" aria-hidden="true">
			</i> tambah data','class="btn btn-primary"'
		); ?>
		
	</div>
	</div>
</div>

<div class="row"> 
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>id barang</th>
			<th>nama_ barang</th>
			<th>harga</th>
			<th>deskripsi</th>
			<th>stok</th>
			<th>gambar</th>
			<th>Action</th>			
		</tr>
	</thead>
	<tbody>
		<?php foreach($product as $key => $row){?>
		<tr>
			<td><?php echo $row->id_barang; ?></td>
			<td><?php echo $row->nama_barang; ?></td>
			<td><?php echo $row->harga; ?></td>
			<td><?php echo $row->deskripsi; ?></td>
			<td><?php echo $row->stok; ?></td>
			<td><img height="60" width="50" title="" alt="" src="<?php echo base_url()."product/images/".$row->gambar; ?>"/></td>
			<td><?php echo anchor(site_url('product/edit/'.$row->id_barang),
				'<i class="fa fa-pencil" aria-hidden="true">
			</i>','class="btn btn-warning"'
			); ?>
				<?php echo anchor(site_url('product/delete/'.$row->id_barang),
				'<i class="fa fa-trash" aria-hidden="true">
			</i>','class="btn btn-danger"'
			); ?>

			</td>
		</tr>
		<?php } ?>
	</tbody>

</table>
</div>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
	$('#example').DataTable();
	});

</script>