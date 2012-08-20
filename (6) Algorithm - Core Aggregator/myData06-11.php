<?php															//to print output

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    switch ($t_i) {											//to prevent output when there are few rows picked up from the table
        case "1": $N = ($tbl_row_min / 2); break;
        case "2": $N = $tbl_row_min; break;
        case "3": $N = $tbl_row_min; break;
    } //end switch

    if (count($ary_new_str) >= $N) {
        $a = -1; while (++$a < count($ary_new_str)) {
            $x = trim($ary_new_str[$a][0]); 
            if (strlen($x) > 100) {$body = trim($body.'?'.$x);}       	    
        } //loop
        include($php.'myData06-7.php');										       //print out unused rows
    } //end if
    else {
        switch ($t_i) {					
           case "1": $m_tx = "false"; unset($t_tx); $continue = "true"; break; 
           case "2": $m_bx = "false"; unset($t_bx); $continue = "true"; break; 
           case "3": $m_gx = "false"; unset($t_gx); $continue = "true"; break; 
        } //end switch
    } //end else
} //end if

?>