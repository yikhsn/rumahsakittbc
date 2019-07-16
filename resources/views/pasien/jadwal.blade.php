@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection


@section('top_add_assets')
    <link rel="apple-touch-icon" href="{{ URL::asset('assets/local/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('assets/local/images/favicon.ico') }}">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ URL::asset('assets/global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/local/css/site.min.css') }}">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ URL::asset('assets/global/vendor/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/vendor/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/vendor/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/vendor/intro-js/introjs.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/vendor/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/vendor/flag-icon-css/flag-icon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/vendor/waves/waves.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/vendor/fullcalendar/fullcalendar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/vendor/bootstrap-touchspin/bootstrap-touchspin.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/vendor/jquery-selective/jquery-selective.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/local/examples/css/apps/calendar.css') }}">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('assets/global/fonts/material-design/material-design.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/global/fonts/brand-icons/brand-icons.min.css') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    
    <!-- Scripts -->
    <script src="{{ URL::asset('assets/global/vendor/breakpoints/breakpoints.js') }}"></script>
    <script>
      Breakpoints();
    </script>
@endsection

@section('content')

<body class="animsition site-navbar-small app-calendar page-aside-left" style="padding-top: 0px;">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <div class="page">
      <div class="page-aside">
        <div class="page-aside-switch">
          <i class="icon md-chevron-left" aria-hidden="true"></i>
          <i class="icon md-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="page-aside-inner page-aside-scroll">
          <div data-role="container">
            <div data-role="content">

              
              <!-- Gambar Profil Pasien -->
              <br>
              <center>
                <h3>Jadwal Pengobatan</h3>
              </center>

              <!-- Statistik Pasien -->
              <section class="page-aside-section">
                <h5 class="page-aside-title">Informasi</h5>

                <div class="list-group has-actions">
                  <!-- Statistik Pengambilan Obat -->
                  <div class="list-group-item">
                      <span class="list-text">Nama Pasien</span>
                      <span class="item-right"><b>Yaumil Ikhsan</b></span>
                  </div>

                  <div class="list-group-item">
                      <span class="list-text">Tipe Pasien</span>
                      <span class="item-right"><b>Pasien Baru</b></span>
                  </div>

                  <div class="list-group-item">
                      <span class="list-text">Krireria</span>
                      <span class="item-right"><b>BTA (-)</b></span>
                  </div>

                  <div class="list-group-item">
                      <span class="list-text">Tanggal Pendaftaran</span>
                      <span class="item-right" style="font-size: 12px;"><b>21/12/2004</b></span>
                  </div>
                  <div class="list-group-item">
                      <span class="list-text">Akhir Pengobatan</span>
                      <span class="item-right" style="font-size: 12px;"><b>21/06/2005</b></span>
                  </div>

                  <div class="list-group-item">
                      <span class="list-text">Durasi Pengobatan</span>
                      <span class="item-right" ><b>3 Bulan</b></span>
                  </div>

            
              </section>


              <!-- Statistik Pasien -->
              <section class="page-aside-section">
                <h5 class="page-aside-title">Statistik</h5>

                <div class="list-group has-actions">
                  <!-- Statistik Pengambilan Obat -->
                  <div class="list-group-item">
                      <span class="list-text">Pengambilan Obat</span>
                      <span class="item-right"><b>5</b></span>
                  </div>

                  <div class="list-group-item">
                      <span class="list-text">Konsultasi Dokter</span>
                      <span class="item-right"><b>2</b></span>
                  </div>
                </div>
              </section>


              <!-- Opsi Pasien -->
              <section class="page-aside-section">
                <h5 class="page-aside-title">Opsi</h5>
                <div class="list-group has-actions">

                  <!-- Opsi Pasien -->
                  <div class="list-group-item" data-plugin="editlist">
                    <div class="list-content">
                      <span class="list-text"><a href="#">Informasi Pasien</a></span>
                    </div>
                  </div>

                  <div class="list-group-item" data-plugin="editlist">
                    <div class="list-content">
                      <span class="list-text"><a href="#">Informasi Dokter</a></span>
                    </div>
                  </div>

                  <div class="list-group-item" data-plugin="editlist">
                    <div class="list-content">
                      <span class="list-text"><a href="#">Informasi Rumah Sakit</a></span>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>


      <!-- Full calendar -->
      <div class="page-main">
        <div class="calendar-container">
          <div id="calendar">
            
          </div>

          <!--AddEvent Dialog -->
          <div class="modal fade" id="addNewEvent" aria-hidden="true" aria-labelledby="addNewEvent"
            role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
              <form class="modal-content form-horizontal" action="/pasien/{{$id}}/jadwal_store" method="post" role="form">

                {{ csrf_field() }}

                <div class="modal-header">
                  <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                  <h4 class="modal-title">Agenda Baru</h4>
                </div>
                <div class="modal-body">

                  <!-- Judul Agenda -->
                  <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="nama_jadwal">Tipe :</label>
                    <div class="col-md-10">
                      <select name="nama_jadwal" id="nama_jadwal" class="form-control">
                        <option value="Pengambilan Obat">Pengambilan Obat</option>
                        <option value="Konsultasi Dokter">Konsultasi Dokter</option>
                      </select>
                    </div>
                  </div>

                  <!-- Akhir Agenda -->
                  <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="start_at">Mulai:</label>
                    <div class="col-md-10">
                      <div class="input-group">
                        <input type="date" class="form-control" name="start_at" id="start_at" data-container="#addNewEvent">
                        <span class="input-group-addon">
                          <i class="icon md-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <!-- Akhir Agenda -->
                  <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="end_at">Akhir:</label>
                    <div class="col-md-10">
                      <div class="input-group">
                        <input type="date" class="form-control" name="end_at" id="end_at" data-container="#addNewEvent">
                        <span class="input-group-addon">
                          <i class="icon md-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <input type="hidden" value="{{ $id }}"
                    name="pasien_id" id="pasien_id" required>

                <!-- Button -->
                <div class="modal-footer">
                  <div class="form-actions">
                    <button class="btn btn-primary" type="submit">Tambah</button>
                    <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- End AddEvent Dialog -->

          <!-- Edit Dialog -->
          <div class="modal fade" id="editNewEvent" aria-hidden="true" aria-labelledby="editNewEvent"
            role="dialog" tabindex="-1" data-show="false">
            <div class="modal-dialog modal-simple">
              <form class="modal-content form-horizontal" action="#" method="post" role="form">
                <div class="modal-header">
                  <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                  <h4 class="modal-title">Edit Event</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="editEname">Name:</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" id="editEname" name="editEname">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="editStarts">Starts:</label>
                    <div class="col-md-10">
                      <div class="input-group">
                        <input type="text" class="form-control" id="editStarts" name="editStarts" data-container="#editNewEvent"
                          data-plugin="datepicker">
                        <span class="input-group-addon">
                          <i class="icon md-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="editEnds">Ends:</label>
                    <div class="col-md-10">
                      <div class="input-group">
                        <input type="text" class="form-control" id="editEnds" data-container="#editNewEvent"
                          data-plugin="datepicker">
                        <span class="input-group-addon">
                          <i class="icon md-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="editRepeats">Repeats:</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" id="editRepeats" name="repeats" data-plugin="TouchSpin"
                        data-min="0" data-max="10" value="0" />
                    </div>
                  </div>
                  <div class="form-group row" id="editColor">
                    <label class="form-control-label col-md-2">Color:</label>
                    <div class="col-md-10">
                      <ul class="color-selector">
                        <li class="bg-blue-600">
                          <input type="radio" data-color="blue|600" name="colorChosen" id="editColorChosen2">
                          <label for="editColorChosen2"></label>
                        </li>
                        <li class="bg-green-600">
                          <input type="radio" data-color="green|600" name="colorChosen" id="editColorChosen3">
                          <label for="editColorChosen3"></label>
                        </li>
                        <li class="bg-cyan-600">
                          <input type="radio" data-color="cyan|600" name="colorChosen" id="editColorChosen4">
                          <label for="editColorChosen4"></label>
                        </li>
                        <li class="bg-orange-600">
                          <input type="radio" data-color="orange|600" name="colorChosen" id="editColorChosen5">
                          <label for="editColorChosen4"></label>
                        </li>
                        <li class="bg-red-600">
                          <input type="radio" data-color="red|600" name="colorChosen" id="editColorChosen6">
                          <label for="editColorChosen6"></label>
                        </li>
                        <li class="bg-blue-grey-600">
                          <input type="radio" data-color="blue-grey|600" name="colorChosen" id="editColorChosen7">
                          <label for="editColorChosen7"></label>
                        </li>
                        <li class="bg-purple-600">
                          <input type="radio" data-color="purple|600" name="colorChosen" id="editColorChosen8">
                          <label for="editColorChosen8"></label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="editPeople">People:</label>
                    <div class="col-md-10">
                      <select id="editPeople" multiple="multiple" class="plugin-selective"></select>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="form-actions">
                    <button class="btn btn-primary" data-dismiss="modal" type="button">Save</button>
                    <button class="btn btn-danger" data-dismiss="modal" type="button">Delete</button>
                    <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- End EditEvent Dialog -->

          <!--AddCalendar Dialog -->
          <div class="modal fade" id="addNewCalendar" aria-hidden="true" aria-labelledby="addNewCalendar"
            role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple">
              <form class="modal-content form-horizontal" action="#" method="post" role="form">
                <div class="modal-header">
                  <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                  <h4 class="modal-title">New Calendar</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="ename">Name:</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" id="ename" name="ename">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="form-control-label col-md-2">Color:</label>
                    <div class="col-md-10">
                      <ul class="color-selector">
                        <li class="bg-blue-600">
                          <input type="radio" checked name="colorChosen" id="colorChosen2">
                          <label for="colorChosen2"></label>
                        </li>
                        <li class="bg-green-600">
                          <input type="radio" name="colorChosen" id="colorChosen3">
                          <label for="colorChosen3"></label>
                        </li>
                        <li class="bg-cyan-600">
                          <input type="radio" name="colorChosen" id="colorChosen4">
                          <label for="colorChosen4"></label>
                        </li>
                        <li class="bg-orange-600">
                          <input type="radio" name="colorChosen" id="colorChosen5">
                          <label for="colorChosen5"></label>
                        </li>
                        <li class="bg-red-600">
                          <input type="radio" name="colorChosen" id="colorChosen6">
                          <label for="colorChosen6"></label>
                        </li>
                        <li class="bg-blue-grey-600">
                          <input type="radio" name="colorChosen" id="colorChosen7">
                          <label for="colorChosen7"></label>
                        </li>
                        <li class="bg-purple-600">
                          <input type="radio" name="colorChosen" id="colorChosen8">
                          <label for="colorChosen8"></label>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="people">People:</label>
                    <div class="col-md-10">
                      <select id="people" multiple="multiple" class="plugin-selective"></select>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="form-actions">
                    <button class="btn btn-primary" data-dismiss="modal" type="button">Create</button>
                    <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- End AddCalendar Dialog -->
        </div>
      </div>
    </div>

    <!-- Site Action -->
    <div class="site-action" data-plugin="actionBtn">
      <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating">
        <i class="front-icon md-plus animation-scale-up" aria-hidden="true"></i>
        <i class="back-icon md-delete animation-scale-up" aria-hidden="true"></i>
      </button>
    </div>
    <!-- End Site Action -->

    <!-- Add Calendar Form -->
    <div class="modal fade" id="addNewCalendarForm" aria-hidden="true" aria-labelledby="addNewCalendarForm"
      role="dialog" tabindex="-1">
      <div class="modal-dialog modal-simple">
        <form class="modal-content" action="#" method="post" role="form">
          <div class="modal-header">
            <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
            <h4 class="modal-title">Create New Calendar</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label class="form-control-label mb-15" for="name">Calendar name:</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Calendar name">
            </div>
            <div class="form-group">
              <label class="form-control-label mb-15" for="name">Choice people to your project:</label>
              <select multiple="multiple" class="plugin-selective"></select>
            </div>
          </div>
          <div class="modal-footer">
            <div class="form-actions">
              <button class="btn btn-primary" data-dismiss="modal" type="button">Create</button>
              <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Add Calendar Form -->
<body>

@endsection

@section('bottom_add_assets')
    <!-- Core  -->
    <script src="{{ URL::asset('assets/global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/popper-js/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/animsition/animsition.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/waves/waves.js') }}"></script>
    
    <!-- Plugins -->
    <script src="{{ URL::asset('assets/global/vendor/switchery/switchery.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/intro-js/intro.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/screenfull/screenfull.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/fullcalendar/fullcalendar.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/jquery-selective/jquery-selective.min.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('assets/global/vendor/bootbox/bootbox.js') }}"></script>
    
    <!-- Scripts -->
    <script src="{{ URL::asset('assets/global/js/Component.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Plugin.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Base.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Config.js') }}"></script>
    
    <script src="{{ URL::asset('assets/local/js/Section/Menubar.js') }}"></script>
    <script src="{{ URL::asset('assets/local/js/Section/Sidebar.js') }}"></script>
    <script src="{{ URL::asset('assets/local/js/Section/PageAside.js') }}"></script>
    <script src="{{ URL::asset('assets/local/js/Plugin/menu.js') }}"></script>
    
    <!-- Config -->
    <script src="{{ URL::asset('assets/global/js/config/colors.js') }}"></script>
    <script src="{{ URL::asset('assets/local/js/config/tour.js') }}"></script>
    <script>Config.set('assets', './assets');</script>
    
    <!-- Page -->
    <script src="{{ URL::asset('assets/local/js/Site.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Plugin/asscrollable.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Plugin/slidepanel.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Plugin/switchery.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Plugin/bootstrap-touchspin.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Plugin/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Plugin/material.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Plugin/action-btn.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Plugin/editlist.js') }}"></script>
    <script src="{{ URL::asset('assets/global/js/Plugin/bootbox.js') }}"></script>
    <script src="{{ URL::asset('assets/local/js/Site.js') }}"></script>
    <script src="{{ URL::asset('assets/local/js/App/Calendar.js') }}"></script>
    <script src="{{ URL::asset('assets/local/examples/js/apps/calendar.js') }}"></script>
@endsection