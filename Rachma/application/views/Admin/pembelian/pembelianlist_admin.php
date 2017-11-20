<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('assets_pemilik/') ?>plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets_pemilik/') ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" />
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
                             <img src="<?php echo base_url('assets_pemilik/') ?>img/user.jpg" alt="">
                         </div>
                         <div class="user-info">
                            <div><?php echo $this->session->userdata('username_admin'); ?></div>
                            <div class="user-text-online">
                                <span class="user-circle-online btn btn-success btn-circle "></span>
                                   <?php 
                                    $datestring = '%h:%i %a';
                                    $time  = time(); 
                                    echo mdate($datestring, $time);?>
                            </div>
                        </div>
                    </div>
                    <!--end user image section-->
                </li>
                
                <li>
                    <a href="<?php echo site_url('Belian');?>"><i class="fa fa-shopping-bag"></i> pembelian </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Member');?>"><i class="fa fa-user"></i> data member</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Product');?>"><i class="fa fa-product-hunt"></i> product </a>
                </li>

                <li>
                    <a href="<?php echo site_url('Bayaran');?>"><i class="fa fa-money"></i> pembayaran </a>
                </li>
                
                
                
            </ul>
            <!-- end side-menu -->
        </div>
        <!-- end sidebar-collapse -->
    </nav>
    <!-- end navbar side -->
    <!--  page-wrapper -->
    <div id="page-wrapper">

      <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Data Pembelian</h1>
        </div>
        <!--End Page Header -->
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <div style="margin-top: 40px;margin-bottom: 30px;"> 
            </div>
        </div>
    </div>

    <div class="row"> 
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>id pembelian</th>
                        <th>nama barang</th>
                        <th>jumlah barang</th>
                        <th>total</th>
                        <th>nama</th>
                        <th>alamat</th>
                        <th>noHp</th>
                        <th>Keterangan</th>
                        <th>Action</th>         
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($pembelian as $key => $row){?>
                    <tr>
                        <td><?php echo $row->id_pembelian; ?></td>
                        <td><?php echo $row->nama_barang; ?></td>
                        <td><?php echo $row->jumlah_barang; ?></td>
                        <td><?php echo $row->total; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->alamat; ?></td>
                        <td><?php echo $row->no_hp; ?></td>
                        <td><?php echo $row->ket; ?></td>
                        <td>
                            <?php 
                            echo anchor(site_url('Belian/updateKet/'.$row->id_pembelian), '<i class ="fa fa-thumbs-o-up"></i>', 'class="btn btn-warning"');
                            ?>
                            <?php echo anchor(site_url('Belian/delete/'.$row->id_pembelian),
                                '<i class="fa fa-trash">
                                </i>','class="btn btn-danger"'
                                ); ?>

                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
        

        <script type="text/javascript">
            $(document).ready(function(){
                $('#example').dataTable();
            });

        </script>





    </div>
    <!-- end page-wrapper -->

</div>
<!-- end wrapper -->


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
