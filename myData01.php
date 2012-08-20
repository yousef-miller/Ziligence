<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($null); include($php.'myData01-2.php');									//file paths

    if ($process == 'core' && file_exists($file_j) == false) {$continue = ($form == '10-K') ? "true" : "false";} 
    if ($continue == "false") { 
	unset($ary_label_1); unset($ary_label_2); unset($ary_label_3); unset($ary_label);
        $jData_r = fopen($file_j, "r"); while ($row = trim(fgets($jData_r))) {  
	    if ($row == "<END>") {break;}
            elseif (strlen($row) < 25) {if (++$null > 25) {break;}}
	    else {unset($null); $proc = "0"; include($php.'myData01-3.php');}				//to load array of labels
        } //loop
        fclose($jData_r);   
    } //end if
} //end if
  
?> 
    