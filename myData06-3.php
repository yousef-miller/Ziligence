<?php		//to auto-match (if possible)

unset($match_x);

switch ($t_i) {
    case "1": $match_x = $match_1; break;
    case "2": $match_x = $match_2; break;
} //end switch

if (isset($match_x)) {
    $a = -1; while (++$a < count($match_x)) {
    	if ($match_x[$a][3] != '%') {	    
	    $x1 = strpos($xv_lbl, $match_x[$a][2], 0);
	    $x2 = strpos($xv_lbl, $match_x[$a][3], 0);
	    if ($x1 !== false && $x2 !== false) {$sClass = $match_x[$a][0]; break;}	    
    	} //end if

    	else {	   
	    $x1 = strpos($xv_lbl, $match_x[$a][2], 0);
	    if ($x1 !== false) {$sClass = $match_x[$a][0]; break;}	    
    	} //end else		
    } //loop
} //end if

unset($match_x);

?>