<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {  
    $file_j = $dPath.$cik.'J.txt'; 			//original label string
    $file_m = $dPath.$cik.'M.txt'; 			//std label string
    $file_c = $dPath.$cik.'C.txt'; 			//common sized strings
    $file_r = $dPath.$cik.'R.txt';			//ratio string
    $file_mx = $dPath.$cik.'Mx.txt'; 		//std label string (rolling 12)
    $file_cx = $dPath.$cik.'Cx.txt'; 			//common sized string (rolling 12)
    $file_rx = $dPath.$cik.'Rx.txt';			//ratio string (rolling 12)
    $file_s = $dPath.$cik.'S.txt';			//stock prices
} //end if
 
?>