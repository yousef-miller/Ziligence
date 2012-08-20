
<?php																//to resize values

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {	
    if ($new == 'false') {												
        unset($s1); if (intval($jRow[$jField_3]) != 0) {$s1 = strlen(intval($jRow[$jField_3]));}
        elseif (intval($jRow[$jField_2]) != 0) {$s1 = strlen(intval($jRow[$jField_2]));}
        elseif (intval($jRow[$jField_1]) != 0) {$s1 = strlen(intval($jRow[$jField_1]));}

        if (!empty($s1)) {
	    $xvStat = 'true';														//to only pick-up first row of i/stmt
 	    $fxVal = (strlen($xv_val) - $s1 >= 3) ? 1000 : 1;							//value factor
 	    $fxVal = ($s1 - $strlen($xv_val) >= 3) ? .001 : $fxVal;						//value factor
        } //end if
    } //end if
} //end if

?>