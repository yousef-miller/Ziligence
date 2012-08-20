<?php		//to load list of stocks to iterate through

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $myTickers_r = fopen($myTickers, "r");						
    unset($ary_corp); while ($row = trim(fgets($myTickers_r))) {
        if (strlen($row) > 20) {
            $sel = explode(',', strtoupper($row)); 
            $ary_corp[] = array($sel[0], $sel[1], $sel[2], $sel[3], $sel[4]);          
        } //end if      
    } fclose($myTickers_r); 
} //end if

?>