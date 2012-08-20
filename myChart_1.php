<?php

$parameters = "data.addColumn('string', 'Period');";

$_fields = count($ary_chart_fields); 

$a = -1; while (++$a < count($ary_chart_values)) {
    $chart_stat = "true";
    $parameters = $parameters."data.addColumn('number', '".$ary_chart_values[$a][1]."');";
} //loop

$parameters = $parameters.'data.addRows('.$_fields.');';

$b = -1; while (++$b < $_fields) {
    $parameters = $parameters.'data.setValue('.$b.", 0, '".$ary_chart_fields[$b][0]."');";
    $c = -1; $c2 = 0; while (++$c < count($ary_chart_values)) {
        $n = substr_count($ary_chart_values[$c][2], '_') - 1;
        $x = explode('_', $ary_chart_values[$c][2]);
	$x1 = str_replace(chr(44), "", $x[$b]);
	if (substr($x1, 0, 1) == chr(40) && substr($x1, -1, 1) == chr(41)) {$x1 = substr($x1, 1, -1)*-1;}
	$x1 = intval($x1);
	$parameters = $parameters.'data.setValue('.$b.', '.++$c2.', '.$x1.');';
    } //loop
} //loop

?>
