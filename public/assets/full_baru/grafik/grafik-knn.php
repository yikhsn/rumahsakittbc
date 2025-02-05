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
                  