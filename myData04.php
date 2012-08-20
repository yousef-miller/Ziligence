<?php    

unset($p_is_end); unset($p_bs_end); unset($p_cf_end);
$m_tx = "false"; $m_gx = "false"; $m_bx = "false"; unset($t_tx); unset($t_bx); unset($t_gx); 			//purge variables

$stmt = -1; while (++$stmt < count($ary_stmt_pos)) {  
    unset($t_txt); unset($t_txt_2); unset($ary_label_x); $verify = 'false';       
    if ($m_tx == "true" && $m_bx == "true" && $m_gx == "true") {break;}	  					//terminates loop
    
    switch ($ary_stmt_pos[$stmt][0]) {
	case "1": $table = "1"; if ($m_tx == "true") {continue;} break;
	case "2": $table = "2"; if ($m_bx == "true") {continue;} break;
	case "3": $table = "3"; if ($m_gx == "true") {continue;} break;
	default: unset($table); continue; break;
    } //end switch
  
    $t_1a = $ary_stmt_pos[$stmt][1]; 													//tbl start position
    $t_1b = $ary_stmt_pos[$stmt][2]; 													//tbl end position
    if ($ary_stmt_pos[$stmt + 1][0] == $table.'c') {
        $t_2a = $ary_stmt_pos[$stmt + 1][1];
        $t_2b = $ary_stmt_pos[$stmt + 1][2];
	if ($t_2a > $t_1a && $t_2b > $t_1b) {$t_1b = $t_2b;}   
    } //end if
    
    $replace= array(chr(32), chr(44));	
    $t_txt = substr($text_1, $t_1a, $t_1b - $t_1a); 											//isolate table selection
    $t_txt_2 = str_replace($replace, '', $t_txt);												//table w/o spaces

    if (substr_count($t_txt, '<TR') > $tbl_row_min) {  
        if ($table == "1" && $m_tx == "false") { 											//income statement	  
	    if ($process != 'manual') {$ary_label_x = $ary_label_1; include($php.'myData04-0.php');}
	    if ($process == 'manual' || $verify == 'true') {
	        if ($t_1b == $p_is_end || $t_1b == $p_bs_end || $t_1b == $p_cf_end) {continune;}  
	        else {$p_is_end = $t_1b; $m_tx = "true"; $t_tx = $t_txt;}	
	        continue; 	
	    } //end if
        } //end if

        if ($table == "2" && $m_bx == "false") {    											//balance sheet	       
	    if ($process != 'manual') {$ary_label_x = $ary_label_2; include($php.'myData04-0.php');}
	    if ($process == 'manual' || $verify == 'true') {     
	        if ($t_1b == $p_is_end || $t_1b == $p_bs_end || $t_1b == $p_cf_end) {continue;}
	        else {
		    $p_bs_end = $t_1b; $t_bx = $t_txt;
		    if (strpos($t_txt, 'ASSET') !== false && strpos($t_txt, 'LIABILIT') !== false) {$m_bx = "true";}
		} //end else 	
	        continue; 
	    } //end if	
        } //end if

        if ($table == "3" && $m_gx == "false") {    											//cash flow statement    	    
	    if ($process != 'manual') {$ary_label_x = $ary_label_3; include($php.'myData04-0.php');}
	    if ($process == 'manual' || $verify == 'true') {
	        if ($t_1b == $p_is_end || $t_1b == $p_bs_end || $t_1b == $p_cf_end) {continue;}  
	        else {$p_cf_end = $t_1b; $m_gx = "true"; $t_gx = $t_txt;} 
	        continue; 
	    } //end if
        } //end if
    } //end if
} //loop

if ($m_bx == "false" && $p_bs_end > 0) {$proc = "1"; include($php.'myData04-9.php');}				//to look for unlabeled b/s section
if ($m_bx == "false" && $p_bs_end > 0) {$proc = "2"; include($php.'myData04-9.php');}				//to look for unlabeled b/s section

include($php.'myCore00-2.php');															//to run verification script
if ($m_tx == "false" || $m_bx == "false") {$continue = "true";}

unset($t_txt); unset($t_txt_2); unset($ary_label_x);

?>