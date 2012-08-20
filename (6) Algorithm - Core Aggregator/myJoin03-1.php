<?php

if (!empty($mArray) && !empty($mxArray) && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $x = 0; while (++$x <= 2) {
        if ($x == 1) {$file_x = fopen($dPath.$cik.'M.txt', "w"); $ary_x = $mArray; unset($mArray);}		//std label
        else {$file_x = fopen($dPath.$cik.'Mx.txt', "w"); $ary_x = $mxArray; unset($mxArray);}					//std label (roll 12)

        $a = -1; while (++$a < count($ary_x)) {
            $type = $ary_x[$a][0]; unset($sum);
	    if ($x == 1) {
		$proc = '0'; include($php.'myJoin02-2.php'); 
	        $roll_sum = $sum + $ary_x[$a][3];
	        $roll_sum = ($type[0] <= 4) ? round($roll_sum / 4, 1) : $roll_sum;		//average for bal sht only
	        $ary_tmp[] = array($type, $roll_sum, $ary_x[$a][4]);					//create temp array
	        if ($type == "310") {$roll310 = $roll_sum;}							//to set denominator
	        elseif ($type == "506") {$roll506 = $roll_sum;}						//to set denominator:
	    }  //end if
	    else {
	        $m = -1; while (++$m < count($ary_tmp)) {
		    if ($type == $ary_tmp[$m][0]) {$sum = $ary_tmp[$m][1]; break;}
	        } //next m
	    } //end else
            $mResult = str_replace('x9z', $sum, $ary_x[$a][2]);	
	    fwrite($file_x, $ary_x[$a][1].$mResult."\r\n");
        } //loop
       fclose($file_x); unset($file_x); unset($ary_x);
    } //next x
} //end if

?>