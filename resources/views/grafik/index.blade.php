@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection


@section('top_add_assets')
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
    <!-- Script Grafik Echart -->
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
    <!-- Grafik dan Data -->
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>

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
              <h3>Statistik Data</h3>
              <hr>
              </center>
              <!-- Statistik Pasien -->
              <section class="page-aside-section">
                <h5 class="page-aside-title">Grafik</h5>
                <div class="list-group has-actions">
                  <!-- Statistik Pengambilan Obat -->
                  <div class="list-group-item">
                    <span class="list-text">K - Means</span>
                  </div>
                  <div class="list-group-item">
                    <span class="list-text">Pasien</span>
                  </div>
                  <div class="list-group-item">
                    <span class="list-text">Demografi</span>
                  </div>
                  <div class="list-group-item">
                    <span class="list-text">Dokter</span>
                  </div>
                  <div class="list-group-item">
                    <span class="list-text">Rumah Sakit</span>
                  </div>
                </div>
              </section>
            </div>
            <hr>
          </div>
        </div>
      </div>
      <div class="page-main" style="background-color: #f1f4f5;">
        <div class="container">
          <br>
          <!-- Grafik KNN untuk Pasien Baru dan Pasien Pengobatan Ulang -->
          <h3>Grafik KNN</h3>
          <small>Grafik Klasifikasi Pasien menggunakan metode K- Nearest Neighbors</small>
          <hr>
          <div class="row">
            <!-- grafik KNN Pasien Baru -->
            <div class="col-lg-6">
              <div class="card" style="height: 500px; width: 100%;">
                <div class="card-block">
                  <h4 class="card-title">Persebaran Data</h4>
                  <hr>
                  <span class="dot" style="height:15px; width: 15px; background-color:#c23531; border-radius: 20px; display: inline-block;  "></span> BTA (+) |
                  
                  <span class="dot" style="height:15px; width: 15px; background-color:#2f4554; border-radius: 20px; display: inline-block;  "></span> BTA (-) |
                  
                  <span class="dot" style="height:15px; width: 15px; background-color:#61a0a8; border-radius: 20px; display: inline-block;  "></span> Ekstra Paru
                  <div id="container" style="height: 90%; width: 100% "></div>
                  <!-- Grafik kNN pasien Baru -->
                  <script type="text/javascript">
                  var dom = document.getElementById("container");
                  var myChart = echarts.init(dom);
                  var app = {};
                  option = null;
                  var data = [
                  [3.275154, 2.957587],
                  [-3.344465, 2.603513],
                  [0.355083, -3.376585],
                  [1.852435, 3.547351],
                  [-2.078973, 2.552013],
                  [-0.993756, -0.884433],
                  [2.682252, 4.007573],
                  [-3.087776, 2.878713],
                  [-1.565978, -1.256985],
                  [2.441611, 0.444826],
                  [-0.659487, 3.111284],
                  [-0.459601, -2.618005],
                  [2.17768, 2.387793],
                  [-2.920969, 2.917485],
                  [-0.028814, -4.168078],
                  [3.625746, 2.119041],
                  [-3.912363, 1.325108],
                  [-0.551694, -2.814223],
                  [2.855808, 3.483301],
                  [-3.594448, 2.856651],
                  [0.421993, -2.372646],
                  [1.650821, 3.407572],
                  [-2.082902, 3.384412],
                  [-0.718809, -2.492514],
                  [4.513623, 3.841029],
                  [-4.822011, 4.607049],
                  [-0.656297, -1.449872],
                  [1.919901, 4.439368],
                  [-3.287749, 3.918836],
                  [-1.576936, -2.977622],
                  [3.598143, 1.97597],
                  [-3.977329, 4.900932],
                  [-1.79108, -2.184517],
                  [3.914654, 3.559303],
                  [-1.910108, 4.166946],
                  [-1.226597, -3.317889],
                  [1.148946, 3.345138],
                  [-2.113864, 3.548172],
                  [0.845762, -3.589788],
                  [2.629062, 3.535831],
                  [-1.640717, 2.990517],
                  [-1.881012, -2.485405],
                  [4.606999, 3.510312],
                  [-4.366462, 4.023316],
                  [0.765015, -3.00127],
                  [3.121904, 2.173988],
                  [-4.025139, 4.65231],
                  [-0.559558, -3.840539],
                  [4.376754, 4.863579],
                  [-1.874308, 4.032237],
                  [-0.089337, -3.026809],
                  [3.997787, 2.518662],
                  [-3.082978, 2.884822],
                  [0.845235, -3.454465],
                  [1.327224, 3.358778],
                  [-2.889949, 3.596178],
                  [-0.966018, -2.839827],
                  [2.960769, 3.079555],
                  [-3.275518, 1.577068],
                  [0.639276, -3.41284]
                  ];
                  var clusterNumber = 6;
                  // See https://github.com/ecomfe/echarts-stat
                  var step = ecStat.clustering.hierarchicalKMeans(data, clusterNumber, true);
                  var result;
                  option = {
                  timeline: {
                  top: 'center',
                  right: 35,
                  height: 300,
                  width: 10,
                  inverse: true,
                  playInterval: 2500,
                  symbol: 'none',
                  orient: 'vertical',
                  axisType: 'category',
                  autoPlay: true,
                  label: {
                  normal: {
                  show: false
                  }
                  },
                  data: []
                  },
                  baseOption: {
                  title: {
                  text: 'Pasien Baru',
                  subtext :'Klasifikasi Pasien Baru Berdasarkan Kriteria Evaluasi',
                  left: 'center'
                  },
                  xAxis: {
                  type: 'value'
                  },
                  yAxis: {
                  type: 'value'
                  },
                  series: [{
                  type: 'scatter'
                  }]
                  },
                  options: []
                  };
                  for (var i = 0; !(result = step.next()).isEnd; i++) {
                  option.options.push(getOption(result, clusterNumber));
                  option.timeline.data.push(i + '');
                  }
                  function getOption(result, k) {
                  var clusterAssment = result.clusterAssment;
                  var centroids = result.centroids;
                  var ptsInCluster = result.pointsInCluster;
                  var color = ['#c23531', '#2f4554', '#61a0a8', '#d48265', '#91c7ae', '#749f83', '#ca8622', '#bda29a', '#6e7074', '#546570', '#c4ccd3'];
                  var series = [];
                  for (i = 0; i < k; i++) {
                  series.push({
                  name: 'scatter' + i,
                  type: 'scatter',
                  animation: false,
                  data: ptsInCluster[i],
                  markPoint: {
                  symbolSize: 29,
                  label: {
                  normal: {
                  show: false
                  },
                  emphasis: {
                  show: true,
                  position: 'top',
                  formatter: function (params) {
                  return Math.round(params.data.coord[0] * 100) / 100 + '  ' +
                  Math.round(params.data.coord[1] * 100) / 100 + ' ';
                  },
                  textStyle: {
                  color: '#000'
                  }
                  }
                  },
                  itemStyle: {
                  normal: {
                  opacity: 0.7
                  }
                  },
                  data: [{
                  coord: centroids[i]
                  }]
                  }
                  });
                  }
                  return {
                  tooltip: {
                  trigger: 'axis',
                  axisPointer: {
                  type: 'cross'
                  }
                  },
                  series: series,
                  color: color
                  };
                  };
                  if (option && typeof option === "object") {
                  myChart.setOption(option, true);
                  }
                  </script>
                  
                  <!-- /Grafik KNN pasien Baru  -->
                </div>
              </div>
            </div>
            <!-- Grafik KNN Persebaran Data Untuk Pasien Pengobatan Ulang -->
            <div class="col-lg-6">
              <div class="card" style="height: 500px; width: 100%;">
                <div class="card-block">
                  <h4 class="card-title">Persebaran Data</h4>
                  <hr>
                  <span class="dot" style="height:15px; width: 15px; background-color:#d48265; border-radius: 20px; display: inline-block;  "></span> Kambuh |
                  
                  <span class="dot" style="height:15px; width: 15px; background-color:#91c7ae; border-radius: 20px; display: inline-block;  "></span> Sembuh |
                  
                  <span class="dot" style="height:15px; width: 15px; background-color:#749f83; border-radius: 20px; display: inline-block;  "></span> Gagal |
                  <span class="dot" style="height:15px; width: 15px; background-color:#ca8622; border-radius: 20px; display: inline-block;  "></span> Pindah |
                  <span class="dot" style="height:15px; width: 15px; background-color:#bda29a; border-radius: 20px; display: inline-block;  "></span> Meninggal |
                  <div id="container-1" style="height: 90%; width: 100% "></div>
                  <!-- Grafik kNN pasien Baru -->
                  <script type="text/javascript">
                  var dom = document.getElementById("container-1");
                  var myChart = echarts.init(dom);
                  var app = {};
                  option = null;
                  var data = [
                  [3.275154, 2.957587],
                  [-3.344465, 2.603513],
                  [0.355083, -3.376585],
                  [1.852435, 3.547351],
                  [-2.078973, 2.552013],
                  [-0.993756, -0.884433],
                  [2.682252, 4.007573],
                  [-3.087776, 2.878713],
                  [-1.565978, -1.256985],
                  [2.441611, 0.444826],
                  [-0.659487, 3.111284],
                  [-0.459601, -2.618005],
                  [2.17768, 2.387793],
                  [-2.920969, 2.917485],
                  [-0.028814, -4.168078],
                  [3.625746, 2.119041],
                  [-3.912363, 1.325108],
                  [-0.551694, -2.814223],
                  [2.855808, 3.483301],
                  [-3.594448, 2.856651],
                  [0.421993, -2.372646],
                  [1.650821, 3.407572],
                  [-2.082902, 3.384412],
                  [-0.718809, -2.492514],
                  [4.513623, 3.841029],
                  [-4.822011, 4.607049],
                  [-0.656297, -1.449872],
                  [1.919901, 4.439368],
                  [-3.287749, 3.918836],
                  [-1.576936, -2.977622],
                  [3.598143, 1.97597],
                  [-3.977329, 4.900932],
                  [-1.79108, -2.184517],
                  [3.914654, 3.559303],
                  [-1.910108, 4.166946],
                  [-1.226597, -3.317889],
                  [1.148946, 3.345138],
                  [-2.113864, 3.548172],
                  [0.845762, -3.589788],
                  [2.629062, 3.535831],
                  [-1.640717, 2.990517],
                  [-1.881012, -2.485405],
                  [4.606999, 3.510312],
                  [-4.366462, 4.023316],
                  [0.765015, -3.00127],
                  [3.121904, 2.173988],
                  [-4.025139, 4.65231],
                  [-0.559558, -3.840539],
                  [4.376754, 4.863579],
                  [-1.874308, 4.032237],
                  [-0.089337, -3.026809],
                  [3.997787, 2.518662],
                  [-3.082978, 2.884822],
                  [0.845235, -3.454465],
                  [1.327224, 3.358778],
                  [-2.889949, 3.596178],
                  [-0.966018, -2.839827],
                  [2.960769, 3.079555],
                  [-3.275518, 1.577068],
                  [0.639276, -3.41284]
                  ];
                  var clusterNumber = 6;
                  // See https://github.com/ecomfe/echarts-stat
                  var step = ecStat.clustering.hierarchicalKMeans(data, clusterNumber, true);
                  var result;
                  option = {
                  timeline: {
                  top: 'center',
                  right: 35,
                  height: 300,
                  width: 10,
                  inverse: true,
                  playInterval: 2500,
                  symbol: 'none',
                  orient: 'vertical',
                  axisType: 'category',
                  autoPlay: true,
                  label: {
                  normal: {
                  show: false
                  }
                  },
                  data: []
                  },
                  baseOption: {
                  title: {
                  text: 'Pasien Pengobatan Ulang',
                  subtext :'Klasifikasi Pasien Pengobatan Ulang Berdasarkan Kriteria Evaluasi',
                  left: 'center'
                  },
                  xAxis: {
                  type: 'value'
                  },
                  yAxis: {
                  type: 'value'
                  },
                  series: [{
                  type: 'scatter'
                  }]
                  },
                  options: []
                  };
                  for (var i = 0; !(result = step.next()).isEnd; i++) {
                  option.options.push(getOption(result, clusterNumber));
                  option.timeline.data.push(i + '');
                  }
                  function getOption(result, k) {
                  var clusterAssment = result.clusterAssment;
                  var centroids = result.centroids;
                  var ptsInCluster = result.pointsInCluster;
                  var color = [ '#d48265', '#91c7ae', '#749f83', '#ca8622', '#bda29a', '#6e7074', '#546570', '#c4ccd3'];
                  var series = [];
                  for (i = 0; i < k; i++) {
                  series.push({
                  name: 'scatter' + i,
                  type: 'scatter',
                  animation: false,
                  data: ptsInCluster[i],
                  markPoint: {
                  symbolSize: 29,
                  label: {
                  normal: {
                  show: false
                  },
                  emphasis: {
                  show: true,
                  position: 'top',
                  formatter: function (params) {
                  return Math.round(params.data.coord[0] * 100) / 100 + '  ' +
                  Math.round(params.data.coord[1] * 100) / 100 + ' ';
                  },
                  textStyle: {
                  color: '#000'
                  }
                  }
                  },
                  itemStyle: {
                  normal: {
                  opacity: 0.7
                  }
                  },
                  data: [{
                  coord: centroids[i]
                  }]
                  }
                  });
                  }
                  return {
                  tooltip: {
                  trigger: 'axis',
                  axisPointer: {
                  type: 'cross'
                  }
                  },
                  series: series,
                  color: color
                  };
                  };
                  if (option && typeof option === "object") {
                  myChart.setOption(option, true);
                  }
                  </script>
                  <!-- /Grafik KNN pasien Baru  -->
                </div>
              </div>
            </div>
            <!-- /Grafik KNN Pasien -->
            <!-- Tabel Data Klasifikasi KNN -->
            <div class="col-lg-12">
              <div class="card" style="height: 100%; width: 100%;">
                <div class="card-block">
                  <h4 class="card-title">Tabel Hasil Klasifikasi KNN</h4>
                  <div class="table">
                    <table class="table">
                      <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Tipe Pasien</th>
                        <th>Kriteria</th>
                        <th>Nilai KNN</th>
                        <th>Status</th>
                      </thead>
                      <tbody>
                        <?php
                        
                        for ($x = 0; $x <= 5; $x++) {
                        echo '<tr>
                          <td>1</td>
                          <td>Saiful</td>
                          <td>Pengobatan Ulang</td>
                          <td>Pasien Kambuh</td>
                          <td>7.6786</td>
                          <td style="color:red;">Gagal</td>
                        </tr>';
                        }
                        ?>
                        <?php
                        
                        for ($x = 0; $x <= 5; $x++) {
                        echo '<tr>
                          <td>1</td>
                          <td>Maryato</td>
                          <td>Pasien Baru</td>
                          <td>Pasien Kambuh</td>
                          <td>7.6786</td>
                          <td style="color:green;">Berhasil</td>
                        </tr>';
                        }
                        ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <br>
          <!-- Statistik Pasien -->
          <h3>Grafik Statistik Pasien</h3>
          <small>Visualisasi Data Pasien TBC dalam Bentuk Grafik</small>
          <hr>
          <div class="row">
            <div class="col-lg-6">
              <div class="card" style="height: 100%; width: 100%;">
                <div class="card-block">
                  <h4 class="card-title">Jumlah Pasien</h4>
                  <hr>
                  <div class="table">
                    <h5><b>Pasien Baru</b></h5>
                    <table class="table">
                      <thead>
                        <th>#</th>
                        <th>Kriteria</th>
                        <th>Pria</th>
                        <th>%</th>
                        <th>Wanita</th>
                        <th>%</th>
                        <th>Total</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>BTA(+)</td>
                          <td>{{ $jumlah_pasien_bta_plus_lelaki }}</td>
                          <td>{{ $jumlah_pasien_bta_plus_lelaki_persen }}%</td>
                          <td>{{ $jumlah_pasien_bta_plus_perempuan }}</td>
                          <td>{{ $jumlah_pasien_bta_plus_perempuan_persen }}%</td>
                          <td>{{ $jumlah_pasien_bta_plus }}</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>BTA(-)</td>
                          <td>{{ $jumlah_pasien_bta_minus_lelaki }}</td>
                          <td>{{ $jumlah_pasien_bta_minus_lelaki_persen }}%</td>
                          <td>{{ $jumlah_pasien_bta_minus_perempuan }}</td>
                          <td>{{ $jumlah_pasien_bta_minus_perempuan_persen }}%</td>
                          <td>{{ $jumlah_pasien_bta_minus }}</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Ekstra Paru</td>
                          <td>{{ $jumlah_pasien_ekstra_paru_lelaki }}</td>
                          <td>{{ $jumlah_pasien_ekstra_paru_lelaki_persen }}%</td>
                          <td>{{ $jumlah_pasien_ekstra_paru_perempuan }}</td>
                          <td>{{ $jumlah_pasien_ekstra_paru_perempuan_persen }}%</td>
                          <td>{{ $jumlah_pasien_ekstra_paru }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <br>
                  <hr>
                  <div class="table">
                    <h5><b>Pasien Pengobatan Ulang</b></h5>
                    <table class="table">
                      <thead>
                        <th>#</th>
                        <th>Kriteria</th>
                        <th>Pria</th>
                        <th>%</th>
                        <th>Wanita</th>
                        <th>%</th>
                        <th>Total</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Kambuh</td>
                          <td>{{ $jumlah_pasien_kambuh_lelaki }}</td>
                          <td>{{ $jumlah_pasien_kambuh_lelaki_persen }}%</td>
                          <td>{{ $jumlah_pasien_kambuh_perempuan }}</td>
                          <td>{{ $jumlah_pasien_kambuh_perempuan_persen }}%</td>
                          <td>{{ $jumlah_pasien_kambuh }}</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Default</td>
                          <td>{{ $jumlah_pasien_default_lelaki }}</td>
                          <td>{{ $jumlah_pasien_default_lelaki_persen }}%</td>
                          <td>{{ $jumlah_pasien_default_perempuan }}</td>
                          <td>{{ $jumlah_pasien_default_perempuan_persen }}%</td>
                          <td>{{ $jumlah_pasien_default }}</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Gagal</td>
                          <td>{{ $jumlah_pasien_gagal_lelaki }}</td>
                          <td>{{ $jumlah_pasien_gagal_lelaki_persen }}%</td>
                          <td>{{ $jumlah_pasien_gagal_perempuan }}</td>
                          <td>{{ $jumlah_pasien_gagal_perempuan_persen }}%</td>
                          <td>{{ $jumlah_pasien_gagal }}</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Lain-lain</td>
                          <td>{{ $jumlah_pasien_lain_lelaki }}</td>
                          <td>{{ $jumlah_pasien_lain_lelaki_persen }}%</td>
                          <td>{{ $jumlah_pasien_lain_perempuan }}</td>
                          <td>{{ $jumlah_pasien_lain_perempuan_persen }}%</td>
                          <td>{{ $jumlah_pasien_lain }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <hr>
                  <!-- Jumlah Keseluruhan Pasien -->
                  <div class="text-right"><h5>Total : </h5><p></p><h3>{{ $jumlah_pasien }}</h3></div>
                </div>
              </div>
            </div>
            <!-- Grafik Pasien -->
            <!-- Grafik Jenis Pasien -->
            <div class="col-lg-6">
              <h3>Jenis Pasien</h3>
              <small>Persentase Perbandingan Pasien baru dan Pengobatan Ulang</small>
              <hr>
              <div class="card" id="jenis-pasien-grafik" style="height: 30%; width: 100%;">
                <h4 class="card-title">Grafik Pasien</h4>
                <br>
                <div class="container">
                  <div class="card-body">
                    <!-- Grafik Jenis Pasien -->

                  <script type="text/javascript">
                    var dom = document.getElementById("jenis-pasien-grafik");
                    var myChart = echarts.init(dom);
                    var app = {};
                    option = null;
                    option = {
                    title : {
                    text: '',
                    x:'Lef'
                    },
                    tooltip : {
                    trigger: 'item',
                    formatter: "{a} {b} : {c} ({d}%)"
                    },
                    legend: {
                    orient: 'horizontal',
                    left: 'center',
                    data: ['Pasien Baru','Pengobatan Ulang']
                    },
                    series : [
                    {
                    name: 'Jenis Pasien',
                    type: 'pie',
                    radius : '45%',
                    center: ['50%', '50%'],
                    data:[
                    {value: {{ $jumlah_pasien_baru }}, name:'Pasien Baru'},
                    {value: {{ $jumlah_pasien_lama }}, name:'Pengobatan Ulang'}
                    ],
                    itemStyle: {
                    emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                    }
                    }
                    ]
                    };
                    ;
                    if (option && typeof option === "object") {
                    myChart.setOption(option, true);
                    }
                    </script>

                    <!-- /Grafik Jenis Pasien -->
                    
                  </div>
                </div>
              </div>
              <!-- Grafik Jenis kelamin Pasien -->
              <h3>Jenis Kelamin</h3>
              <small>Persentasi Perbandingan Jenis Kelamin Pasien</small>
              <hr>
              <div class="card" id="grafik-pasien-baru" style="height: 30%; width: 100%;">
                <br>
                <br>
                <h4 class="card-title">Grafik Pasien</h4>
                <br>
                <div class="container">
                  <div class="card-body">
                    
                    <br>
                      <script type="text/javascript">
                      var dom = document.getElementById("grafik-pasien-baru");
                      var myChart = echarts.init(dom);
                      var app = {};
                      option = null;
                      option = {
                      title : {
                      text: '',
                      x:'Lef'
                      },
                      tooltip : {
                      trigger: 'item',
                      formatter: "{a} {b} : {c} ({d}%)"
                      },
                      legend: {
                      orient: 'horizontal',
                      left: 'center',
                      data: ['Laki Laki','Perempuan']
                      },
                      series : [
                      {
                      name: 'Jenis Pasien',
                      type: 'pie',
                      radius : '45%',
                      center: ['50%', '50%'],
                      data:[
                      {value: {{ $jumlah_pasien_lelaki }}, name:'Laki Laki'},
                      {value: {{ $jumlah_pasien_perempuan }}, name:'Perempuan'}
                      ],
                      itemStyle: {
                      emphasis: {
                      shadowBlur: 10,
                      shadowOffsetX: 0,
                      shadowColor: 'rgba(0, 0, 0, 0.5)'
                      }
                      }
                      }
                      ]
                      };
                      ;
                      if (option && typeof option === "object") {
                      myChart.setOption(option, true);
                      }
                      </script>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h3>Demografi Pasien</h3>
          <small>Statistik Pasien Berdasarkan Wilayah</small>
          <hr>
        </div>
          <!-- //Grafik Pasien -->
          
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card" style="height: 100%; width: 100%;">
                  <div class="card-block">
                    <div class="table">
                      <h5><b>10 Kabupaten Penderita Terbanyak</b></h5>
                      <br>
                      <table class="table">
                        <thead>
                          <th>#</th>
                          <th>Kabupaten</th>
                          <th>Total</th>
                          <th>Persentase</th>
                        </thead>
                        <tbody>
                          @foreach($pasien_by_kabupaten as $kabupaten=>$pasiens)
                            <tr>
                              <td>{{ $number_pasien_kabupaten += 1}}</td>
                              <td>{{ $kabupaten }}</td>                          
                              <td>{{ $pasiens->count() }}</td>
                              <td>{{ ($pasiens->count() / $jumlah_pasien ) * 100 }}%</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>


                
              </div>
              <div class="col-md-6">
                <div class="card" style="height: 100%; width: 100%;">
                  <div class="card-block">
                    <div class="table">
                      <h5><b>10 Provinsi Penderita Terbanyak</b></h5>
                      <br>
                      <table class="table">
                        <thead>
                          <th>#</th>
                          <th>Provinsi</th>
                          <th>Total</th>
                          <th>Persentase</th>
                        </thead>
                        <tbody>
                          @foreach($pasien_by_provinsi as $provinsi=>$pasiens )
                            <tr>
                              <td> {{ $number_pasien_provinsi += 1}} </td>
                              <td>{{ $provinsi }}</td>                            
                              <td>{{ $pasiens->count() }}</td>
                              <td>{{ ($pasiens->count() / $jumlah_pasien ) * 100 }}%</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
</div>
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
    <script>Config.set('assets', '{{ URL::asset('assets') }}');</script>
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