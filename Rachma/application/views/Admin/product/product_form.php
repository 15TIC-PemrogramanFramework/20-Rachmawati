<?php 
$this->load->view('templates/header');
?>
<form action="<?php echo $action; ?>" enctype="multipart/form-data" method="post">
	<div class="form-group">
		<label>NAMA_BARANG</label>
		<input type="text" class="form-control" name="nama_barang" required  placeholder="masukkan nim" value="<?php echo  $nama_barang; ?>">
	</div>
	<div class="form-group">
		<label>HARGA</label>
		<input type="text" class="form-control" name="harga" required  placeholder="masukkan nim" value="<?php echo  $harga; ?>">
	</div>
	<div class="form-group">
		<label>DESKRIPSI</label>
		<input type="text" class="form-control" name="deskripsi" required  placeholder="masukkan nim" value="<?php echo  $deskripsi; ?>">
	</div>
	<div class="form-group">
		<label>STOK</label>
		<input type="text" class="form-control" name="stok" required  placeholder="masukkan nim" value="<?php echo  $stok; ?>">
	</div>
	<div class="form-group">
		<label class="btn btn-default btn-file">Browse..
			<input type="file" name="gambar">
		</label>
 	</div>
	
	<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button  ?></button>
	<a href="<?php echo site_url('product') ?>" class="btn btn-default">cancel</a>
</form>
<?php 
$this->load->view('templates/footer');
?>