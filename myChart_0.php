
<?php 

$chart_size ="width: 350, height: 100,";

$_chart_1 = "
<script type='text/javascript' src='https://www.google.com/jsapi'></script>
 <script type='text/javascript'>
    google.load('visualization', '1', {packages:['corechart']});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
";

$_chart_2 = "
        var chart = new google.visualization.$_chartType"."Chart(document.getElementById('chart_div'));
        chart.draw(data, {legend: 'bottom', $chart_size title: $_title});
    }
</script>
";

$_chart_earnings_data = $_chart_1.$parameters.$_chart_2;

?>
