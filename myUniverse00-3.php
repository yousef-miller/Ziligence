<?php

$replace = array('INC_', 'INCORPORATED_', 'CO_', 'COMPANY_', 'CORP_', 'CORPORATION_',
'PLC_', 'LLC_', 'LP_', 'LTD_', 'LIMITED_',  'GROUP_');

$myUniverse_r = fopen($myUniverse, "r");
$myTickers_w = fopen($myTickers, "w");

while ($row = rtrim(fgets($myUniverse_r))) {    
    $sel = explode(',', strtoupper($row));
    if ($sel[0] >= $sCorp && $sel[0] <= $nCorp + $sCorp) {
	$x = $sel[1].chr(95);
	$x = str_ireplace($replace, '', $x);
	$x = trim(str_replace(chr(95), '', $x));
	$x = trim(str_replace(chr(32).chr(32), chr(32), $x));
        $str = "$x,$sel[2],$sel[3],$sel[4],$sel[5],$sel[6]";
	fwrite($myTickers_w, $str."\r\n");
    } //end if
} //loop

fclose($myUniverse_r); fclose($myTickers_w);

?>