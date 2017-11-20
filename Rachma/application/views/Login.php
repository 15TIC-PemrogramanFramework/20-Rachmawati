<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>TOKO BANGUNAN ONLINE</title>
	<?php $this->load->view('include/link_atas'); ?>
</head>
<body>
	<!-- header-section-starts -->
	<?php $this->load->view('include/header-nav');?>
	
	<!-- content-section-starts -->
	<div class="content">
		<div class="container">
			<div class="login-page">
				<div class="dreamcrub">
					<ul class="breadcrumbs">

					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="account_grid">
					<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
						<h2>REGISTRASI</h2>
						
						<a class="acount-btn" href="<?php echo site_url('User/tambah_Akun');?>">Create an Account</a>
					</div>
					<div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
						<h3>LOGIN</h3>
						
						<form action="<?php echo site_url('Login_akun/aksi_login'); ?>" method="POST">
							<div>
								<span>Username<label>*</label></span>
								<input type="text" name="username" placeholder="masukkan username" required=" "> 
							</div>
							<div>
								<span>Password<label>*</label></span>
								<input type="password" name="password" placeholder="masukkan password" required=""> 
							</div>
							<a class="forgot" href="#">Forgot Your Password?</a>
							<input type="submit" value="Login">
						</form>
					</div>	
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
 <div class="copyright text-center">
				<p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
		  </div>
	</body>
	</html>