<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('assets_pemilik/') ?>plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets_pemilik/') ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
    <link href="<?php echo base_url('assets_pemilik/') ?>plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets_pemilik/') ?>css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets_pemilik/') ?>css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

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
        <?php $this->load->view('Admin/IncludeAdmin/header_akun_admin'); ?>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>Jonny <strong>Deen</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
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
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">


         <form action="<?php echo $action; ?>" method="post">
    <div class="form-group">
        <label>NAMA_BARANG</label>
        <input type="text" class="form-control" name="nama_barang" required  placeholder="masukkan nim" value="<?php echo  $nama_barang; ?>">
    </div>
    <div class="form-group">
        <label>JUMLAH_BARANG</label>
        <input type="text" class="form-control" name="jumlah_barang" required  placeholder="masukkan nim" value="<?php echo  $jumlah_barang; ?>">
    </div>
    <div class="form-group">
        <label>HARGA per satuan</label>
        <input type="text" class="form-control" name="harga" required  placeholder="masukkan nim" value="<?php echo  $harga; ?>">
    </div>
    <div class="form-group">
        <label>NAMA</label>
        <input type="text" class="form-control" name="nama" required  placeholder="masukkan nim" value="<?php echo  $nama; ?>">
    </div>
    <div class="form-group">
        <label>ALAMAT</label>
        <input type="text" class="form-control" name="alamat" required  placeholder="masukkan nim" value="<?php echo  $alamat; ?>">
    </div>
    <div class="form-group">
        <label>NO HP</label>
        <input type="text" class="form-control" name="no_hp" required  placeholder="masukkan nim" value="<?php echo  $no_hp; ?>">
    </div>
    
    <input type="hidden" name="id_pembelian" value="<?php echo $id_barang; ?>"/>
    <button type="submit" class="btn btn-primary"><?php echo $button  ?></button>
    <a href="<?php echo site_url('pembelian') ?>" class="btn btn-default">cancel</a>
</form>
                <?php $this->load->view('templates/footer'); ?>

                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#example').dataTable();
                    });

                </script>





            </div>
            <!-- end page-wrapper -->

        </div>
        <!-- end wrapper -->
        <footer style="width:100%; padding:10px; background:#FFFFFF; text-align:center;">
            Copyright &copy rachma <?php echo date("Y"); ?> Powered By <a target="_blank" href="http://www.socianovation.com">Rachmawati</a>
        </footer>

        <!-- Core Scripts - Include with every page -->
        <script src="<?php echo base_url('assets_pemilik/') ?>plugins/jquery-1.10.2.js"></script>
        <script src="<?php echo base_url('assets_pemilik/') ?>plugins/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets_pemilik/') ?>plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?php echo base_url('assets_pemilik/') ?>plugins/pace/pace.js"></script>
        <script src="<?php echo base_url('assets_pemilik/') ?>scripts/siminta.js"></script>
        <!-- Page-Level Plugin Scripts-->
        <script src="<?php echo base_url('assets_pemilik/') ?>plugins/morris/raphael-2.1.0.min.js"></script>
        <script src="<?php echo base_url('assets_pemilik/') ?>plugins/morris/morris.js"></script>
        <script src="<?php echo base_url('assets_pemilik/') ?>scripts/dashboard-demo.js"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
    </body>

    </html>
