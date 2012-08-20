
<?php									//to figure out which period has a resulting value in it

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($jValue); while (++$jPeriod <= $jPeriod2) {
    	include($php.'myData03-6.php');				//to determine jField
    	if (abs($jStr2[$jField]) + 0 > 0) {$jValue = $jPeriod; break;}
    } //loop

    if (!empty($jValue)) { 
   	$hLink = $ary_query[$jValue][8];
    	$url = $url_base.$cik.'/'.$hLink;    	
	if (!empty($hLink)) {
	    $stat = ($jValue%4 && $jValue%5) ? "true" : "false";
	    $_pos_str = '<a href='.$url.' target=_blank>'.$_pos_val.'</a>';
	} //end if
    } //end if
} //end if

?>