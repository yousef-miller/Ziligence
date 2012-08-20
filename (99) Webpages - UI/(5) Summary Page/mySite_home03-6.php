<?php							//to calculate variances

$x0 = ($x0 - $x1) / $d = (intval($x1) != 0) ? $x1 : ".0001";		//Q1
$x1 = ($x1 - $x2) / $d = (intval($x2) != 0) ? $x2 : ".0001";		//Q2
$x2 = ($x2 - $x3) / $d = (intval($x3) != 0) ? $x3 : ".0001";		//Q3								
$x3 = ($x3 - $x7) / $d = (intval($x7) != 0) ? $x7 : ".0001";		//Q4

$x4 = ($x4 - $x5) / $d = (intval($x5) != 0) ? $x5 : ".0001";		//fy-1
$x5 = ($x5 - $x6) / $d = (intval($x6) != 0) ? $x6 : ".0001";		//fy-2

$r0 = ($r0 - $r1) / $d = (intval($r1) != 0) ? $r1 : ".0001";		//TTM-1
$r1 = ($r1 - $r2) / $d = (intval($r1) != 0) ? $r1 : ".0001";		//TTM-2
$r2 = ($r2 - $r3) / $d = (intval($r2) != 0) ? $r2 : ".0001";		//TTM-3

$_round = 1; include($php.'mySite_home03-4.php');		//to format numbers

?>