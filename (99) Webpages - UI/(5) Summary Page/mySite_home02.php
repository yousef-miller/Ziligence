<?php

$sp5 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$dot5 = '.....';
$sp10 = $sp5.$sp5;
$sp35 = $sp10.$sp10.$sp10.$sp5;
$_insider_link = '<a href=http://www.sec.gov/cgi-bin/own-disp?action=getissuer&CIK='.$cik.' target=_blank>[All Registered Owners]</a>';

$sql = "select distinct * from _myOwnership where ticker = '$_ticker'";
$result = mysql_query($sql, $connection) or die(mysql_error());
while ($x = mysql_fetch_array($result)) {	
    if (strpos($x[4], 'CHAIRMAN', 0) !== false && (strpos($x[4], 'CHIEF EXECUTIVE', 0) !== false || strpos($x[4], 'CEO', 0) !== false)) {$_ceo = $x[2];}
    elseif (isset($_ceo) !== true && (strpos($x[4], 'CHIEF EXECUTIVE', 0) !== false || strpos($x[4], 'CEO', 0) !== false)) {$_ceo = $x[2];}
    elseif (isset($_cfo) !== true && (strpos($x[4], 'CHIEF FINANCIAL', 0) !== false || strpos($x[4], 'CFO', 0) !== false)) {$_cfo = $x[2];}
    elseif (isset($_coo) !== true && (strpos($x[4], 'CHIEF OPERATING', 0) !== false || strpos($x[4], 'COO', 0) !== false)) {$_coo = $x[2];}
} //loop

$x = explode(chr(32), $_ceo);
$_ceo = (substr_count($_ceo, chr(32)) == 2) ? "$x[1] $x[2] $x[0]" : "$x[1] $x[0]";
$x = explode(chr(32), $_cfo);
$_cfo = (substr_count($_cfo, chr(32)) == 2) ? "$x[1] $x[2] $x[0]" : "$x[1] $x[0]";
$x = explode(chr(32), $_coo);
$_coo = (substr_count($_coo, chr(32)) == 2) ? "$x[1] $x[2] $x[0]" : "$x[1] $x[0]";

$ceo =  (strlen($_ceo) > 2) ? 'CEO_x9z_'.ucwords(strtolower($_ceo)) : '';
$_len = strlen($ceo);
$cfo = (strlen($_cfo) > 2) ? 'CFO_x9z_'.ucwords(strtolower($_cfo)) : '';
$_len = (strlen($cfo) > $_len) ? strlen($cfo) : $_len;
$coo = (strlen($_coo) > 2) ? 'COO_x9z_'.ucwords(strtolower($_coo)) : '';
$_len = (strlen($coo) > $_len) ? strlen($coo) : $_len;

$x = intval((85 - $_len) / 5);											//measure for spacing
unset($_spacing); $a = 0; while (++$a <= $x) {$_spacing = $_spacing.$dot5;}
$_management = $ceo."<br />".$cfo."<br />".$coo."<br />".$other."<br />";
$_management = str_replace('#', chr(46), $_management);
$_management = str_replace('_x9z_', $_spacing, $_management);


$_len = strlen('[All Registered Owners]');
$sql = $sql." and type='10% OWNER' order by owner";
$result = mysql_query($sql, $connection) or die(mysql_error());
$_offset_spacing = '#########################_x9z_';
$count = 0; while ($x = mysql_fetch_array($result)) {	
    if (++$count <= 2) {															//to only output 2 owner names
	$x1 = ($count == 1) ? '10% Owners#[x]_x9z_' : $_offset_spacing;
	$x = trim(ucwords(strtolower($x[2])));
	$_len = (strlen($x) > $_len) ? strlen($x) : $_len;
	$_ownership = $_ownership.$x1.$x."<br />";
    } //end if
} //loop
$_ownership = $_ownership.$_offset_spacing.$_insider_link."<br />";

$x = intval((65 - $_len) / 5) - 1;														//measure for spacing
$_spacing = '&nbsp;&nbsp;'; $a = 0; while (++$a <= $x) {$_spacing = $_spacing.$sp5;}
$_ownership = str_replace('[x]', "[$count]", $_ownership);
$_ownership = str_replace('#', '&nbsp;', $_ownership);
if ($count < 9) {$_ownership = str_replace('Owners&nbsp;[', 'Owners&nbsp;&nbsp;[', $_ownership);}
$_ownership = str_replace('_x9z_', $_spacing, $_ownership);

?>