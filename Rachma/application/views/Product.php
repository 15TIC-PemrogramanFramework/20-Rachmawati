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
	<?php $this->load->view('include/link_atas');?>
</head>
<body>
	<!-- header-section-starts -->
	<?php $this->load->view('include/header-nav'); ?>

	<!-- content-section-starts -->
	<!--<div class="container">
		<div class="products-page">
			<div class="products">


				<div class="tags">
					<h4 class="tag_head">Tags Widget</h4>
					<ul class="tags_links">
						<li><a href="<?php echo base_url()."index.php/welcome/Tampilan_batubata" ?>">Batu Bata</a></li>
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

			</div>-->

	<div class="container">
		<div class="dreamcrub">
			<!--<div class="new-product">-->
				<div class="new-product-top">
					<ul class="product-top-list">

					</ul>

					<div class="clearfix"></div>
				</div>
				<div class="mens-toolbar">

					<!--untuk search -->
					<div class="contact-info">

						<h2>PRODUCT KAMI</h2>
					<div class="w3l_search">
					<form action="<?php echo site_url('Welcome/search_keyword');?>" method="post">
						<input type="search" name="nama_barang" placeholder="Cari Product" required="">
						<button type="submit" class="btn btn-default search" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true">Cari</i>
						</button>
						<div class="clearfix"></div>
					</form>
				</div>
					</div>

					<div class="clearfix"></div>		
				</div>
				<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
						<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
						<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
					</div>
					<div class="pages">   
						<div class="limiter visible-desktop">
						</div>
					</div>
					<div class="clearfix"></div>
					<ul>
						<?php 
				foreach ($data_barang as $key => $row) { ?>
						<li>
							<a class="cbp-vm-image">
								<div class="simpleCart_shelfItem">
									<div class="view view-first">
										<div class="inner_content clearfix">
											<div class="product_image">
												<img src="<?php echo base_url()."product/images/".$row->gambar;?>" class="img-responsive" alt=""/>
												
												<div class="product_container">
													<div class="cart-left">
														<p class="title"><?php echo $row->nama_barang;?></p>
													</div>
													<div class="pricey"><span class="item_price">Rp. <?php echo $row->harga; ?></span></div>
													<div class="clearfix"></div>
												</div>		
											</div>
										</div>
									</div>
								</a>
								<div class="cbp-vm-details">
									
								</div>
								<a class="cbp-vm-icon cbp-vm-add item_add" href="<?php echo site_url('Berandauser/DetailBarang/'.$row->id_barang);?>">Detail</a>
							</div>
						</li>

						<?php
					}?>

					</ul>
				</div>
				<script src="<?php echo base_url()."product/"; ?>js/cbpViewModeSwitch.js" type="text/javascript"></script>
				<script src="<?php echo base_url()."product/"; ?>js/classie.js" type="text/javascript"></script>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>


	<div class="cards text-center">
		<img src="<?php echo base_url()."product/"; ?>images/cards.jpg" alt="" />
	</div>

</div>
</div>
 <div class="copyright text-center">
				<p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
		  </div>
</body>
</html>