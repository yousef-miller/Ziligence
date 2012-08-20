
<?php												//to look at hyperlink index and determine range of jPeriods

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'dbConnect.php'); 
	$_ticker =$tkr; include($php.'mySQLquery_0.php');					//min && max jPeriods from hyperlink data table
    mysql_close($connection);

    if (!empty($min_period) && !empty($max_period)) {
        switch ($process) {
            case 'manual': $jPeriod = $_xPeriod; $jPeriod2 = ($jPeriod + $_vFirst < $max_period) ? ($jPeriod + $_vFirst) : $max_period; break;
            case 'override': $jPeriod = $_xPeriod; $jPeriod2 = ($jPeriod + $_vFirst < $max_period) ? ($jPeriod + $_vFirst) : $max_period; break;
            case 'mapping': $jPeriod = $min_period - 1; $jPeriod2 = $max_period; $_xPeriod = $jPeriod; break;
        } //end switch
    } //end if
} //end if

?>