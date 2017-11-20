<?php 
$this->load->view('templates/Header_admin');
?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>NAMA_BARANG</label>
		<input type="text" class="form-control" name="nama_barang" required  placeholder="masukkan nim" value="<?php echo  $nama_barang; ?>">
	</div>
	<div class="form-group">
		<label>JUMLAH_BARANG</label>
		<input type="text" class="form-control" name="jumlah_barang" required  placeholder="masukkan nim" value="<?php echo  $jumlah_barang; ?>">
	</div>
	<div class="form-group">
		<label>HARGA per satuan</label>
		<input type="text" class="form-control" name="harga" required  placeholder="masukkan nim" value="<?php echo  $harga; ?>">
	</div>
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
	
	<input type="hidden" name="id_pembelian" value="<?php echo $id_barang; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button  ?></button>
	<a href="<?php echo site_url('pembelian') ?>" class="btn btn-default">cancel</a>
</form>
<?php 
$this->load->view('templates/footer');
?>