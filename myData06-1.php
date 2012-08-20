<?php		//__Extract xv / Column Selection__//

unset($xv);

if (!empty($col_sel)) {
    $n = 0; $x1 = 0; do {
        $x0 = strpos($col_sel, '>', $x1); 
        $x1 = strpos($col_sel, '<', $x0);
        if ($x0 === false || $x1 === false) {break;}
        $xv = trim(substr($col_sel, $x0, $x1 - $x0));
        if ($xv != '>') {
	    $illegal = array('<', '>', '=');	
	    $xv = trim(str_replace($illegal, "", $xv));
	    if (strlen($xv) > 2) {break;}
        } //end else    
    } while (++$n < 10);

    if ($txt_file == "true" && $col_i <= $_1stCol || $txt_file == "false" && $col_i > $_1stCol) {	
        do {$xv = trim(str_replace('--', '-', $xv));} while (strpos($xv, '--', 0) !== false);     		  
    } //end if

    if ($skip_col == "true" && strlen($xv) > 2 && $col_i == 1) {unset($xv);} 					//for manual process column skipper
} //end if

?>