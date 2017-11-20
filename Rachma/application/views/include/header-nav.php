<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
			<!-- CEK APAKAH SUDAH LOGIN ATAU BELUM -->
			<!-- JIKA BELUM -->
					<?php  
					if(!$this->session->userdata("username") == true) {
						?>
						<ul>
							<li><a href="<?php echo site_url('Login_akun');?>"<span class="glyphicon glyphicon-user"> </span>Login</a></li>
							<li><a href="<?php echo site_url('User/tambah_Akun');?>"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>			
						</ul>
						<?php 
					} else {
					?>
					<!-- JIKA SUDAH -->
					<ul>
						<li><a href="<?php echo site_url('Profil_user');?>"><?php echo $this->session->userdata('username'); ?></a></li>
						<li><a href="<?php echo site_url('Login_akun/logout') ;?>">log out</a></li>
					</ul>
					<?php 
				} ?>
			</div>
			<!-- KERANJANG -->
			<?php 
			if($this->session->userdata("username") == true){ ?>
			<div class="header-right">
				
			</div>
			<div class="clearfix"> 
			</div>
		</div>
		<?php 
	} ?>
</div>
</div>
</div>
<!-- header-section-ends -->
<div class="banner-top">
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="<?php echo base_url()."product/"; ?>images/logo2.png" alt="" />
			</div>
			<!--/.navbar-header-->
			<?php echo generate_sidemenu();?>
			<!--/.navbar-collapse-->
		</nav>
		
		<!--/.navbar-->
	</div>
</div>