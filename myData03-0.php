<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    switch ($m) {
    	case "0": $m = "12"; break;
    	case "13": $m = "1"; break;
    } //end swtich

    $h = ($m <= 9) ? '.0' : chr(46); 
    $h1 = ($m <= 9) ? '0' : ''; 
    $p = strpos($fye_str, $h.$m, 0); 

    switch ($m) {
	case "1": $eom = "31"; break;
	case "2": $eom = ($_year % 4 == 0) ? "29" : "28"; break;					//for leap year adjustmt
	case "3": $eom = "31"; break;
	case "4": $eom = "30"; break;
	case "5": $eom = "31"; break;
	case "6": $eom = "30"; break;
	case "7": $eom = "31"; break;
	case "8": $eom = "31"; break;
	case "9": $eom = "30"; break;
	case "10": $eom = "31"; break;
	case "11": $eom = "30"; break;
	case "12": $eom = "31"; break;
    } //end switch
} //end if

?>