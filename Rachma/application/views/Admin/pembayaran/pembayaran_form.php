<?php 
$this->load->view('templates/header');
?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>NAMA</label>
		<input type="text" class="form-control" name="nama" required  placeholder="masukkan nim" value="<?php echo  $nama; ?>">
	</div>
	<div class="form-group">
		<label>ALAMAT</label>
		<input type="text" class="form-control" name="alamat" required  placeholder="masukkan nim" value="<?php echo  $alamat; ?>">
	</div>
	<div class="form-group">
		<label>NO HP</label>
		<input type="text" class="form-control" name="no_hp" required  placeholder="masukkan nim" value="<?php echo  $no_hp; ?>">
	</div>
	<div class="form-group">
		<label>Jenis</label>
		<input type="text" class="form-control" name="jenis" required  placeholder="masukkan nim" value="<?php echo  $jenis; ?>">
	</div>
	<input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button  ?></button>
	<a href="<?php echo site_url('pembayaran') ?>" class="btn btn-default">cancel</a>
</form>
<?php 
$this->load->view('templates/footer');
?>