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
    <link rel="icon" type="image/png" sizes="3x3" href="<?= base_url() ?>template/assets/images/favicon.png">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template/assets/node_modules/bootstrap/dist/css/bootstrap.css">

    <!-- Time Picker -->
    <link rel="stylesheet" href="<?= base_url() ?>template/assets/node_modules/timepicker/flatpickr.min.css">

    <!-- Popup CSS -->
    <link href="<?= base_url() ?>template/assets/node_modules/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <!-- chartist CSS -->
    <link href="<?= base_url() ?>template/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- tables CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <!--alerts CSS -->
    <!-- <link href="<?= base_url() ?>template/assets/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@latest/dist/sweetalert2.min.css">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>template/eliteadmin/dist/css/style.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>template/assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="<?= base_url() ?>template/assets/node_modules/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="<?= base_url() ?>template/assets/node_modules/jquery-asColorPicker-master/dist/css/asColorPicker.css" rel="stylesheet">
</head>

<body class="fixed-layout skin-blue">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>


    <div id="main-wrapper">
        <header class="topbar blue-theme">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- <div class="navxbar-header"> -->
                    <!-- Logo icon -->
                    <!-- <b>
                        <center><img src="<?= base_url() ?>template/assets/gambar/logo_simdes.png" style="width: 80%;" alt="Logo Simdes" class="light-logo" /></center>
                    </b>
                </div>


                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                </div> -->
            </nav>
        </header>

        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <center>
                            <img src="<?= base_url() ?>template/assets/gambar/logo_kabblora.png" style="width: 50%; margin: -10px 0 10px 0;" alt="Logo Simdes" class="light-logo" />
                        </center>
                        <li class="user-pro">
                            <a href="javascript:void(0)" class="has-arrow waves-effect waves-dark">
                                <img src="<?= base_url() ?>template/assets/images/users/icon-user.png" alt="user-img" class="img-circle">
                                <span class="hide-menu"><?php echo $nama_user; ?></span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <!-- <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a> -->
                                    <!-- <div class="dropdown-divider"></div> -->
                                    <a href="logout" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?= base_url('beranda') ?>" aria-expanded="false">
                                <i class="fas fa-home text-success"></i><span class="hide-menu"> Beranda</span></a>
                        </li>

                        <?php if ($this->session->userdata('akses') == 'admin') { ?>
                            <li class="">
                                <a class="waves-effect waves-dark" href="<?= base_url('view_penduduk') ?>" aria-expanded="false">
                                    <i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Penduduk</span">
                                </a>
                            </li>
                        <?php } ?>

                        <li>
                            <a class="waves-effect waves-dark" href="<?= base_url('view_kelahiran') ?>" aria-expanded="false">
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

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-note-multiple"></i>
                                <span class="hide-menu">Formulir Surat</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url('view_suratpengantar') ?>">Surat Keterangan Pengantar</a></li>
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i>
                                <span class="hide-menu">Laporan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?= base_url('beranda') ?>">A</a></li>
                                <li><a href="<?= base_url('beranda') ?>">B</a></li>
                            </ul>
                        </li>

                        <!-- <li style="margin-top: 100px;">
                            <a class="waves-effect waves-dark" href="<?= base_url('logout') ?>" aria-expanded="false">
                                <i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a>
                        </li> -->
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
            <div class="container-fluid" style="margin-top: -17px;">
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