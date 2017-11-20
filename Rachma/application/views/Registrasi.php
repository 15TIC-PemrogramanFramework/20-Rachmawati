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
<link href="<?php echo base_url()."product/"; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url()."product/"; ?>js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url()."product/"; ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="<?php echo base_url()."product/"; ?>js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="<?php echo base_url()."product/"; ?>css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li><a href="<?php echo site_url('Login_Akun');?>"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
						<li><a href="<?php echo site_url('User/tambah_Akun');?>""><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>			
					</ul>
				</div>
				
				<div class="clearfix"> </div>
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
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
			<li><a href="<?php echo base_url();?>">Home</a></li>
		       
		        <li class="dropdown">
		        	<a href="<?php echo base_url()."index.php/welcome/Product";?>"> PRODUCT </a>
		            <ul class="dropdown-menu multi-column columns-2">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
						           
					            </ul>
				            </div>
				        
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
		      
		       
				
					<li><a href="<?php echo base_url()."index.php/welcome/contact" ?>">CONTACT US</a></li>
	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>
	</div>
		</div>
		<!-- registration-form -->
<div class="registration-form">
	<div class="container">
	<div class="dreamcrub">
			   	
                <div class="clearfix"></div>
			   </div>
			
		<h2>Registration</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
				<center>
					<form action="<?php echo $action; ?>" method="post">
						 <ul>
							 <li class="text-info">Nama: </li>
							 <li><input type="text" name="nama" required placeholder="masukkan nama" value="<?php echo $nama ?>"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Alamat: </li>
							 <li><input type="text" name="alamat" required placeholder="masukkan alamat" value="<?php echo $alamat ?>"></li>
						 </ul>				 
						<ul>
							 <li class="text-info">No Hp: </li>
							 <li><input type="text" name="no_hp" required placeholder="masukkan No Hp" value="<?php echo $no_hp ?>"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Username: </li>
							 <li><input type="text" name="username" required placeholder="masukkan username" value="<?php echo $username ?>"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Password:</li>
							 <li><input type="password" name="password" required placeholder="masukkan password" value="<?php echo $password ?>"></li>
						 </ul>
									
						 <input type="submit" value="REGISTER NOW">
						
					 </form>
				</center>
				 </div>
			</div>
		</div>
	
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- registration-form -->

		</div>
		 <div class="copyright text-center">
				<p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
		  </div>
</body>
</html>