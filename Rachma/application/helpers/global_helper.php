<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="'.site_url('Berandauser').'">Beranda</a></li>
					<li class="dropdown">
						<a href="'.site_url('Berandauser/Product').'"> PRODUCT </a>
				
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
					<li><a href="'.site_url('Berandauser/contact').'">CONTACT US</a></li>
				</ul>
			</div>';
	}
	function generate_menu()
	{
		return '
   <li>
                        <a href="'.site_url('belian').'"><i class="fa fa-shopping-bag"></i> pembelian </a>
                    </li>
                    <li>
                        <a href="'.site_url('member').'"><i class="fa fa-user"></i> data member</a>
                    </li>
                    <li>
                        <a href="'.site_url('product').'"><i class="fa fa-product-hunt"></i> product </a>
                    </li>

                    <li>
                        <a href="'.site_url('bayaran').'"><i class="fa fa-money"></i> pembayaran </a>
                    </li>
                    <li>
                        <a href="'.site_url('saran').'"><i class="fa fa-comment"></i> Saran Dan Komentar </a>
                    </li>';
	}

	


	