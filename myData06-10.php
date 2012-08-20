<?php										//only for value (not label) extraction
							
$illegal = array(chr(32), chr(44));				//spaces&commas
$xv = trim(str_replace($illegal, '', $xv)); 		
       
if ($xv[0] == chr(40) && $xv[1] >= 0) {
    $illegal = array(chr(40), chr(41));			//parenthesis
    $xv = str_replace($illegal, "", $xv); 
    $xv = trim($xv);
    $xv = trim($xv + 0) * -1;
} //end if     

if (is_numeric($xv) || is_float($xv) && $col_i < $col_n) {
    if ($xv_stat == "true") {$col_n = $col_i;}   //to shift left
    elseif ($xv_stat == "false") { 
        if ($xv == $_year || $xv == $_year - 1 || $xv == $_year - 2) {$xv = "";}          
	else {$col_n = $col_i; $xv_stat = "true";}       
    } //end elseif    
} //end if

?>