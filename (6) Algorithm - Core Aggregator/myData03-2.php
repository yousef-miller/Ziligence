<?php		//to tag 0 rows

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $xv = (strpos($xv, chr(46), 0) !== false) ? floatval($xv) : intval($xv);	//decimal or integer	
    if ($xv != 0) {$x = $xv;}
    else {$x = 0; $a = 0; while (++$a <= $_field_year) {$x = $jRow[$a + $_vFirst - 1] + $x;}} 
	
    if ($x == 0) {$bdr_i = '!';} else {$bdr_i = (substr($jRow[2], 0, 1) == '$') ? '$!' : "";}

    $str = ""; $a = 2; while (++$a < $xField) {$str = $str.$jRow[$a].chr(44);}
    $jStr_L = $jRow[0].','.$jRow[1].','.$bdr_i.','.$str;    
} //end if

?>