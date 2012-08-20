
<?php           //to determine report period

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $str = substr($text_2, 0, 150000);
    if (!empty($str)) {
    	$a = -1; do {
            $x = strpos($str, $ary_cover[++$a][0], 0);
            if ($x !== false) {break;}
        } while ($a < count($ary_cover));
        $continue = ($x === false) ? "true" : "false";
    } else {$continue = "true";}

    if ($continue == "false") {
    	$str = substr($str, 0, $x);
    	$max = ($form == '10-Q') ? 2 : 4;
    	$a = ($form == '10-Q') ? -1 : 1;
    	do {
            $x = strpos($str, $ary_period[++$a][0].'ENDED', 0);
            if ($x !== false) {break;}
        } while ($a <= $max);
        $continue = ($x === false) ? "true" : "false";
    } //end if

    if ($continue == "false") {
    	$str = substr($str, $x, 500);
    	unset($month); do {
            $x_pos = strpos($str, $ary_month[++$month][0], 0);
            if ($x_pos !== false) {break;}
        } while ($month < count($ary_month));
        $continue = ($x_pos === false) ? "true" : "false";
    } //end if

    if ($continue == "false") {
    	$str = substr($str, $x_pos);
    	$x = strpos($str, '<', 0) + 0;
    	$sub = strtotime(trim(substr($str, 0, $x)));
    	if ($sub === false) {$continue = "true";}
	else {include($php.'myData02-10.php');}							 //to rpocess rYq
    } //end if
    unset($str);                                                                                                   	 //purge variables
} //end if

?>

