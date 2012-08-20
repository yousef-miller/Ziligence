<?php		//myData06 + myData02 + myJoin02

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $jRow = explode(',', $jStr); 
    if ($proc == 0) {
	if ($xvStat == 'false' && $t_i == 1) {include($php.'myData03-8.php');}					//resize factor
        $xv_sum = str_replace(chr(44), '', number_format($xv_sum / $fxVal, 1));					//resize by factor
    } //end if

    switch ($proc) {
    	case "0": $val = $xv_sum; break;	 			//j.txt <myData06>
    	case "4": $val = 'x9z'; break;					//m.txt <myJoin02>
    	case "5": $val = 'x9z'; break;					//c.txt <myJoin02>   
    	case "6": $val = 'x9z'; break;					//r.txt <myJoin02>
    	case "8": $val = 'x9z'; break;					//mx.txt <myJoin02>
    	case "9": $val = 'x9z'; break;					//cx.txt <myJoin02>   
    	case "10": $val = 'x9z'; break;					//rx.txt <myJoin02>
    } //end switch

    $xField = (substr($rYq, -2, 2) == 'fy') ? $jField_2 : $jField;								//to shift to left
    $p1 = 0; $x = -1; while (++$x < $xField) {$p1 = strpos($jStr, chr(44), $p1); ++$p1;} 
    $xL = trim(substr($jStr, 0, $p1));   	
    if ($proc == 0 || $proc == 4) {include($php.'myData03-2.php');}

    if ($proc == 0) {$val = number_format($val, 1, '.', ''); $val = trim(str_replace(chr(44), '', $val));}	//format val variable
    if (substr($rYq, -2, 2) == 'fy') {
    	if ($proc == 0) {include($php.'myData03-4.php');}									//compute Q4 values
    	else {$val = 'x9z,x9z';}
    } //end if
 
    $p2 =strpos($jStr, chr(44), $p1);													//to comp for adding 2x values
    $p2 = ($xField == $jField_2) ? strpos($jStr, chr(44), $p2 + 1) :  $p2;
    $xR = trim($val.substr($jStr, $p2));  

    if ($proc == 4) {$roll_sum = $jRow[$jField_1] + $jRow[$jField_2]  + $jRow[$jField_3];} 		//roll sum 

    if ($proc == 6 || $proc == 10) {
	$x = (substr($jRow[1], 0, 1) == "0") ? $jRow[5] : $jRow[4];
    } else {$x = $jRow[4];}

    switch ($proc) {   
   	case "0": $ary_new_str[] = array($xL.$xR); break;							//update jstring
   	 case "4": $mArray[] = array($x, $xL, $xR, $roll_sum, $jRow[$jField_3]); break;	//update mstring
    	case "5": $cArray[] = array($x, $xL, $xR); break;								//update cstring
    	case "6": $rArray[] = array($x, $xL, $xR); break;								//update rstring
    	case "8": $mxArray[] = array($x, $xL, $xR); break;							//update mxstring
    	case "9": $cxArray[] = array($x, $xL, $xR); break;							//update cxstring
    	case "10": $rxArray[] = array($x, $xL, $xR); break;							//update rxstring
    } //end switch

    if ($process == 'override') {$body = $body.$xL.$xR."\r\n";}
    unset($jStr); unset($xR); unset($xL); unset($val); unset($val_2); unset($roll_sum); unset($xv_sum);
} //end f

?>