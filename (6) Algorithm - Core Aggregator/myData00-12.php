
<?php

if (!empty($fye) && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    if (empty($tArray) || empty($ary_ye) || empty($ary_qtr)) {include($php.'myData00-0.php');}
    $yStr = explode('.', $ary_ye_2[intval(substr($fye, 0, 2))][0]);									//year end string values
    $qStr = explode('.', $ary_qtr[intval(substr($fye, 0, 2))][0]);									//qtr end string values
    unset($tArray_2); $tArray_2[0] = array("null"); $x = -1; while (++$x < count($tArray)) {
        $yre = substr($tArray[$x][0], 0, 4);
        switch (substr($tArray[$x][0], -2, 2)) {
	    case "q1": $eom = intval($qStr[4]); $eoy = $yre + intval($yStr[4]); break;
	    case "q2": $eom = intval($qStr[3]); $eoy = $yre + intval($yStr[3]); break;
	    case "q3": $eom = intval($qStr[2]); $eoy = $yre + intval($yStr[2]); break;
	    case "q4": $eom = intval($qStr[1]); $eoy = $yre + intval($yStr[1]); break;
	    case "fy": $eom = intval($qStr[1]); $eoy = $yre + intval($yStr[1]); break;
        } //end switch
        $tArray_2[$x] = ($eom <= 9) ? array("$eoy/0$eom") : array("$eoy/$eom");						//create tArray_2 to mirror tArray
    } //loop
} //end if

?>
