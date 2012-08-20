<?php										//to apply number formats

if ($_x0s != "true") {$x0 = ($x0 >= 0) ? number_format($x0, $_round, chr(46), chr(44)) : '('.substr(number_format($x0, $_round, chr(46), chr(44)), 1).')';}
if ($_x1s != "true") {$x1 = ($x1 >= 0) ? number_format($x1, $_round, chr(46), chr(44)) : '('.substr(number_format($x1, $_round, chr(46), chr(44)), 1).')';}
if ($_x2s != "true") {$x2 = ($x2 >= 0) ? number_format($x2, $_round, chr(46), chr(44)) : '('.substr(number_format($x2, $_round, chr(46), chr(44)), 1).')';}
if ($_x3s != "true") {$x3 = ($x3 >= 0) ? number_format($x3, $_round, chr(46), chr(44)) : '('.substr(number_format($x3, $_round, chr(46), chr(44)), 1).')';}
$x4 = ($x4 >= 0) ? number_format($x4, $_round, chr(46), chr(44)) : '('.substr(number_format($x4, $_round, chr(46), chr(44)), 1).')';
$x5 = ($x5 >= 0) ? number_format($x5, $_round, chr(46), chr(44)) : '('.substr(number_format($x5, $_round, chr(46), chr(44)), 1).')';
$r0 = ($r0 >= 0) ? number_format($r0, $_round, chr(46), chr(44)) : '('.substr(number_format($r0, $_round, chr(46), chr(44)), 1).')';
$r1 = ($r1 >= 0) ? number_format($r1, $_round, chr(46), chr(44)) : '('.substr(number_format($r1, $_round, chr(46), chr(44)), 1).')';
$r2 = ($r2 >= 0) ? number_format($r2, $_round, chr(46), chr(44)) : '('.substr(number_format($r2, $_round, chr(46), chr(44)), 1).')';

$c_x0 = ($x0[0] == chr(40)) ? 'E00000' : '707070';				//red or gray
$c_x1 = ($x1[0] == chr(40)) ? 'E00000' : '707070';
$c_x2 = ($x2[0] == chr(40)) ? 'E00000' : '707070';
$c_x3 = ($x3[0] == chr(40)) ? 'E00000' : '707070';
$c_x4 = ($x4[0] == chr(40)) ? 'E00000' : '707070';
$c_x5 = ($x5[0] == chr(40)) ? 'E00000' : '707070';
$color = array($c_x0, $c_x1, $c_x2, $c_x3, $c_x4, $c_x5);

$c_r0 = ($r0[0] == chr(40)) ? 'E00000' : '707070';
$c_r1 = ($r1[0] == chr(40)) ? 'E00000' : '707070';
$c_r2 = ($r2[0] == chr(40)) ? 'E00000' : '707070';


$c2_x0 = ($x0[0] == chr(40)) ? 'A00000' : '000000';				//red or black (for subtotal rows)
$c2_x1 = ($x1[0] == chr(40)) ? 'A00000' : '000000';
$c2_x2 = ($x2[0] == chr(40)) ? 'A00000' : '000000';
$c2_x3 = ($x3[0] == chr(40)) ? 'A00000' : '000000';
$c2_x4 = ($x4[0] == chr(40)) ? 'A00000' : '000000';
$c2_x5 = ($x5[0] == chr(40)) ? 'A00000' : '000000';
$color_2 = array($c2_x0, $c2_x1, $c2_x2, $c2_x3, $c2_x4, $c2_x5);

$c2_r0 = ($r0[0] == chr(40)) ? 'A00000' : '000000';
$c2_r1 = ($r1[0] == chr(40)) ? 'A00000' : '000000';
$c2_r2 = ($r2[0] == chr(40)) ? 'A00000' : '000000';

?>