<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PROFIL | UD.BukitBarisan </title>
	<?php $this->load->view('include/link_atas'); ?>

	<!--//fonts-->

</head>
<body>
	<?php $this->load->view('include/header-nav');?>

<div class="contact">
	<div class="container">
		<div class="dreamcrub">
			<div class="contact-form">
				<div class="contact-info">
					<h3>PROFILE</h3>
				</div>
				<center>
				<form action="<?php echo $action; ?>" method="post">
						 <ul>
							 <li class="text-info">Nama: </li>
							 <li><input type="text" name="nama" required placeholder="masukkan nama" value="<?php echo $nama; ?>"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Alamat: </li>
							 <li><input type="text" name="alamat" required placeholder="masukkan alamat" value="<?php echo $alamat; ?>"></li>
						 </ul>				 
						<ul>
							 <li class="text-info">No Hp: </li>
							 <li><input type="text" name="no_hp" required placeholder="masukkan No Hp" value="<?php echo $no_hp; ?>"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Password:</li>
							 <li><input type="password" name="password" required placeholder="masukkan password" value="<?php echo $password; ?>"></li>
						 </ul>
						 <input type="hidden" name="username" required placeholder="masukkan username" value="<?php echo $username; ?>">
						 <input type="hidden" name="id" value="<?php echo $id;?>"/>
									
						 <input type="submit" value="REGISTER NOW">
						
					 </form>


						

						
						
						
					</center>
				</div>
			</div>
		</div>
		 <div class="copyright text-center">
				<p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
		  </div>
	</body>
	</html>