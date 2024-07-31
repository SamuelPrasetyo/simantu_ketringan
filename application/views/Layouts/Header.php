<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="3x3" href="<?=base_url()?>template/assets/images/favicon.png">

    <title><?php echo $title; ?></title>

    <!-- chartist CSS -->
    <link href="<?=base_url()?>template/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="<?=base_url()?>template/eliteadmin/dist/css/pages/eliteadmin.css" rel="stylesheet">
    <!-- tables CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <!-- Custom CSS -->
    <link href="<?=base_url()?>template/eliteadmin/dist/css/style.min.css" rel="stylesheet">
    <link href="<?=base_url()?>template/eliteadmin/dist/css/style.min.css" rel="stylesheet">




    <link href="<?=base_url()?>template/assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="<?=base_url()?>template/assets/node_modules/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="<?=base_url()?>template/assets/node_modules/jquery-asColorPicker-master/dist/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="<?=base_url()?>template/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="<?=base_url()?>template/assets/node_modules/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?=base_url()?>template/assets/node_modules/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
</head>

<body class="skin-default fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>


    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- Logo icon -->
                    <b>
                        <center><img src="<?=base_url()?>template/assets/gambar/logo_simdes.png" style="width: 80%;" alt="Logo Simdes" class="light-logo" /></center>
                    </b>
                </div>


                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                </div>
            </nav>
        </header>



        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <!-- <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false"><img src="template/assets/images/users/1.jpg" alt="user" class=""> 
                                <span class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> 
                        </a> -->
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <h1 style="color: black;"><?php echo $nama_user; ?></h1> <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu animated flipInY">
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a class="waves-effect waves-dark" href="<?= base_url('beranda') ?>" aria-expanded="false">
                                <i class="fas fa-home text-success"></i><span class="hide-menu"> Beranda</span></a>
                        </li>

                        <?php if ($this->session->userdata('akses') == 'admin') { ?>
                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-box"></i>
                                    <span class="hide-menu">Data Barang</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="<?= base_url('view_iphone') ?>">Iphone</a></li>
                                    <li><a href="<?= base_url('view_macbook') ?>">Macbook</a></li>
                                </ul>
                            </li>
                        <?php } ?>

                        <li>
                            <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Penduduk</span">
                            </a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-child"></i><span class="hide-menu"> Kelahiran</span">
                            </a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-church"></i><span class="hide-menu"> Kematian</span">
                            </a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Mutasi Masuk</span">
                            </a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Mutasi Keluar</span">
                            </a>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple"></i>
                                <span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <?php if ($this->session->userdata('akses') == 'admin') { ?>
                                    <li><a href="<?= base_url('entri_barang') ?>">Entri Data Barang</a></li>
                                <?php } ?>
                                <li><a href="<?= base_url('entri_penjualan') ?>">Entri Penjualan</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i>
                                <span class="hide-menu">Laporan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url('laporan_barang') ?>">Laporan Data Barang</a></li>
                                <li><a href="<?= base_url('laporan_penjualan') ?>">Laporan Penjualan</a></li>
                            </ul>
                        </li>

                        <li style="margin-top: 100px;">
                            <a class="waves-effect waves-dark" href="<?= base_url('logout') ?>" aria-expanded="false">
                                <i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"><?php echo $title_content; ?></a></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo $link1; ?></a></li>
                                <li class="breadcrumb-item active"><?php echo $link2; ?></a></li>
                            </ol>
                        </div>
                    </div>
                </div>