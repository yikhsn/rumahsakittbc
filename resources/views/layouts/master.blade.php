<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        @yield('title')

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="_token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
        <!-- DataTables -->
        <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ URL::asset('assets/js/modernizr.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body>

        <!-- Navigation Bar-->
        <header id="topnav" style="background-color: #2d3035;">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <a href="/" class="logo">
                            <span class="logo-small"><i class="mdi mdi-hospital-marker"></i></span>
                            <span class="logo-large"><i class="mdi mdi-hospital-marker"></i> TBC APPS</span>
                        </a>
                    </div>
                    <!-- End Logo container-->

                    <div class="navbar-custom">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">

                                <!-- PASIEN -->
                                <li class="has-submenu">
                                    <a href="#"> <span><i class="ti-user"></i></span><span> Pasien </span> </a>
                                    <ul class="submenu">
                                        <li>
                                            <a class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-sm" style="text-align: left;"><i class="mdi mdi-account-plus" style="color:black;"></i>   Tambah Pasien</a>
                                        </li>
                                        <li>
                                            <a href="/pasien" style="color:black;"><i class=" mdi mdi-format-list-bulleted" style="color:black;"></i>   Daftar Pasien</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- DOKTER -->
                                <li class="has-submenu">
                                    <a href="#"> <span><i class="mdi mdi-stethoscope"></i></span><span> Dokter </span> </a>
                                    <ul class="submenu">
                                        <li><a href="/dokter/add"><i class="mdi mdi-stethoscope " style="color:black;"></i>   Tambah Dokter</a></li>
                                        <li><a href="/dokter"><i class="mdi mdi-format-list-bulleted" style="color:black;"></i>   Daftar Dokter</a></li>
                                    </ul>
                                </li>

                                <!-- RUMAH SAKIT -->
                                <li class="has-submenu">
                                    <a href="#"> <span><i class="mdi mdi-hospital-building"></i></span><span> Rumah Sakit </span> </a>
                                    <ul class="submenu">
                                        <li><a href="/rumahsakit/add"><i class="mdi mdi-plus-box" style="color:black;"></i>   Tambah Rumah Sakit</a></li>
                                        <li><a href="/rumahsakit"><i class="mdi mdi-format-list-bulleted" style="color:black;"></i>   Daftar Rumah Sakit</a></li>
                                    </ul>
                                </li>

                                <!-- GRAFIKS  -->
                                <li class="has-submenu">
                                    <a href="grafik.php"> <span><i class="mdi mdi-trending-up"></i></span><span> Grafik </span> </a>
                                </li>

                                <!-- HALAMAN -->
                                <li class="has-submenu">
                                    <a href=""  class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-lg" style="text-align: left;"><i class="mdi mdi-blur-radial" style="color:white;"></i>   Halaman</a>
                                </li>

                            </ul>
                            <!-- End navigation menu -->
                        </div> <!-- end #navigation -->
                    </div> <!-- end navbar-custom -->


                    <!-- MODAL PILIH PASIEN LAMA DAN PASIEN BARU -->
                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mySmallModalLabel">Tambah Pasien Baru</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <center>
                                    <i class="mdi mdi-account-plus" style="font-size:150px;"></i>
                                    <br>
                                    <p>Pilih Jenis Pasien :</p>
                                    <br>
                                    <a href="/pasien/new/id" class="btn btn-primary" style="width: 220px;">Pasien Baru</a>
                                    <br>
                                    <br>
                                    <a href="/pasien/old/id" class="btn btn-danger" style="width: 220px;">Pasien Pengobatan Ulang</a>
                                    </center>
                                    
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- MODAL UNTUK MENU HALAMAN -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Halaman</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card-box">
                                                <center>
                                                    <p>Akun</p>
                                                    <hr>
                                                <i class="mdi mdi-account-plus" style="font-size:50px;">
                                                </i>
                                                <br>
                                                <a href="/register" style="color:#808080"> Tambah Akun</a>
                                                <br>
                                                <br>
                                                <i class="mdi mdi-account-card-details" style="font-size:50px;">
                                                </i>
                                                <br>
                                                <a href="/daftar-user" style="color:#808080"> Daftar Akun</a>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-box">
                                                <center>
                                                    <p>Basis Pengetahuan</p>
                                                    <hr>
                                                <i class="mdi  mdi mdi-book-open-variant" style="font-size:50px;">
                                                </i>
                                                <br>
                                                <a href="basis-pengetahuan.php" style="color:#808080"> Basis Pengetahuan</a>
                                                <br>
                                                <br>
                                                <i class="mdi mdi mdi-book-multiple" style="font-size:50px;">
                                                </i>
                                                <br>
                                                <a href="/referensi/kriteria" style="color:#808080"> Referensi Kriteria</a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="menu-extras topbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <!-- NOTIFIKASI -->
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell"></i> <span class="ml-1 pro-user-name">Notifikasi <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left  " style="width: 350px;">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6>Notifikasi <small><a href="notifikasi.php" style="text-align: right;">Selengkapnya..</a></small></h6>
                                        <div class="text-right">
                                            
                                        </div>
                                        <hr>
                                    </div>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item" >
                                        <i class="ti-user"></i> Pasien Baru Ditambahkan
                                        
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item" >
                                        <i class="ti-user"></i> Jadwal Minum Obat : Ahmad Junaidi 
                                        
                                    </a>
                                </div>
                            </li>

                            <!-- USER  -->
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ URL::asset('assets/images/users/avatar-1.svg') }}" alt="user" class="rounded-circle">
                                    <span class="ml-1 pro-user-name">
                                        <i class="mdi mdi-chevron-down">
                                            {{{ isset(Auth::user()->name) ? ucfirst(Auth::user()->name) : 'User' }}}
                                        </i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <!-- <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Nama Pengguna</h6>
                                    </div> -->

                                    <!-- item-->
                                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-user"></i> <span>My Account</span>
                                    </a> -->

                                    <!-- item-->
                                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-settings"></i> <span>Settings</span>
                                    </a> -->

                                    <!-- item-->
                                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-lock"></i> <span>Lock Screen</span>
                                    </a> -->

                                    <!-- item-->
                                    <a href="/logout" class="dropdown-item notify-item">
                                        <i class="ti-power-off"></i> <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div><!-- end menu-extras -->

                    <div class="clearfix"></div>
                </div> <!-- end container -->
            </div><!-- end topbar-main -->
        </header><!-- End Navigation Bar-->


        @yield('content')
        <!-- Moment JS -->
        <script src="{{ URL::asset('assets/js/moment.min.js') }}"></script>
        <!-- jQuery  -->
        <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery.slimscroll.js') }}"></script>
        <!-- Required datatable js -->
        <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
        <!-- Responsive examples -->
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
        <!--Morris Chart-->
        <script src="{{ URL::asset('assets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/raphael/raphael-min.js') }}"></script>
        <!-- Dashboard init -->
        <script src="{{ URL::asset('assets/pages/jquery.dashboard.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery.app.js') }}"></script>
        <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>