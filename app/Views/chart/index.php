<style>
#chart { 
  height: 500px;
}
</style>

<div id="chart"></div>

<script src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!-- google fonts from CDN -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<!-- highcharts -->
<script src="http://code.highcharts.com/highcharts.js"></script>

<script>
function startTime() {
    var dom1 = Math.floor(Math.random() * 201);
    var dom2 = Math.floor(Math.random() * 201);
    var dom3 = Math.floor(Math.random() * 101);
    var dom4 = Math.floor(Math.random() * 201);
    var dom5 = Math.floor(Math.random() * 151);
    var dom6 = Math.floor(Math.random() * 101);
    var dom7 = Math.floor(Math.random() * 201);
    var dom8 = Math.floor(Math.random() * 101);
    var dom9 = Math.floor(Math.random() * 201);
    var dom10 = Math.floor(Math.random() * 101);
    var dom11= Math.floor(Math.random() * 201);
// var dom = Math.floor(Math.random() * 101);

var chartSelector = '#chart';
var labelSelector = '> g:eq(1) g text';

var data = [
  [ 'Apples', dom1],
  [ 'Oranges', dom2 ],
  [ 'Peaches', dom3 ],
  [ 'Pears', dom4 ],
  [ 'grapes', dom5 ],
  [ 'Bananas', dom6 ],
  [ 'tea', dom7 ],
  [ 'beer', dom8 ],
  [ 'water', dom9 ],
  [ 'milk', dom10 ],
  [ 'chocolate', dom11 ]
];

google.load('visualization', '1.1', { packages: ['corechart', 'line'] });
google.setOnLoadCallback(function() {
  var table = new google.visualization.DataTable({
    cols : [
      { id : 'name', label : 'Name', type : 'string' },
      { id : 'value', label : 'Value', type : 'number' }
    ]
  });
  table.addRows( data );
  var chartContainer = $(chartSelector)[0];
  var chart = new google.visualization.PieChart(chartContainer);
  chart.draw(table, { title : 'Classifications' });
  var svg = $('svg', chartContainer );
  $(labelSelector, svg).each(function (i, v) {
    var total = table.getValue(i, 1);
    var newLabel = $(this).text() + '(' + total + ')';
    $(this).text( newLabel );
  });

});
setTimeout(startTime, 1000);
}
setTimeout(startTime, 0);
</script>
