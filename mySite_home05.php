<?php

unset($str1); unset($str2); 

$sql = "select * from _myRatings where ticker = '$_ticker' order by query_date desc";
$result = mysql_query($sql, $connection) or die(mysql_error());	

while($x = mysql_fetch_array($result)) {     
   switch ($x[1]) {
	case 'ZN1_Earnings_Estimates': $str1 = array($x[3],$x[4],$x[5],$x[6],$x[7],$x[8],$x[9],$x[10],
		$x[11],$x[12],$x[13],$x[14],$x[15],$x[16],$x[17]); break;
	case 'SC3_Sales_Estimates3': $str2 = array($x[3],$x[4],$x[5],$x[6],$x[7],$x[8],$x[9],$x[10]); break; 
    } //end switch
    if (isset($str1) && isset($str2)) {break;}
} //loop

$x0 = ($str1[0] >=0) ? number_format($str1[0], 2, chr(46), chr(44)) : '('.substr(number_format($str1[0], 2, chr(46), chr(44)), 1).')';
$x1 = ($str1[1] >=0) ? number_format($str1[1], 2, chr(46), chr(44)) : '('.substr(number_format($str1[1], 2, chr(46), chr(44)), 1).')';
$x2 = ($str1[2] >=0) ? number_format($str1[2], 2, chr(46), chr(44)) : '('.substr(number_format($str1[2], 2, chr(46), chr(44)), 1).')';
$x3 = ($str1[3] >=0) ? number_format($str1[3], 2, chr(46), chr(44)) : '('.substr(number_format($str1[3], 2, chr(46), chr(44)), 1).')';
$x4 = ($str1[4] >=0) ? number_format($str1[4], 2, chr(46), chr(44)) : '('.substr(number_format($str1[4], 2, chr(46), chr(44)), 1).')';
$x5 = ($str1[5] >=0) ? number_format($str1[5], 2, chr(46), chr(44)) : '('.substr(number_format($str1[5], 2, chr(46), chr(44)), 1).')';
$x6 = ($str1[6] >=0) ? number_format($str1[6], 2, chr(46), chr(44)) : '('.substr(number_format($str1[6], 2, chr(46), chr(44)), 1).')';
$x7 = ($str1[7] >=0) ? number_format($str1[7], 2, chr(46), chr(44)) : '('.substr(number_format($str1[7], 2, chr(46), chr(44)), 1).')';
$x8 = ($str1[8] >=0) ? number_format($str1[8], 2, chr(46), chr(44)) : '('.substr(number_format($str1[8], 2, chr(46), chr(44)), 1).')';
$x9 = ($str1[9] >=0) ? number_format($str1[9], 2, chr(46), chr(44)) : '('.substr(number_format($str1[9], 2, chr(46), chr(44)), 1).')';
$x10 = ($str1[10] >=0) ? number_format($str1[10], 2, chr(46), chr(44)) : '('.substr(number_format($str1[10], 2, chr(46), chr(44)), 1).')';
$x11 = ($str1[11] >=0) ? number_format($str1[11], 2, chr(46), chr(44)) : '('.substr(number_format($str1[11], 2, chr(46), chr(44)), 1).')';
$x12 = ($str1[12] >=0) ? number_format($str1[12], 1, chr(46), chr(44)) : '('.substr(number_format($str1[12], 1, chr(46), chr(44)), 1).')';   	//ltg
$x13 = ($str1[13] >=0) ? number_format($str1[13], 1, chr(46), chr(44)) : '('.substr(number_format($str1[13], 1, chr(46), chr(44)), 1).')';		//ltg
$x14 = ($str1[14] >=0) ? number_format($str1[14], 1, chr(46), chr(44)) : '('.substr(number_format($str1[14], 1, chr(46), chr(44)), 1).')';		//ltg

$c_x0 = ($x0[0] == chr(40)) ? 'E00000' : '707070';				//red or gray
$c_x1 = ($x1[0] == chr(40)) ? 'E00000' : '707070';
$c_x2 = ($x2[0] == chr(40)) ? 'E00000' : '707070';
$c_x3 = ($x3[0] == chr(40)) ? 'E00000' : '707070';
$c_x4 = ($x4[0] == chr(40)) ? 'E00000' : '707070';
$c_x5 = ($x5[0] == chr(40)) ? 'E00000' : '707070';
$c_x6 = ($x6[0] == chr(40)) ? 'E00000' : '707070';
$c_x7 = ($x7[0] == chr(40)) ? 'E00000' : '707070';
$c_x8 = ($x8[0] == chr(40)) ? 'E00000' : '707070';
$c_x9 = ($x9[0] == chr(40)) ? 'E00000' : '707070';
$c_x10 = ($x10[0] == chr(40)) ? 'E00000' : '707070';
$c_x11 = ($x11[0] == chr(40)) ? 'E00000' : '707070';
$c_x12 = ($x12[0] == chr(40)) ? 'E00000' : '707070';
$c_x13 = ($x13[0] == chr(40)) ? 'E00000' : '707070';
$c_x14 = ($x14[0] == chr(40)) ? 'E00000' : '707070';

$c2_x0 = ($x0[0] == chr(40)) ? 'A00000' : '000000';				//red or black
$c2_x1 = ($x1[0] == chr(40)) ? 'A00000' : '000000';
$c2_x2 = ($x2[0] == chr(40)) ? 'A00000' : '000000';
$c2_x3 = ($x3[0] == chr(40)) ? 'A00000' : '000000';
$c2_x4 = ($x4[0] == chr(40)) ? 'A00000' : '000000';
$c2_x5 = ($x5[0] == chr(40)) ? 'A00000' : '000000';
$c2_x6 = ($x6[0] == chr(40)) ? 'A00000' : '000000';
$c2_x7 = ($x7[0] == chr(40)) ? 'A00000' : '000000';
$c2_x8 = ($x8[0] == chr(40)) ? 'A00000' : '000000';
$c2_x9 = ($x9[0] == chr(40)) ? 'A00000' : '000000';
$c2_x10 = ($x10[0] == chr(40)) ? 'A00000' : '000000';
$c2_x11 = ($x11[0] == chr(40)) ? 'A00000' : '000000';
$c2_x12 = ($x12[0] == chr(40)) ? 'A00000' : '000000';
$c2_x13 = ($x13[0] == chr(40)) ? 'A00000' : '000000';
$c2_x14 = ($x14[0] == chr(40)) ? 'A00000' : '000000';

$x0 = (intval(abs($x0)) == "999") ? 'n/a' : $x0;
$x1 = (intval(abs($x1)) == "999") ? 'n/a' : $x1;
$x2 = (intval(abs($x2)) == "999") ? 'n/a' : $x2;
$x3 = (intval(abs($x3)) == "999") ? 'n/a' : $x3;
$x4 = (intval(abs($x4)) == "999") ? 'n/a' : $x4;
$x5 = (intval(abs($x5)) == "999") ? 'n/a' : $x5;
$x6 = (intval(abs($x6)) == "999") ? 'n/a' : $x6;
$x7 = (intval(abs($x7)) == "999") ? 'n/a' : $x7;
$x8 = (intval(abs($x8)) == "999") ? 'n/a' : $x8;
$x9 = (intval(abs($x9)) == "999") ? 'n/a' : $x9;
$x10 = (intval(abs($x10)) == "999") ? 'n/a' : $x10;
$x11 = (intval(abs($x11)) == "999") ? 'n/a' : $x11;
$x12 = (intval(abs($x12)) == "999") ? 'n/a' : $x12;
$x13 = (intval(abs($x13)) == "999") ? 'n/a' : $x13;
$x14 = (intval(abs($x14)) == "999") ? 'n/a' : $x14;

$eps = array($x0, $x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8, $x9, $x10, $x11, $x12, $x13, $x14);
$color_eps = array($c_x0, $c_x1, $c_x2, $c_x3, $c_x4, $c_x5, $c_x6, $c_x7, $c_x8, $c_x9, $c_x10, $c_x11, $c_x12, $c_x13, $c_x14);
$color_eps_2 = array($c2_x0, $c2_x1, $c2_x2, $c2_x3, $c2_x4, $c2_x5, $c2_x6, $c2_x7, $c2_x8, $c2_x9, $c2_x10, $c2_x11, $c2_x12, $c2_x13, $c2_x14);



$_max = max(abs($str2[0]), abs($str2[1]), abs($str2[2]), abs($str2[3]), abs($str2[4]), abs($str2[5]), abs($str2[6]), abs($str2[7]));
$_x = ($_max > pow(10, 9)) ? pow(10, 6) : pow(10, 0);
$_x = ($_max > pow(10, 6)) ? pow(10, 3) : $_x;

$x0 = ($str2[0] >=0) ? number_format($str2[0] / $_x, 1, chr(46), chr(44)) : '('.substr(number_format($str2[0] / $_x, 1, chr(46), chr(44)), 1).')';
$x1 = ($str2[1] >=0) ? number_format($str2[1] / $_x, 1, chr(46), chr(44)) : '('.substr(number_format($str2[1] / $_x, 1, chr(46), chr(44)), 1).')';
$x2 = ($str2[2] >=0) ? number_format($str2[2] / $_x, 1, chr(46), chr(44)) : '('.substr(number_format($str2[2] / $_x, 1, chr(46), chr(44)), 1).')';
$x3 = ($str2[3] >=0) ? number_format($str2[3] / $_x, 1, chr(46), chr(44)) : '('.substr(number_format($str2[3] / $_x, 1, chr(46), chr(44)), 1).')';
$x4 = ($str2[4] >=0) ? number_format($str2[4] / $_x, 1, chr(46), chr(44)) : '('.substr(number_format($str2[4] / $_x, 1, chr(46), chr(44)), 1).')';
$x5 = ($str2[5] >=0) ? number_format($str2[5] / $_x, 1, chr(46), chr(44)) : '('.substr(number_format($str2[5] / $_x, 1, chr(46), chr(44)), 1).')';
$x6 = ($str2[6] >=0) ? number_format($str2[6] / $_x, 1, chr(46), chr(44)) : '('.substr(number_format($str2[6] / $_x, 1, chr(46), chr(44)), 1).')';
$x7 = ($str2[7] >=0) ? number_format($str2[7] / $_x, 1, chr(46), chr(44)) : '('.substr(number_format($str2[7] / $_x, 1, chr(46), chr(44)), 1).')';

$c_x0 = ($x0[0] == chr(40)) ? 'E00000' : '707070';				//red or gray
$c_x1 = ($x1[0] == chr(40)) ? 'E00000' : '707070';
$c_x2 = ($x2[0] == chr(40)) ? 'E00000' : '707070';
$c_x3 = ($x3[0] == chr(40)) ? 'E00000' : '707070';
$c_x4 = ($x4[0] == chr(40)) ? 'E00000' : '707070';
$c_x5 = ($x5[0] == chr(40)) ? 'E00000' : '707070';
$c_x6 = ($x6[0] == chr(40)) ? 'E00000' : '707070';
$c_x7 = ($x7[0] == chr(40)) ? 'E00000' : '707070';

$c2_x0 = ($x0[0] == chr(40)) ? 'A00000' : '000000';				//red or black
$c2_x1 = ($x1[0] == chr(40)) ? 'A00000' : '000000';
$c2_x2 = ($x2[0] == chr(40)) ? 'A00000' : '000000';
$c2_x3 = ($x3[0] == chr(40)) ? 'A00000' : '000000';
$c2_x4 = ($x4[0] == chr(40)) ? 'A00000' : '000000';
$c2_x5 = ($x5[0] == chr(40)) ? 'A00000' : '000000';
$c2_x6 = ($x6[0] == chr(40)) ? 'A00000' : '000000';
$c2_x7 = ($x7[0] == chr(40)) ? 'A00000' : '000000';

$x0 = (intval(abs($x0)) == "999") ? 'n/a' : $x0;
$x1 = (intval(abs($x1)) == "999") ? 'n/a' : $x1;
$x2 = (intval(abs($x2)) == "999") ? 'n/a' : $x2;
$x3 = (intval(abs($x3)) == "999") ? 'n/a' : $x3;
$x4 = (intval(abs($x4)) == "999") ? 'n/a' : $x4;
$x5 = (intval(abs($x5)) == "999") ? 'n/a' : $x5;
$x6 = (intval(abs($x6)) == "999") ? 'n/a' : $x6;
$x7 = (intval(abs($x7)) == "999") ? 'n/a' : $x7;

$sales = array($x0, $x1, $x2, $x3, $x4, $x5, $x6, $x7); 
$color_sales= array($c_x0, $c_x1, $c_x2, $c_x3, $c_x4, $c_x5, $c_x6, $c_x7);
$color_sales_2 = array($c2_x0, $c2_x1, $c2_x2, $c2_x3, $c2_x4, $c2_x5, $c2_x6, $c2_x7);

?>