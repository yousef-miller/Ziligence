<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    if ($t_i != 2) {
    	$x = $xField - 4; 
    	$val_2 = 0; 
    	while (++$x < $xField) {$val_2 = $jRow[$x] + $val_2;}
    	$val_2 = $xv_sum - $val_2;
    	$val_2 = number_format($val_2, 1, '.', ''); 
    	$val_2 = trim(str_replace(chr(44), '', $val_2));
    } //end if

    switch ($t_i) {
    	case "1": $val = $val_2.chr(44).$val; break;
    	case "2": $val = $val.chr(44).$val; break;
    	case "3": $val = $val_2.chr(44).$val; break;
    } //end switch	
} //end if

?>