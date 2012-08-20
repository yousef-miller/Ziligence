<?php 													//iterate through cols w/in row selection

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $xv_sum = 0; $_td = 0; $_last = 0; $skip_row = "false"; $min_len = 3;
    unset($col_sel); unset($xv); unset($xv_lbl);
    $row_sel = str_replace(chr(44), '', $row_sel);
    if ($ary_row[$row_i][0] == 1) {unset($xv_last);}										//to drop last row carryover onto border row
    $skip_col = "false"; if ($process == 'manual') {include($php.'myData06-12.php');}				//for manual process only / 1st column skip

$col_i = 0; while (++$col_i <= $col_n) {  
    $col_n = ($xv_stat == "false") ? $col_max : $col_n;	    
    if ($skip_row == "true") {break;}			
 
    if ($col_i > 1) {   
	$xv = trim(str_replace(chr(44), '', $xv));	
        include($php.'myData06-0.php');  													//column parser  
        if (!empty($xv)) {include($php.'myData06-10.php');}
        if ($col_i == $col_n && $xv_stat == "true") {
	    if (!is_numeric($xv) && !is_float($xv)) {											//to repeat extraction & potentially shift right
	        include($php.'myData06-0.php'); 
	        if (!empty($xv)) {include($php.'myData06-10.php');}
	    }  //end if  

            if (!is_numeric($xv) && !is_float($xv) && isset($xv_lbl)) {							//to catch line wraps for labels
                if (++$last_null >= 2) {unset($xv_last);}
		elseif (substr($sxv_4, -1, 1) == ':') {unset($xv_last);}	      
		elseif (substr($sxv_4, 0, 3) == '---') {unset($xv_last);}	      
		elseif ($xv == '-' || $xv == '–' || $xv == '—') {unset($xv_last);}						//for values that are "-" on report
	        else {$xv_last = ($out_n > 1) ? $sxv_4.chr(32) : "";}	
		break;      	  
            } //end if	 
	    
	    if (is_numeric($xv) || is_float($xv)) {	      			 
	        unset($xv_last); unset($last_null);												//skip blank rows (after shift left/right) 	
		if (!isset($xv_lbl)) {
		    if ($ary_row[$row_i - 1][0] == 1) {unset($ary_row[$row_i - 1][0]);}
		    if ($ary_row[$row_i][0] == 1) {unset($ary_row[$row_i][0]);}
		    if ($ary_row[$row_i + 1][0] == 1) {unset($ary_row[$row_i + 1][0]);}	
		    break;
		} //end if

		if (++$out_n > 2 && $ary_row[$row_i - 1][0] == 1) {$bdr_i = '$';} 
		elseif ($out_n > 3 && $ary_row[$row_i - 2][0] == 1) {$bdr_i = '$';} 
		else {unset($bdr_i);}				
		if ($bdr_i == '$') {
		    if ($ary_row[$row_i][0] == 1) {unset($ary_row[$row_i][0]);}
		    if ($ary_row[$row_i - 2][0] == 1) {unset($ary_row[$row_i - 2][0]);}
		    if ($ary_row[$row_i - 1][0] == 1) {unset($ary_row[$row_i - 1][0]);}
		    if ($ary_row[$row_i + 1][0] == 1) {unset($ary_row[$row_i + 1][0]);}	
		} //end if					   
	  
	        $xv_sum = (strpos($xv, chr(46), 0) !== false) ? floatval($xv+0) : intval($xv+0);			//decimal or integer	   
	        $xv_val = intval($xv_sum); $xv_sum = number_format($xv_sum, 1);
	        $x = strpos($xv_sum, chr(46), 0); 
	        if ($x !== false) {$xv_sum = substr($xv_sum, 0, $x+2);}
	        $xv_sum = str_replace(chr(44), "", $xv_sum); 	
		if ($out_n2 == 0 && $xv_sum >= $_year - 1 && $xv_sum <= $_year + 1) {unset($xv_sum);}		//to prevent header row (years)     
       
	        if (!empty($xv_sum) && $xv_val != 0) {	                 
                    $sxv_1 = $tkr.chr(44).$rYq.chr(44); 		   						
		    ++$out_n2; if ($bdr_i == '$' && $out_n2&2) {++$out_n2;}						//border rows s/b odd
		    elseif (empty($bdr_i) && $out_n2&1) {++$out_n2;}							//non-borders s/b even

		    include($php.'myData06-9.php');											//clean up hanging words
		    $xv_lbl = str_replace(chr(45), "", $xv_lbl);
	            $sxv_3 = strtolower($tkr).chr(95).$t_i.chr(95).$xv_lbl;
		    $sxv_4 = str_replace(':', "", $sxv_4);											//replace colon after line wrap
		    if (strlen($sxv_4) > 70) {
			$x = strpos($sxv_4.chr(32), chr(32), 70);
			if ($x !== false) {$sxv_4 = trim(substr($sxv_4, 0, $x));}
		    } //end if		   	    

		    unset($ary_row[$row_i][1]);												//for repeat iterations			
		    include($php.'myData06-4.php');
		    include($php.'myJoin02-1.php');												//subtotal arrays utilizing std labels (sClass)
		    $proc = 0; include($php.'myData03-3.php');   
		   } //end if 		
            } //end if
        } //end if      
    } //end if

    elseif ($col_i == 1) {  
        include($php.'myData06-0.php');  															//column parser    	
	if (strlen($xv) < $min_len) {if (++$col_i < $col_n) {include($php.'myData06-0.php');}} 				//first repeat
	if (strlen($xv) < $min_len) {if (++$col_i < $col_n) {include($php.'myData06-0.php');}}				//second repeat
	if (strlen($xv) < $min_len) {if (++$col_i < $col_n) {include($php.'myData06-0.php');}}				//third repeat
	if (strlen($xv) < $min_len) {break;}

        include($php.'myData06-2.php'); 
	if ($xv[0] == chr(45)) {$xv = substr(trim($xv), 1);}	  
        $xv = trim($xv_last.$xv); 	        	
	  $sxv_4 = $xv[0].strtolower(substr($xv, 1));         	       
	  $xv_lbl = strtolower(str_replace(chr(32), "", $xv)); 
	  $xv_lbl = str_replace(':', "", $xv_lbl);
        if ($xv_lbl == 'inandof' || $xv_lbl == 'inandin' || $xv_lbl == 'issuedin') {
            if (isset($xv_last)) {$xv_lbl = $xv_last; $sxv_4 = $xv_last;} 
	} //end if 	    

	$skip_row = (strlen($xv_lbl) < $min_len) ? "true" : "false";
	if ($skip_row == "false") {
            $a = -1; do {	        
                $x = strpos($xv_lbl, $ary_skip[++$a][0], 0);									//if xv_lbl contains certain words
		if ($x !== false) {$skip_row = "true";}
            } while ($a < count($ary_skip)); 

	    if ($skip_row == "false") {  	 
		switch ($xv_lbl) {														//if xv is/contains a certain word/phrase
		    case "total": $skip_row = "true"; break;
		    case "asof": $skip_row = "true"; break;
		    case "item": $skip_row = "true"; break;       
		} //end switch
	    } //end if
	} //end if	   
    } //end else if
} //next column
} //end if

?>