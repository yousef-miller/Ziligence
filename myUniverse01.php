<?php					//to get company address/cik/fye from Edgar site

$url = 'http://www.sec.gov/cgi-bin/browse-edgar?action=getcompany&CIK=';
$url = $url.$_cik.'&type='.$form.'&dateb=&owner=exclude&n=100';
unset($txt1); $txt1 = strtoupper(file_get_contents($url));

$_sic = trim(substr($txt1, strpos($txt1, 'SIC=', 0) + 4, 4));
$a = -1; while (++$a < count($array_sic)) {					//to match with full std code description
    if ($array_sic[$a][0] == $_sic) {$_sic = $array_sic[$a][1]; break;}
} //loop 

$p0 = strpos($txt1, 'FISCAL YEAR END:', 0) + 17;
$_fye = '_'.trim(substr($txt1, $p0, 4));

$p0 = strpos($txt1, $find_0, 0);
$p1 = strpos($txt1, '</DIV>', $p0);
$t = substr($txt1, $p0, $p1 - $p0);
$n = substr_count($t, $find_1);
    
$a = 0; $p1 = $p0; while (++$a <= $n) {
    $p0 = strpos($txt1, $find_1, $p1 + 5);
     if ($p0 !== false) {
        $p1 = strpos($txt1, '>', $p0) + 1; 
        $p2 = strpos($txt1, '<', $p1) - 1;
	$_mail = trim(substr($txt1, $p1, $p2 - $p1));			//pick up city+state+zip code
	if ($a < $n) {$_last_row = $_mail;}
    } //end if
} //loop
    
$_test = trim(str_replace($illegal, "", $_mail));					//to remove numberz zip code
if ($_test[0] == chr(40) || $_test[0] == chr(45) || $_test[0] == chr(46) || $_test == "") {$_mail = $_last_row;}

if (substr($_mail, -5, 1) == chr(45)) {$_mail = substr($_mail, 0, -5);}

?>