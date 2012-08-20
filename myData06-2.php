<?php		// to remove all special characters, numbers, & spaces

$lbl_a = strpos($xv, chr(40), 0); $lbl_b = strpos($xv, chr(41), 0); 
if ($lbl_a !== false and $lbl_b !== false and $lbl_b > $lbl_a) {
   $xv = str_replace(substr($xv, $lbl_a, $lbl_b - $lbl_a + 1), "", $xv);
}  //end php if    
    		   
if ($col_i < $col_n) { 
    $xv = str_replace($ary_illegal_2, chr(32), $xv);		  						//removes ALL non-alph
    $xv = str_replace($thesaurus_search, $thesaurus_replace, $xv);				//thesaurus with spaces
    $xv = str_replace($thesaurus_search_2, $thesaurus_replace, $xv);				//thesaurus without spaces
    $xv = @preg_replace('/\s+/', chr(32), $xv);									//strip whitespace

   $a = 0; while (++$a <= 2) { 
        if ($a == 1) {$s = chr(32);} else {$s = "";} 
        $v1r = -1; do {
            ++$v1r; $v2r = 0; do {
	        ++$v2r; $xv = str_replace($ary_xvReplace[$v1r][0].$s.$ary_month[$v2r][0], "", $xv);
	    } while ($v2r < 12);
        } while ($v1r <= $v_n); 
        $xv = str_replace('RESPECTIVELY', "", $xv);
        $v3r = 0; do {$xv = str_replace($ary_month[++$v3r][0], "", $xv);} while ($v3r < 12);
    } //loop  

    $illegal = array(' JAN ', ' FEB ', ' MAR ', ' APR ', ' MAY ', ' JUN ', ' JUL ', ' AUG ', ' SEPT ', ' SEP ', ' OCT ', ' NOV ', ' DEC ');
    $xv = trim(str_replace($illegal, chr(32), $xv));
    $xv = trim(str_replace(' AT ', chr(32), $xv));
    $xv = trim(str_replace(' SHARES SHARES ', chr(32), $xv));
    if (substr($xv, -3, 3) == ' AT') {$xv = substr($xv, 0, -3);}						//hanging word
    if (substr($xv, -3, 3) == ' IN') {$xv = substr($xv, 0, -3);}							//hanging word
    if (substr($xv, -3, 3) == ' OF') {$xv = substr($xv, 0, -3);}						//hanging word
    if (substr($xv, -4, 4) == ' AND') {$xv = substr($xv, 0, -4);}						//hanging word


    $x = strpos($xv, 'ATTRIBUTABLE', 0); if ($x !== false) {$xv = rtrim(substr($xv, 0, $x-1));}	//to truncate
    $x = strpos($xv, 'ATTRIBUTED', 0); if ($x !== false) {$xv = rtrim(substr($xv, 0, $x-1));}	//to truncate

        $x1 = strpos($xv, 'SUPPLEMENTAL', 0); 
        $x2 = strpos($xv, 'INFORMATION', 0); 
        $x3 = strpos($xv, 'DATA', 0);
        if ($x1 !== false && $x2 !== false) {$xv = ('._.');}	//special tag for loop termination
        elseif ($x1 !== false && $x3 !== false) {$xv = ('._.');}

    if ($t_i == 2) {					//to replace entire strings (ie total baxter equity)
        $x1 = strpos($xv,'TOTAL', 0); $x2 = strpos($xv,'LIABILITIES', 0); $x3 = strpos($xv,'EQUITY', 0);
        if ($x1 !== false && $x2 === false && $x3 !== false) {$xv = 'TOTAL EQUITY';}      		
	
	$x1 = strpos($xv,'PAR', 0); $x2 = strpos($xv,'VALUE', 0); $x3 = strpos($xv,'SHARE', 0);
        if ($x1 !== false && $x2 !== false && $x3 !== false) {		//to fix class a shares
	    $x4a = strpos($xv,'CLASS A', 0); $x4b = strpos($xv,'CLASSA', 0);
	    if ($x4a !== false || $x4b !== false) {$xv = 'CLASS A PAR VALUE SHARES';}

	    $x4a = strpos($xv,'CLASS B', 0); $x4b = strpos($xv,'CLASSB', 0);
	    if ($x4a !== false || $x4b !== false) {$xv = 'CLASS B PAR VALUE SHARES';}

	    $x4a = strpos($xv,'CLASS C', 0); $x4b = strpos($xv,'CLASSC', 0);
	    if ($x4a !== false || $x4b !== false) {$xv = 'CLASS C PAR VALUE SHARES';}

	    $x4a = strpos($xv,'COMMON', 0); $x4b = strpos($xv,'STOCK', 0);	//hierarchy (after class a to c)
	    if ($x4a !== false && $x4b !== false) {$xv = 'COMMON STOCK';}

	    $x4a = strpos($xv,'PREFERRED', 0); $x4b = strpos($xv,'STOCK', 0);	//hierarchy (after class a to c)
	    if ($x4a !== false && $x4b !== false) {$xv = 'PREFERRED STOCK';}
	} //end if        
    } //end if
} //end if 

$xv = trim($xv); $xv = preg_replace('/\s+/', chr(32), $xv);									//strip whitespace

?>