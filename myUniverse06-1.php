
<?php	    

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $txt2 = file_get_contents($url_sec1a.$tkr.$url_sec1b);			//sec edgar website
    $p2 = stripos($txt2, 'CIK=', 0);
    if ($p2 === false) {$continue = "true";}
    else {
    	$p2 = $p2 + 4;
     	$p3 = strpos($txt2, '&', $p2);
     	if ($p3 === false) {$continue = "true";}
     	else {$cik = ltrim(substr($txt2, $p2, $p3 - $p2), '0');}
    } //end else

    if ($continue == "false") {
    	$p2 = stripos($txt2, 'Fiscal Year End', 0);
    	if ($p2 === false) {$continue = "true";}
    	else {
            $p2 = strpos($txt2, ':', $p2) + 1;
            $p3 = strpos($txt2, '<', $p2);
             if ($p3 === false) {$continue = "true";}
             else {$fye = '_'.trim(substr($txt2, $p2, $p3 - $p2));}
         } //end else
    } //end if

     if ($continue == "false") {
    	$p2 = stripos($txt2, 'companyName', 0);
    	if ($p2 === false) {$continue = "true";}
    	else {
            $p2 = strpos($txt2, '>', $p2) + 1;
            $p3 = strpos($txt2, '<', $p2);
            if ($p3 === false) {$continue = "true";}
             else {
            	$name = trim(substr($txt2, $p2, $p3 - $p2));
            	$name = str_replace(chr(44), '', $name);
            	$name = str_replace('&amp;', '', $name);
	    	$x = strpos($name, '/', 0);
	    	if ($x !== false) {$name = trim(substr($name, 0, $x - 1));}
	     } //end else
         } //end else
     } //end if

    if ($continue == "false") {
        $txt3 = file_get_contents($url2.$tkr);						//google finance
        $p2 = strpos($txt3, ':'.$tkr, 0);
        if ($p2 === false) {$continue = "true";}
        else {
            $str = substr($txt3, $p2 - 20, 20);
            if (stripos($str, 'NASDAQ', 0) !== false) {$exch = 'NASDAQ';}
            elseif (stripos($str, 'AMEX', 0) !== false) {$exch = 'AMEX';}
            elseif (stripos($str, 'NYSE', 0) !== false) {$exch = 'NYSE';}
        } //end else
    } //end if

    if ($continue == "false") {								//to query SIC
        include($php.'dbConnect.php'); 
            $sql = "select distinct * from _myCompanies where ticker = '$tkr'";
            $result = mysql_query($sql, $connection) or die(mysql_error());
            $row = mysql_fetch_array($result);
	    unset($_sic); $_sic = trim(str_replace(chr(39), '', $row[5]));
	    $continue = (strlen($_sic) > 10) ? 'false' : 'true';
        mysql_close($connection);
    } //end if
} //end if

?>

