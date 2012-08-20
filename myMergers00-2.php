
<?php										//to query actual link to report

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($jPeriod); unset($href_2); unset($type_2); unset($href_3); unset($type_3);					//purge variables

    $form = 'M14A';  unset($filing_date_1); include($php.'myData02-10.php');
    if (!empty($jPeriod) && $jPeriod != 'X') {													//to ferry link for 10-k / 10-q
	$chi = 0; while (++$chi <= 2) {
	    $jPeriod = ($chi == 1) ? $jPeriod : $jPeriod + 1;
	    $sql = "select distinct * from _myHLinks where ticker = '$tkr' and jPeriod = '$jPeriod'";
            $result = mysql_query($sql, $connection) or die(mysql_error());
	    unset($row); while ($row[] = mysql_fetch_array($result));

	    if (!empty($row[0][0])) {
	        $x1 = (substr($row[0][2], -2, 2) != 'fy') ? '10-Q' : '10-K';
	        $x2 = (!empty($row[0][8])) ? trim($row[0][8]) : '';
	        switch ($chi) {
		    case "1": $type_2 = $x1; $href_2 = $x2; break;
		    case "2": $type_3 = $x1; $href_3 = $x2; break;
	        } //end switch
	    } //end if
	} //loop
    } //end if
} //end if

?>