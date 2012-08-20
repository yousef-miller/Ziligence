<?php					//to get company overview from Zack's website

$url = 'http://www.zacks.com/stock/quote/'.$_tkr;
unset($txt1); $txt1 = file_get_contents($url);
 
if (strlen($txt1) > 500) {
    $p0 = stripos($txt1, 'COMPANY DESCRIPTION', 0);
    if ($p0 !== false) {
        $p1 = stripos($txt1, '<tr>', $p0) + 4;
        $p1 = stripos($txt1, '<tr>', $p1) + 4;
        $p1 = strpos($txt1, '>', $p1) + 1;
        $p2 = strpos($txt1, '<', $p1);
        if ($p2 - $p1 > 10) {$_overview = trim(substr($txt1, $p1, $p2 - $p1));}

        $_overview = str_replace('PRESS RELEASE', "", $_overview);
        $_overview = str_replace(chr(44), 'chr(44)', $_overview);
        $_overview = rtrim(substr($_overview, 0, 3000));
    } //end if
} //end if

?>