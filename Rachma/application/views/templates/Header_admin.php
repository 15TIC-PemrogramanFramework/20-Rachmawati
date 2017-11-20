<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('assets_pemilik/') ?>plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets_pemilik/') ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets_pemilik/') ?>plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets_pemilik/') ?>css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets_pemilik/') ?>css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url('assets_pemilik/') ?>plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

    
    <style>
    .dataTables_wrapper {
        min-height: 500px
    }

    .dataTables_processing {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        margin-left: -50%;
        margin-top: -25px;
        padding-top: 20px;
        text-align: center;
        font-size: 1.2em;
        color:pink;
    }
</style>
</head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">

                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
            </ul>
        </nav>

        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">

                            </div>
                            <div class="user-info">
                                <div> hi !! <?php echo $this->session->userdata('username'); ?> </div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>

                        <!--end user image section-->
                    </li>
                    <li>
                        <a href="<?php echo site_url('belian');?>"><i class="fa fa-shopping-bag"></i> pembelian </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('member');?>"><i class="fa fa-user"></i> data member</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('product');?>"><i class="fa fa-product-hunt"></i> product </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('bayaran');?>"><i class="fa fa-money"></i> pembayaran </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('saran');?>"><i class="fa fa-comment"></i> Saran Dan Komentar </a>
                    </li>
                </ul>
            </div>
        </nav>
        


            

