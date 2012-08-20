
<?php									//to get s&p 500 ticker list data

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $url1 = 'http://en.wikipedia.org/wiki/List_of_S%26P_500_companies#S.26P_500_Component_Stocks';
    $txt1 = strtoupper(file_get_contents($url1));  
    $txt1 = str_replace(chr(34), '', $txt1);
    $url2 = 'http://www.google.com/finance?q=';
    $file_x = fopen($mySP500, "w");

    $_n = 0; while (++$_n <= 500) {
	$continue = "false"; unset($tkr); unset($cik); unset($name); unset($exch);
    	$p0 = stripos($txt1, '?ticker=', $p0);
    	if ($p0 === false) {break;}
    	else {
	    $p0 = $p0 + 8;
	    $p1 = strpos($txt1, '>', $p0);
	    $tkr = substr($txt1, $p0, $p1 - $p0);
	    include($myUniverse06-1.php');
	    if ($continue == "false") {
	        $str = $tkr.chr(44).$name.chr(44).$exch.chr(44).$cik.chr(44).$_sic;
	        if (strlen($str) > 20) {echo $str."<br>"; fwrite($file_x, $str."\r\n");}
	    } //end if
    	} //end else
    } //loop
    fclose($file_x);
} //end if

?>