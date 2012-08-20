
<?php						//to update myFails priority list based upon null query results

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $sql = "select * from _myFails where ticker = '$_ticker' and jPeriod = '$a'";					//to see if this null period was logged
    $result2 = mysql_query($sql, $connection) or die(mysql_error());
    unset($fail_1); while ($fail_1[] = mysql_fetch_array($result2));

    if (!empty($fail_1[0][0])) {
	$sql = "select * from _myFails_2 where ticker = '$_ticker' and jPeriod = '$a'";				//to see if this null period was logged
        $result2 = mysql_query($sql, $connection) or die(mysql_error());
        unset($fail_2); while ($fail_2[] = mysql_fetch_array($result2));

	unset($fail_stat); if (empty($fail_2[0][0])) {
	    $x = time(); $file_x = fopen($myFails_2, "w"); fwrite($file_x, "$_ticker,$cik,$a,$_user_id,$x"); fclose($file_x);
    	    $sql = "load data local infile '$myFails_2' into table _myFails_2 fields terminated by ','"; 				//load to mySQL
    	    mysql_query($sql, $connection) or die(mysql_error()); $fail_stat = 'true';
        } //end if
    } //end if

    if (!empty($fail_1) || $fail_stat == 'true') {
        $_alert_str = 'Content is still under construction.  Check back within 24 hours for updated content.';		//for alert string message
        $_alert_str = "<div align=left><font size = '1.50' color='FF0000'>$_alert_str</font></div>";
    } //end if
} //end if

?>