<?php

if (!empty($rArray) && !empty($rxArray) && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $x = 0; while (++$x <= 2) {
        if ($x == 1) {$file_x = fopen($dPath.$cik.'R.txt', "w"); $ary_x = $rArray; unset($rArray);}			//ratio
        else {																			//ratio (roll 12)
	    $file_x = fopen($dPath.$cik.'Rx.txt', "w"); $ary_x = $rxArray; unset($rxArray);
	    $a = -1; while (++$a < count($ary_tmp)) {
	        $type = $ary_tmp[$a][0]; 
	        $_x = $ary_tmp[$a][1];
	        $proc ='2'; include($php.'myJoin02-2.php');											//redo subtotals (roll 12)
	    } //next a
        } 	//end else
	
        $a = -1; while (++$a < count($ary_x)) {
	    $type = $ary_x[$a][0];
	    if (strlen($type) > 3) {include($php.'myJoin02-3.php');} 									//for ratios		
	    else {
	        $proc  = '1'; include($php.'myJoin02-2.php');											//for variances	
	        $m = -1; while (++$m < count($ary_tmp)) {
		    if ($type == $ary_tmp[$m][0]) {
		        $x0 =  $ary_tmp[$m][2];
		        if ($x0 == "" || $x0 == 0) {$rValue = 0;}
		        else {$rValue = round(($sum - $x0) / $x0, 2) * 100;}	
		        break;
		    } //end if
	        } //next m														
	    } //end else		
	    $rResult = str_replace("x9z", $rValue, $ary_x[$a][2]);
	    fwrite($file_x, $ary_x[$a][1].$rResult."\r\n");
        } //loop
        fclose($file_x); unset($file_x); unset($ary_x);
    } //next x
} //end if

?>