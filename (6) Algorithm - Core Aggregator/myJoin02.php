<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($proc); unset($ary_tmp);
    $proc = 3; while (++$proc <= 11) {
        switch ($proc) {
	    case "4": $path_x = 'M'.'.txt'; break;
	    case "5": $path_x = 'C'.'.txt'; break;
	    case "6": $path_x = 'R'.'.txt'; break;
	    case "8": $path_x = 'Mx'.'.txt'; break;
	    case "9": $path_x = 'Cx'.'.txt'; break;
	    case "10": $path_x = 'Rx'.'.txt'; break;
	    default: continue; break;
        } //end switch
        $file_x = fopen($dPath.$cik.$path_x, "r");
        while ($jStr = rtrim(fgets($file_x))) {include($php.'myData03-3.php');}
        fclose($file_x); unset($file_x); unset($path_x);
    } //loop

    include($php.'dbConnect.php'); 
    	$sql = "select distinct * from _myRData where ticker = '$tkr' and user_id = 'admin'";			//to query wtd avg shares outstanding
    	$result = mysql_query($sql, $connection) or die(mysql_error());
    	$row = mysql_fetch_row($result);
    	$str = array($sum951, $row[$jField_3], $row[$jField_2], $row[$jField_1]);	
    	$cur_wtd_shares = $sum951 + 0;
    	$ttm_wtd_shares = intval(($cur_wtd_shares + $str[1] + $str[2] + $str[3]) / 4);

        $sql = "select distinct * from _myStockPrices where ticker = '$tkr' and left(date, 6) = '$rY' order by date desc";
        $_break = "true"; include($php.'mySite_home01.php');					//to query stock price
        include($php.'myJoin02-4.php');									//to query eps for annual growth calculation
        include($php.'myJoin02-5.php');									//to query deferred taxes from prior period
    mysql_close($connection);

    include($php.'myJoin03-1.php');										//standard labels / create temp array
    include($php.'myJoin03-2.php');										//common size
    include($php.'myJoin03-3.php');										//ratios & variances

    unset($ary_x); unset($ary_tmp); unset($roll310); unset($roll506); unset($sum310); unset($sum506);
} //end if

?>