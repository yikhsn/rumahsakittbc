@extends('layouts.master')
@section('title')
<title>TBC APPS</title>
@endsection
@section('top_add_assets')
<!-- Stylesheets -->
<link rel="stylesheet" href="{{ URL::asset('assets/global/css/bootstrap.min.css') }}">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Script Grafik Echart -->
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
<!-- Custom CSS -->
<!-- Custom Style 1 -->
<style>
@import url('https://fonts.googleapis.com/css?family=Nanum+Gothic|Open+Sans+Condensed:300&display=swap');
</style>
<!-- Custom Style 2 -->
<style>
body {
padding-top: 0px;
/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
}
#calendar {
max-width: 100%;
}
.col-centered{
float: none;
margin: 0 auto;
}
</style>
<style type="text/css">
.card{
border-width: 1px; -webkit-box-shadow: 6px 6px 5px 0px rgba(227,227,227,1);
-moz-box-shadow: 6px 6px 5px 0px rgba(227,227,227,1);
box-shadow: 6px 6px 5px 0px rgba(227,227,227,1);
}
.card-block {
padding: 10px;
}
</style>
@endsection
@section('content')
<br>
<div class="container-fluid"><!-- Container Fluid -->
<div class="row"> <!-- row -->
<!-- Sidebar -->
<div class="col-md-2">
  <div class="list-group" style="border-width: 2px; border-color:grey;">
    <center>
    <h5 style="font-family: nanum gothic;"><b>Grafik dan Statistik</b></h5>
    </center>
    <a href="#" class="list-group-item list-group-item-action ">Klasifikasi KNN</a>
    <a href="#" class="list-group-item list-group-item-action ">Pasien</a>
    <a href="#" class="list-group-item list-group-item-action ">Demografi</a>
    <a href="#" class="list-group-item list-group-item-action ">Dokter</a>
    <a href="#" class="list-group-item list-group-item-action ">Rumah Sakit</a>
  </div>
</div>
<!-- /Sidebar -->
<!-- Body -->
<div class=col-md-10>
  <h3>Grafik KNN</h3>
  <small>Grafik Klasifikasi Persebaran Data KNN </small>
  <hr><!-- col-md 10 (grafik knn) -->
  <div class="card" style="height: 700px; width: 100%; border-radius: 0px;"><!-- card -->
  <div class="card-block"> <!-- card block -->
  <!-- Keterangan Grafik  -->
  <center>
  <br>
  <h4 class="card-title">Grafik Klasifikasi KNN Pasien Pengobatan Ulang</h4>
  <span class="dot" style="height:15px; width: 15px; background-color:#d48265; border-radius: 20px; display: inline-block;  "></span> Kambuh |
  <span class="dot" style="height:15px; width: 15px; background-color:#91c7ae; border-radius: 20px; display: inline-block;  "></span> Sembuh |
  <span class="dot" style="height:15px; width: 15px; background-color:#749f83; border-radius: 20px; display: inline-block;  "></span> Gagal |
  <span class="dot" style="height:15px; width: 15px; background-color:#ca8622; border-radius: 20px; display: inline-block;  "></span> Pindah |
  <span class="dot" style="height:15px; width: 15px; background-color:#bda29a; border-radius: 20px; display: inline-block;  "></span> Meninggal |
  </center>
  <!-- /Keterangan Grafik  -->
  <div id="container-1" style="height: 600px; width: 100% "></div>
  <!-- Grafik KNN -->
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
  <!-- /Grafik KNN -->
  </div> <!-- /card block -->
  </div><!-- /card -->
  <br>
  <br>
  <div class="card"><!-- Card Tabel KNN -->
  <br>
  <center>
  <h4 class="card-title">Tabel Hasil Klasifikasi KNN</h4>
  </center>
  <!-- Tabel KNN -->
  <div class="table">
    <table class="table ">
      <thead>
        <th>#</th>
        
        <th style="font-family: segoe ui; font-size:12px;">Nama</th>
        <th style="font-family: segoe ui; font-size:12px;">Id Pasien</th>
        <th style="font-family: segoe ui; font-size:12px;">Kriteria</th>
        <th style="font-family: segoe ui; font-size:12px;">Evaluasi</th>
        <th style="font-family: segoe ui; font-size:12px;">Jumlah Sputum</th>
        <th style="font-family: segoe ui; font-size:12px;">Hasil Sputum</th>
        <th style="font-family: segoe ui; font-size:12px;">C 1</th>
        <th style="font-family: segoe ui; font-size:12px;">C 2</th>
        <th style="font-family: segoe ui; font-size:12px;">C 3</th>
        <th style="font-family: segoe ui; font-size:12px;">Jumlah</th>
        <th style="font-family: segoe ui; font-size:12px;">Nilai KNN</th>
        
      </thead>
      <tbody>
        @foreach($pasiens_pengobatan_ulang as $pasien)
        <tr>
          <td style="font-family:segoe ui light; font-size:12px;"><b>{{ $number_pasien_knn++ }}</b></td>
          <td style="font-family: segoe ui; font-size:12px;;"><b>{{ $pasien->nama }}</b></td>
          <td style="font-family:segoe ui light; font-size:12px;">
            <center>
            {{ $pasien->id }}
            </center>
          </td>
          <td style="font-family:segoe ui light; font-size:12px;">{{ $pasien->jenis_penyakit->nama }}</td>
          <td style="font-family:segoe ui light; font-size:12px;">
            {{ $pasien->evaluasi->nama }}
          </td>
          
          <td style="font-family:segoe ui light; font-size:12px; text-align: center;">
            {{ $pasien->jumlah_sputum }}
          </td>
          <td style="font-family:segoe ui light; font-size:12px; ">
            {{ $pasien->hasil_sputum }}
          </td>
          
          <td style="font-family: segoe ui; font-size:12px;;">
            <b>
            <?php
            $nilai_sputum = $pasien->jumlah_sputum ;
            echo $nilai_sputum;
            ?>
            </b>
            
          </td>
          <td style="font-family: segoe ui; font-size:12px;;">
            <b>
            <?php
            $hasil_sputum = $pasien->hasil_sputum ;
            $nilai_hasil_sputum = 0;
            if ($hasil_sputum == "Positif") {
            $nilai_hasil_sputum = 1;
            echo $nilai_hasil_sputum;
            }
            else{
            $nilai_hasil_sputum = 2;
            echo $nilai_hasil_sputum;
            }
            ?>
            </b>
            
            
          </td>
          <td style="font-family: segoe ui; font-size:12px;;">
            <b>
            <?php
            $nilai_evaluasi = $pasien->evaluasi->id;
            echo $nilai_evaluasi;
            ?>
            </b>
            
            
          </td>
          <td style="font-family: segoe ui; font-size:12px;;">
            <center>
            <b>
            <?php
            $hasil_knn = $pasien->nilai_sputum + $nilai_hasil_sputum + $nilai_evaluasi;
            echo $hasil_knn;
            ?>
            </b>
            </center>
            
          </td>
          <td style="font-family: segoe ui; font-size:12px;;">
            <b>
            <?php $d_1 = ($pasien->nilai_sputum+9);
            $d_2 = ($nilai_hasil_sputum +9);
            $d_3 = ($nilai_evaluasi + 9);
            $d_hasil = $d_1 + $d_2 + $d_3;
            $nilai_knn = sqrt($d_hasil);
            echo $nilai_knn; ?>
            </b>
            
            
          </td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /Tabel KNN -->
  </div><!-- Card Tabel KNN -->
  <br>
  <br>
  <h3>Grafik Statistik Pasien</h3>
  <small>Visualisasi Data Pasien TBC dalam Bentuk Grafik</small>
  <hr>
  <br>
  <div class="row">
    <div class="col-md-6">
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
      <!-- End Statistik a -->
      
    </div>
    
    <div class="col-md-6">
      <h4 class="card-title">Jenis Pasien</h4>
      <hr>
      <div class="card" id="jenis-pasien-grafik" style="height: 350px; width: 100%;">
        
        
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
      <br>
      <h4 class="card-title">Jenis Kelamin Pasien</h4>
      <hr>
      <div class="card" id="grafik-pasien-baru" style="height: 350px; width: 100%;">
        <br>
        <br>
        
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
  <br>
  <br>
  <h3>Demografi Pasien</h3>
  <small>Statistik Pasien Berdasarkan Wilayah</small>
  <hr>
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

          <br>
  
  </div><!-- /col-md 10 (grafik dan Tabel knn) -->
  <!-- /Body -->
  </div> <!-- /row -->
  </div><!-- /Container Fluid -->
  @endsection
  @section('bottom_add_assets')
  <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
  @endsection