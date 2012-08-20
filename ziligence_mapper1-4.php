<?php					//to get links to actual reports

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $_pos_str = $_pos_val; $jPeriod = $xPeriod; 
    $stat = "false"; while ($jPeriod <= $jPeriod2) {								//to make multiple attempts at detecting hyperlink	
        if ($_pos_str != $_pos_val && $stat == "true") {break;}					//tto attempt to find a quarterly link
	else {include($php.'ziligence_mapper1-7.php');}
    } //loop

    switch (strlen($_pos_val)) {
	case "1": $_pos_str = '&nbsp;&nbsp;&nbsp;&nbsp;'.$_pos_str; break;
	case "2":  $_pos_str = '&nbsp;&nbsp;'.$_pos_str; break;
	default:  $_pos_str = $_pos_str; break;
    } //end switch
} //end if

?>