<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) { 
    $repeat = "false"; $col_max = 12; $xvStat = 'false'; $fxVal = 1;
    unset($ary_new_1); unset($ary_new_2); unset($ary_new_3); unset($body);

    $t_i = 0; while (++$t_i <= 3) {
        $out_n = 0; $out_n2 = 0; $xv_stat = 'false'; $col_n = $col_max; unset($xv_last); unset($ary_new_str);
        switch ($t_i) {
	    case "1": $T = $t_tx; break;							
	    case "2": $T = $t_bx; break;								
	    case "3": $T = $t_gx; break;								      
        } //end switch   
	if (strlen($T) < 500) {include($php.'myData06-7.php'); continue;} 					//print out unused rows
	else {include($php.'myData05.php');} 											//measure finstmt tbls   	    

       $row_i = -1; while (++$row_i <= $row_n) { 										//to iterate table rows
	    if (!empty($ary_row[$row_i][1]) && !empty($ary_row[$row_i][3])) {
                $row_sel = substr($T, $ary_row[$row_i][1], $ary_row[$row_i][3]);     
		if (!empty($row_sel) && substr_count($row_sel, '</TD') > 1) {
		    include($php.'myData06.php');     										 //to iterate columns w/in table	
		    include($php.'myCore00-6.php');										//to terminate loops @ end of report
		    if ($break == "true") {break;}
		} //end if		
	    } //end if
        } //loop  

	include($php.'myData06-11.php');												//print output
	if (strpos($process, 'manual') === false && $continue == "true") {break;}
    } //loop
} //end if

if ($continue == "false") {
    do {    
        if (strpos($body, '??', 0) === false) {break;} 
        else {str_replace('??', '?', $body);}
    } while (strpos($body, '??', 0) !== false);
    include($php.'myCore00-4.php');													//write output
} //end if

?>