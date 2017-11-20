<?php 
$this->load->view('templates/header');
?>
<div class="row">
	<div class="col-md-12 text-right">
		
	</div>
</div>

<div class="row"> 
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>alamat</th>
			<th>NoHp</th>
			<th>Username</th>
			<th>Action</th>			
		</tr>
	</thead>
	<tbody>
		<?php foreach($member as $key => $row){?>
		<tr>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->alamat; ?></td>
			<td><?php echo $row->no_hp; ?></td>
			<td><?php echo $row->username; ?></td>
		
			<td>
				<?php echo anchor(site_url('member/delete/'.$row->id),
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