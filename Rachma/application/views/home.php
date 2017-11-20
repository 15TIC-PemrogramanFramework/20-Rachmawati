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
<link href="<?php echo base_url()."Asset/"; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url()."Asset/"; ?>js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url()."Asset/"; ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="<?php echo base_url()."Asset/"; ?>js/jquery.easydropdown.js"></script>
<link href="<?php echo base_url()."Asset/"; ?>css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="<?php echo base_url()."Asset/"; ?>js/scripts.js" type="text/javascript"></script>
<!--js-->
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="<?php echo base_url()."Asset/"; ?>js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url()."Asset/"; ?>js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
		<?php $this->load->view('include/link_atas'); ?>


<!---- start-smoth-scrolling---->


</head>
<body>
<!--banner-->
<script src="<?php echo base_url()."Asset/"; ?>js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-bg1">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
					<img src="<?php echo base_url()."product/"; ?>images/logo2.png" alt="/>
				   </div>	
				   <div class="header-top-left">			
				  
	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
							    <li><h1>TOKO BANGUNAN ONLINE</h1></li>
							
						  </ul>
						  <p>Menyediakan <span> barang </span> Bangunan <span> Sesuai </span> Dengan <span> Kebutuhan anda </span></p>
						 
						  <a class="morebtn" href="<?php echo site_url('Berandauser'); ?>">SHOP</a>
						 

						    
					  </div>
				  </div>
	 </div>
</div>
</body>
</html>

