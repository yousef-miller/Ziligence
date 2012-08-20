<?php

unset($_stockPrice); unset($_lastDate);
$_results = '"Date, Close\n" +';

$yield_max = 0; $yield_min = 0; $yield_sum = 0; $yield_avg = 0;
unset($yield_current); unset($yield_date); 
unset($_Jan01Price); unset($_90dayPrice); unset($_365dayPrice); 
$_90dayAvgVol = 0; $_90dayVol = 0;
$_90dayHigh = 0; $_90dayLow = 0; 
$_ytdHigh = 0; $_ytdLow = 0;
$_365dayHigh = 0; $_365dayLow = 0;

$y_min = $today_y - 5;
$sql = "select distinct * from _myStockPrices where ticker = '$_ticker' and left(date, 4) > '$y_min' order by date desc";
$result = mysql_query($sql, $connection) or die(mysql_error());
$n = 0; while ($x = mysql_fetch_array($result)) {
    if (empty($x[7]) ||  $x[7] == 0) {continue;}								
    $xDate = round(($_current_date - strtotime($x[1])) / 86400, 0);			//# of days back in time from today
    $xYear = intval(substr($x[1], 0, 4));

    $_lastDate = $xYear.'-'.substr($x[1], 4, 2).'-'.substr($x[1], -2, 2);
    $_str = "$_lastDate, $x[7]";									//adjusted close price
    $_results = $_results.'"'.$_str.'\n" + ';

    if (++$n == 1) {
	$_mostRecent = $x[7]; 
	$_mostRecentDate = $_lastDate;
	$_marketTime = str_replace('^^', chr(44), $x[10]);
	$_stockPrice = array($_mostRecentDate, $_mostRecent);			//ro ferry current stock price
        if ($_break == "true") {break;}								//to break for myCore queries
    } //end if
    elseif ($n == 2) {$_todayChange = round(($_mostRecent - $x[7]) / $x[7], 4);}
    
    if ($xDate <= 90) {
	$_90dayLow = ($n == 1) ? $x[7] : $_90dayLow;
	$_90dayHigh = ($x[7] > $_90dayHigh) ? $x[7] : $_90dayHigh;
	$_90dayLow = ($x[7] < $_90dayLow) ? $x[7] : $_90dayLow;
	$_90dayVol = $_90dayVol + $x[6];
	$_90dayAvgVol = $_90dayVol / $n;
    } //end if

    if ($xDate <=365) {
	$_365dayLow = ($n == 1) ? $x[7] : $_365dayLow;
	$_365dayHigh = ($x[7] > $_365dayHigh) ? $x[7] : $_365dayHigh;
	$_365dayLow = ($x[7] < $_365dayLow) ? $x[7] : $_365dayLow;
    } //end if

    if ($today_y == $xYear) {
	$_Jan01Price = ($_mostRecent - $x[7]) / $x[7];
	$_ytdLow = ($n == 1) ? $x[7] : $_ytdLow;
	$_ytdHigh = ($x[7] > $_ytdHigh) ? $x[7] : $_ytdHigh;
	$_ytdLow = ($x[7] < $_ytdLow) ? $x[7] : $_ytdLow;
    } //end if

    if (isset($_90dayPrice) !== true && $xDate >= 90) {$_90dayPrice =($_mostRecent - $x[7]) / $x[7];}
    if (isset($_365dayPrice) !== true && $xDate >= 365) {$_365dayPrice = ($_mostRecent - $x[7]) / $x[7];}

    if ($x[8] != 0 && $xDate <= 1825) {					//to  run through last 5 years of dividend history
	$yield_min = ($n == 1) ? $x[9] : $yield_min;
 	$yield_max = ($x[9] > $yield_max) ? $x[9] : $yield_max;
 	$yield_min = ($x[9] < $yield_min) ? $x[9] : $yield_min;	
	$yield_sum = $yield_sum + $x[9];
	$yield_avg = $yield_sum / $n;
	if (isset($yield_current) === false && $xDate <= 100) {
		$yield_current = $x[9];
		$yield_date = $_lastDate;
	} //end if
    } //end if
} //loop

if ($_break != "true") {
    $_results = substr($_results, 0, -2);
    $x0 = isset($_todayChange) ? round($_todayChange * 100, 2) : 0;
    $x1 = isset($_90dayPrice) ? round($_90dayPrice * 100, 2) : 0;
    $x2 = isset($_Jan01Price) ? round($_Jan01Price * 100, 2) : 0;
    $x3 = isset($_365dayPrice) ? round($_365dayPrice * 100, 2) : 0;
    $_stockHistory = array($x0.'%', $x1.'%', $x2.'%', $x3.'%');
    $_round = 2; include($php.'mySite_home03-4.php');					//to format values
    $color_stock_history = $color;

    $x0 = $_90dayLow;
    $x1 = $_90dayHigh;
    $x2 = $_ytdLow;
    $x3 = $_ytdHigh;
    $x4 = $_365dayLow;
    $x5 = $_365dayHigh;
    $_round = 2; include($php.'mySite_home03-4.php');					//to format values
    $_90dayAvgVol = number_format($_90dayAvgVol, 0, chr(46), chr(44));
    $_stockRange = array($_90dayAvgVol, '$ '.$x0.' - '.$x1, '$ '.$x2.' - '.$x3, '$ '.$x4.' - '.$x5);

    $x0 = $yield_current * 100;
    $x1 = $yield_max * 100;
    $x2 = $yield_min * 100;
    $x3 = $yield_avg * 100;
    $_round = 2; include($php.'mySite_home03-4.php');					//to format values
    $yield_history = array( $x0, $x1, $x2, $x3, $yield_date); 
    $color_yield_history = $color;
} //end if

?>