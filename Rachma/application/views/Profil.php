<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>TOKO BANGUNAN ONLINE </title>
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
						<table>
							<?php foreach ($data_user as $key => $row) { ?>
							<tr>
								<td>
									Nama
								</td>
								<td>:</td>
								<td><?php echo $row->nama;?></td>
								</tr>
								<tr>
								<td>
									Alamat
								</td>
								<td>:</td>
								<td><?php echo $row->alamat; ?></td>
								</tr>
								<tr>
								<td>
									No HP
								</td>
								<td>:</td> 
								<td><?php echo $row->no_hp; ?></td>
								</tr>
								<tr>
								<td>
									Username
								</td>
								<td>:</td>
								<td><?php echo $row->username; ?></td>
								</tr>
								<tr>
									<td>
										<?php echo anchor(site_url('Profil_user/edit/'.$row->id),'<i class="fa fa-pencil">EDIT</i>','class="btn btn-warning"');?>	
								</td>
							</tr>
						<?php } ?>
						</table>




					</center>
				</div>
			</div>
		</div>
		 <div class="copyright text-center">
				<p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
		  </div>
	</body>
	</html>