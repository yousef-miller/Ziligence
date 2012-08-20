<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $sql = "select * from _myHLinks where ticker = '$_ticker' order by jPeriod asc";					//for hyperlinks
    $result = mysql_query($sql, $connection) or die(mysql_error());

    unset($x); unset($xn); unset($min_period); unset($max_period);
    while ($row = mysql_fetch_array($result)) {
        $x = $row[3];
        $x1 = strtoupper($row[2]);
        $x2 = (substr($row[8], -6, 6) == 'txt.htm') ? (substr($row[8], 0, -6).'.htm') : $row[8];			//hyperlink to report (logic is fix for text link error)

        $ary_query[$x] = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$x2);	
        $ary_query_2[] = array($row[0],$row[1],$x1,$row[3],$row[4],$row[5],$row[6],$row[7],$x2);	

        if (++$xn == 1) {$min_period = $x;}												//set min jPeriod 
        $max_period = $x;																//set max jPeriod
    } //loop
} //end if

?>