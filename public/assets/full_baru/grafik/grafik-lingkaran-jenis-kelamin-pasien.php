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
{value:335, name:'Laki Laki'},
{value:310, name:'Perempuan'}
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