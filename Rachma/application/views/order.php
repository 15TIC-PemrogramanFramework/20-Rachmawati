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
	<!--
	<div class="container">
		<div class="products-page">
			<div class="products">
				<div class="product-listy">

				</div>
				<div class="latest-bis">

				</div> 	

				<div class="tags">
					<h4 class="tag_head">Tags Widget</h4>
					<ul class="tags_links">
						<li><a href="<?php echo site_url('BerandaUser/DetailBarang/'.$id_barang);?>">Batu Bata</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_kerikil" ?>">Kerikil</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_pasir" ?>">Pasir abu-abu</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_catcatylac" ?>">Cat Catylac</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_catdulux" ?>">Cat Dulux</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_kuascat" ?>">Kuas Cat</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_kuasdinding" ?>">Kuas Dinding</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_lempipa" ?>">Lem Pipa</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_lemsetan" ?>">Lem Setan</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_lemalteco" ?>">Lem Alteco</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_pakupayung" ?>">Paku Payung</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_pakutembok" ?>">Paku Tembok</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_paku" ?>">Paku</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_triplek" ?>">Triplek</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_semenpadang" ?>">Semen Padang</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_sambunganpipa" ?>">Sambungan pipa</a></li>
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_pipa" ?>">Pipa</a></li>
					</ul>

				</div>

			</div>
		-->

		<div class="container">
			<div class="dreamcrub">
				<!--<div class="new-product">-->
					<div class="col-md-5 zoom-grid">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/si.jpg">
									<div class="thumb-image">
										<img  id="example" src="" alt=" " class="img-responsive">
									</div>
								</li>

							</ul>
						</div>
					</div>
					<form action="<?php echo site_url('Pembayaran');?>" method="post">
						<?php 
						foreach ($data_dibeli as $key => $row) {
							# code...
						if ($key == 0) {
							# code...
						

						 ?>
						<div class="col-md-7 dress-info">
							
							<div class="span span2">
								<p class="left">Nama_barang</p>
								<p class="right"><?php echo $row->nama_barang;?>

								</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span3">
								<p class="left">jumlah_barang</p>
								<p class="right"><?php echo $row->jumlah_barang;?>

								</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span2">
								<p class="left">Total</p>
								<p class="right"><?php echo $row->total; ?>

								</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span3">
								<p class="left">nama_pembeli</p>
								<p class="right"><?php echo $row->nama; ?>

								</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span2">
								<p class="left">Alamat_pembeli</p>
								<p class="right"><?php echo $row->alamat; ?>

								</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span3">
								<p class="left">NoHp_pembeli</p>
								<p class="right"><?php echo $row->no_hp; ?>

								</p>
								<div class="clearfix"></div>
							</div>
							<div class="span span4">
								<p class="left">Jenis Pembayaran</p>
								<p class="right"><span class="selection-box">

									<select class="domains valid" name="pembayaran">
										<option>LEWAT ATM</option>
										<option>COD</option>

									</select></span></p>
									<div class="clearfix"></div>
								</div>


								<div class="purchase">
									<div class="cbp-vm-details">
										
										
										<input type="submit" value="Pembayaran">
									</div>
								</div>
							</div>
								<?php
								}
							} ?>
								
							</form>	

							<div class="clearfix"></div>
						</div>
						<script src="<?php echo base_url()."product/"; ?>js/imagezoom.js"></script>
						<!-- FlexSlider -->
						<script defer src="<?php echo base_url()."product/"; ?>js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
							$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
							});
						});
					</script>
				</div>
				
				<div class="reviews-tabs">
					<!-- Main component for a primary marketing message or call to action -->


				</div>
				<div class="clearfix"></div>
			</span>
		</p>
	</div>
</div>
</div>
</div>

<div class="cards text-center">
	<img src="<?php echo base_url()."product/"; ?>images/cards.jpg" alt="" />
</div>

 <div class="copyright text-center">
				<p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
		  </div>
</body>
</html>	