
<?php						//to get period of report from EDGAR search results

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $x1 = stripos($txt2, 'PERIOD OF REPORT', 0);
    if ($x1 !== false) {
    	$x1 = stripos($txt2, '<DIV', $x1);
    	$x1 = strpos($txt2, '>', $x1) + 1;
    	$x2 = strpos($txt2, '<', $x1);
    	$sub = strtotime(trim(substr($txt2, $x1, $x2 - $x1)));
	if ($sub !== false) {include($php.'myData02-10.php');}
    } //end if
} //end if

?>