
<?php																	
    
$url1 = 'http://www.sec.gov/cgi-bin/own-disp?action=getissuer&CIK='.$_cik;			
unset($txt1); $txt1 = strtoupper(file_get_contents($url1));									
if (strlen($txt1) > 1000) {
    $p1 = strpos($txt1, 'OWNERSHIP REPORTS FROM', 0);
    $p2 = strpos($txt1, '<TABLE', $p1);
    $p3 = strpos($txt1, '</TABLE>', $p2);
    $tbl = substr($txt1, $p2, $p3 - $p2);

    $p1 = strpos($tbl, '<A HREF', 0);
    while ($p1 !== false) {													//remove hyperlinks
	$p2 = strpos($tbl, '>', $p1);
 	$str = substr($tbl, $p1, $p2 - $p1 + 1);
	$tbl = str_replace($str, "", $tbl);
	$p1 = strpos($tbl, '<A HREF', 0);
	if ($p1 === false) {break;}
    } //loop

    $p1 = strpos($tbl, '</TR', 0) + 3;												//skip first row
    while ($p1 !== false) {
	unset($_owner); unset($_owner_cik); unset($_owner_type);
	$p1 = strpos($tbl, '<TR', $p1);
	$p2 = strpos($tbl, '</TR', $p1);
	if ($p1 === false) {break;}
	else {
	    $p1 = $p1 + 3;
	    $n = 0; $p1a = $p1; while (++$n <= 4) {
	        $p1a = strpos($tbl, '<TD', $p1a);
	        $p1a = strpos($tbl, '>', $p1a) + 1;
	        $p2a = strpos($tbl, '<', $p1a);
		if ($p1a > $p2 || $p2a > $p2) {break;}
		$sel = trim(substr($tbl, $p1a, $p2a - $p1a));
		$sel = str_replace($illegal_2, "", $sel);
		switch ($n) {
		    case 1: $_owner = $sel; break;
		    case 2: $_owner_cik = $sel; break; 
		    case 4: $_owner_type = $sel; break;
		} //end switch
	    } //loop

	   if (substr($_owner_type, 0, 8) == "DIRECTOR") {$_type = 'DIRECTOR'; $_title = '_';}
	   if (strpos($_owner_type, 'OFFICER', 0) !== false) {$_type = 'OFFICER'; $_title = trim(substr($_owner_type, 8));}
	   if (strpos($_owner_type, '10', 0) !== false) {$_type = '10% OWNER'; $_title = '_';}

	    $str1 = $_tkr.','.$_owner_cik;
	    $str2 = $_tkr.','.$_owner_cik.','.$_owner.','.$_type.','.$_title;
	    $ary_ownership[] = array($str1, $str2);
	} //end if
    } //loop
} //end if

?>