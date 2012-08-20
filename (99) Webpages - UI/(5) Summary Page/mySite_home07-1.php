<?php						//to load tmp array for valuation high/lows

$_col_offset = 0; $sum_val = 0; $min_val = 0; $max_val = 0; $denom = 0;

$count = -1; while ($count < 60) {
    ++$_col_offset;
    $xPeriod = $jField - $vFirst - $_col_offset;
    if ($xPeriod % 5) {
	++$count;
	$val_x = $row[$jField - $_col_offset];
	if ($val_x != 0) {++$denom; $sum_val = $sum_val + $val_x;}
	$max_val = ($val_x > $max_val) ? $val_x : $max_val;
	$min_val = ($val_x < $min_val) ? $val_x : $min_val;
    } //end if
} //loop

$x0 = $row[$jField_3];					//cur val
$x1 = $max_val;						//max val
$x2 = $min_val;						//min val
$x3 = $sum_val / $denom;				//avg val

if (abs($x0) > 1000) {$_x0s = "true"; $x0 = ($x0 > 0) ? sprintf("%.0E", $x0) : sprintf("(%.0E)", abs($x0));}		//scientific notation
if (abs($x1) > 1000) {$_x1s = "true"; $x1 = ($x1 > 0) ? sprintf("%.0E", $x1) : sprintf("(%.0E)", abs($x1));}
if (abs($x2) > 1000) {$_x2s = "true"; $x2 = ($x2 > 0) ? sprintf("%.0E", $x2) : sprintf("(%.0E)", abs($x2));}
if (abs($x3) > 1000) {$_x3s = "true"; $x3 = ($x3 > 0) ? sprintf("%.0E", $x3) : sprintf("(%.0E)", abs($x3));}

$_round = ($row[2] == '$') ? "2" : "1";
include($php.'mySite_home03-4.php');
unset($_x0s); unset($_x1s); unset($_x2s); unset($_x3s);						//reset scientific notation format variable

$stats_str = array($x0, $x1, $x2, $x3);
$stats_color = array($c_x0, $c_x1, $c_x2, $c_x3);

?>