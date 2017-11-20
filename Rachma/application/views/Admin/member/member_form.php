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
		<label>NoHp</label>
		<input type="text" class="form-control" name="no_hp" required  placeholder="masukkan nim" value="<?php echo  $no_hp; ?>">
	</div>
	<div class="form-group">
		<label>username</label>
		<input type="text" class="form-control" name="username" required  placeholder="masukkan nim" value="<?php echo  $username; ?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" name="password" required  placeholder="masukkan nim" value="<?php echo  $password; ?>">
	</div>
	
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button  ?></button>
	<a href="<?php echo site_url('member') ?>" class="btn btn-default">cancel</a>
</form>
<?php 
$this->load->view('templates/footer');
?>