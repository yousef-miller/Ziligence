<?php

if (!empty($cArray) && !empty($cxArray) && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $x = 0; while (++$x <= 2) {
        if ($x == 1) {$file_x = fopen($dPath.$cik.'C.txt', "w"); $ary_x = $cArray; unset($cArray);}			//common size
        else {$file_x = fopen($dPath.$cik.'Cx.txt', "w"); $ary_x = $cxArray; unset($cxArray);}				//common size (roll 12)

        $a = -1; while (++$a < count($ary_x)) {
	    $type = $ary_x[$a][0]; 
            $proc = '1'; include($php.'myJoin02-2.php');
            switch ($type[0]) {
                case "1": $denominator = ($x == 1) ? $sum310 : $roll310; break;
	        case "2": $denominator = ($x == 1) ? $sum310 : $roll310; break;
	        case "3": $denominator = ($x == 1) ? $sum310 : $roll310; break;
  	        case "5": $denominator = ($x == 1) ? $sum506 : $roll506; break;
	        case "7": $denominator = ($x == 1) ? $sum506 : $roll506; break;
	        default: $denominator = 0;
            } //end switch
            $percent = ($denominator != 0) ? round($sum / $denominator, 2) * 100 : 0;   
            $cResult = str_replace("x9z", $percent, $ary_x[$a][2]);														
            fwrite($file_x, $ary_x[$a][1].$cResult."\r\n");
        } //loop
       fclose($file_x); unset($file_x); unset($ary_x);
    } //next x
} //end if

?>