<?php					//to parse url

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $x1 = trim(strtoupper($_GET[tkr]));
    $x2 = $_SERVER['REQUEST_URI'];	
    $p1 =  strpos($x2, 'tkr=', 0);
    $_url = substr($x2, $p1).'&sort=ticker&';

    if ($p1 !== false) {
        $p1 = $p1 + 4;
        $p2 = strpos($x2, '%', $p1);
        if ($p2 === false) {$p2 = strpos($x2, '&', $p1);}
        $x2 = trim(strtoupper(substr($x2, $p1, $p2 - $p1)));
        $x2 = str_replace('+', "", $x2);
    } //end if
    $_ticker = ($x1 == "") ? $x2 : $x1;
} //end if

?>