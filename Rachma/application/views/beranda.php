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
	<!-- content-section-starts-here -->
	<div class="container">
		<div class="main-content">
			<div class="online-strip">
				<div class="col-md-4 follow-us">
					<h3>follow us : <a class="instagram" href="#"></a><a class="facebook" href="#"></a></h3>
				</div>
				<div class="col-md-4 shipping-grid">
					<div class="shipping">
						<img src="<?php echo base_url()."product/"; ?>images/shipping.png" alt="" />
					</div>
					<div class="shipping-text">
						<h3>Gratis Kirim</h3>
						<p>Wilayah Pekanbaru</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 online-order">
					<p>Order Online</p>
					<h3>Tel:0761-676234</h3>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="products-grid">
				
				<header>
					<h3 class="head text-center">Product Terbaru</h3>
				</header>
				<?php 
				foreach ($data_barang as $key => $row) {
			//Tampilkan 6 Barang Teratas Saja, meskipun barang dari database ada > dari 6
					if($key < 6) { 
						?>
						<div class="col-md-4 product simpleCart_shelfItem text-center">
							<a href="single.html"><img src="" alt="" /></a>
							<div class="mask">
							</div>
							<a href="<?php echo site_url('Berandauser/DetailBarang/'.$row->id_barang);?>"><img height="300" width="300" title=" " alt=" " src="<?php echo base_url()."product/images/".$row->gambar;?>" /></a>	
							<p><?php echo $row->nama_barang;?></p>
							<h4>Rp. <?php echo $row->harga; ?></h4>
						</div>
						<?php }
						else {
						//nothing
						} 
					}?>

					<div class="clearfix"></div>
				</div>
			</div>

		</div>
		<div class="other-products">
			<div class="container">
				<h3 class="like text-center">Koleksi Unggulan</h3>        			
				<ul id="flexiselDemo3">
					<li><a href="#"><img src="<?php echo base_url()."product/"; ?>images/cat catylac.png" class="img-responsive" alt="" /></a>
						<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single.html">Cat Catylac</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">$759</span></a></p>
						</div>
					</li>
					<li><a href="#"><img src="<?php echo base_url()."product/"; ?>images/elbo.png" class="img-responsive" alt="" /></a>						
						<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single.html">Elbo</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">$699</span></a></p>
						</div>
					</li>
					<li><a href="#"><img src="<?php echo base_url()."product/"; ?>images/kuas dinding.png" class="img-responsive" alt="" /></a>
						<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single.html">kuas dinding</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
						</div>
					</li>
					<li><a href="#"><img src="<?php echo base_url()."product/"; ?>images/lem alteco.png" class="img-responsive" alt="" /></a>
						<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single.html">lem alteko</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">$499</span></a></p>
						</div>
					</li>
					<li><a href="#"><img src="<?php echo base_url()."product/"; ?>images/kuas cat.png" class="img-responsive" alt="" /></a>
						<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="single.html">kuas cat</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">$649</span></a></p>
						</div>
					</li>
				</ul>
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});

					});
				</script>
				<script type="text/javascript" src="<?php echo base_url()."product/"; ?>js/jquery.flexisel.js"></script>
			</div>
		</div>
		 <div class="copyright text-center">
				<p>© 2015 Eshop. All Rights Reserved | Design by   <a href="http://w3layouts.com">  W3layouts</a></p>
		  </div>

	</body>
	</html>