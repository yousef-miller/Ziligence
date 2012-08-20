<?php					//to translate month to quarter

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    if (empty($filing_date_1)) {															//to record date of filing for Zack's API query
	$m = $month; include($php.'myData03-0.php'); 
	$filing_date_1 = strtotime($_year.$h1.$m.$eom);

	$m = (date("j", $sub) < 15) ?  $month - 1 : $month; 
	include($php.'myData03-0.php');
	$filing_date_2 = strtotime($_year.$h1.$m.$eom);
    } //end if
    if (empty($rY)) {$rY = $_year.date("F", $filing_date_2);}									//ex. 2011December (for stock queries)

    $m = $month; include($php.'myData03-0.php');
    if ($form == '10-Q' || $form == '10-K') {
    	if ($p === false) {$m = $month - 1; include($php.'myData03-0.php');}
    	if ($p === false) {$m = $month + 1; include($php.'myData03-0.php');}
    	if ($p === false) {$m = $month - 2; include($php.'myData03-0.php');}
    } //end if
    elseif ($form == '2.02') {
    	if ($p === false) {$m = $month - 1; include($php.'myData03-0.php');}
    	if ($p === false) {$m = $month - 2; include($php.'myData03-0.php');}
    } //end elseif
    elseif ($form == 'M14A') {
    	if ($p === false) {$m = $month + 1; include($php.'myData03-0.php');}
    	if ($p === false) {$m = $month + 2; include($php.'myData03-0.php');}
    } //end if


    if ($p !== false) {												//for translating the filing period to stdrdzd fiscal reporting years
        ++$p; switch ($form) {
    	    case '10-Q': $qtr = substr(".xx.q3.q2.q1", $p, 2); break;
    	    case '2.02': $qtr = substr(".fy.q3.q2.q1", $p, 2); break;
    	    case 'M14A': $qtr = substr(".fy.q3.q2.q1", $p, 2); break;
    	    case '10-K': $qtr = 'fy'; break;
        } //end switch    

	$_x = substr($ary_ye_2[$fye][0], $p, 2) + 0;
	$_year = ($fye <= 6) ? $_year - $_x : $_year;
	$_year = ($fye > 6 && $fye <= 9) ? $_year + $_x : $_year;
    }  //end if
} //end if

?>
