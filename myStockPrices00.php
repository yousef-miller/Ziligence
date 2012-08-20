
<?php													////to get stock price && dividend data via Yahoo finance

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'myData01-2.php');												//set file path for s_file	
    $file_w = fopen($file_s, "w");						
    $x = getdate(); $_yr = $x[year];  $_mo = $x[mon] - 1;  $_day = $x[day];					//set current date for Yahoo URL parameters

    $url = 'http://ichart.finance.yahoo.com/table.csv?s='.$tkr.'&a=00&b=1&c=2006&d='.$_mo.'&e='.$_day.'&f='.$_yr.'&g=v&ignore=.csv';	
    $results = str_replace(chr(10), '<>', file_get_contents($url));							//get dividend information
    unset($ary_tmp); if (!empty($results)) {
        $p2 = 0; $b = 0; while (++$b < 50000) {
            $p1 = $p2 + 2; $p2 = strpos($results, '<>', $p1);
            if ($p2 === false) {break;}
            else {
	        $x = explode(',', strtoupper(substr($results, $p1, $p2 - $p1)));
	        $ary_tmp[] = array(date("Ymd", strtotime($x[0])), $x[1]);
            } //end else
        } //loop
    } //end if

    $url = 'http://finance.yahoo.com/q/hp?s='.$tkr.'+Historical+Prices';					//to pick-up most current stock quote
    $results = str_replace(chr(34), '', file_get_contents($url));
    if (!empty($results)) {
	unset($x1); unset($x2); unset($_mkt);
	$x1 = stripos($results, "<SPAN ID=YFS_MARKET_TIME");
	if ($x1 !== false) {$x1 = strpos($results, '>', $x1); $x2 = stripos($results, "</SPAN>", $x1);}
	if ($x1 !== false && $x2 !== false) {$_mkt = str_replace(chr(44), '^^', substr($results, $x1 + 1, $x2 - $x1 - 1));}

	$x1 = stripos($results, "<SPAN ID=YFS_L84_$tkr");
	if ($x1 !== false) {$x1 = strpos($results, '>', $x1); $x2 = stripos($results, "</SPAN>", $x1);}
	if ($x1 !== false && $x2 !== false) {
	    $_cur = substr($results, $x1 + 1, $x2 - $x1 - 1);
	    $_cur = ($_cur + 0 > 0) ? $_cur : 'x';
	    fwrite($file_w, "$tkr,$_current_date,x,x,x,x,x,$_cur,x,x,$_mkt"."\r\n");
	} //end if
    } //end if

    $url = 'http://ichart.finance.yahoo.com/table.csv?s='.$tkr.'&a=00&b=1&c=2006&d='.$_mo.'&e='.$_day.'&f='.$_yr.'&g=d&ignore=.csv';
    $results = str_replace(chr(10), '<>', file_get_contents($url));
    if (!empty($results)) {
        unset($_status); $p2 = 0; $b = 0; while (++$b < 50000) {						//to get stock price data & match with dividend data
            $_dividend = 0; $_yield = 0;
            $p1 = $p2 + 2; $p2 = strpos($results, '<>', $p1);
            if ($p2 === false) {break;}
            else {
	        $x = explode(',', strtoupper(substr($results, $p1, $p2 - $p1)));
	        $_date = date("Ymd", strtotime($x[0]));
	        $c = -1; while (++$c < count($ary_tmp)) {
		    if ($ary_tmp[$c][0] == $_date) {$_dividend = $ary_tmp[$c][1]; $_yield = round($_dividend / $x[6], 4);}
	        } //loop
	        $str = "$tkr,$_date,$x[1],$x[2],$x[3],$x[4],$x[5],$x[6],$_dividend,$_yield,";
	        if (stripos($str, 'OPEN,HIGH', 0) === false && strlen($str) > 20) {$_status = 'true'; fwrite($file_w, $str."\r\n");}
            } //end else
        } //loop    
        if ($_status == 'true') {
            include($php.'dbConnect.php'); 
    	        $sql = "delete from _myStockPrices where ticker = '$tkr'"; 							//delete old result set
    	        mysql_query($sql, $connection) or die(mysql_error());    
    	        $sql = "load data local infile '$file_s' into table _myStockPrices fields terminated by ','"; 		//import new result sets
    	        mysql_query($sql, $connection) or die(mysql_error());    
             mysql_close($connection);
        } //end if
    } //end if
    fclose($file_w);
} //end if

?>