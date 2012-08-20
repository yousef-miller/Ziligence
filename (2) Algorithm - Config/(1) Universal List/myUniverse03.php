<?php				//to get company website address from Yahoo

$url = 'http://finance.yahoo.com/q/pr?s='.$tkr.'+Profile';
unset($txt1); $txt1 = file_get_contents($url);
$txt1 = strtolower(str_replace(chr(34), '', $txt1));

$p0 = strpos($txt1, 'website:', 0);
if (strlen($txt1) > 500 && $p0 !== false) {  
    $p1 = strpos($txt1, '</table>', $p0);
    $txt2 = substr($txt1, $p0, $p1 - $p0);

    $p1 = strpos($txt2, 'http://', 0);
    if ($p1 !== false) {
	$p1 = $p1 +7;
        $p2 = strpos($txt2, '>', $p1);
        if ($p2 !== false && $p2 - $p1 > 3) {$_website = trim(substr($txt2, $p1, $p2 - $p1));}
        $_website = str_replace(chr(44), '', $_website);
    } //end if
} //end if

?>