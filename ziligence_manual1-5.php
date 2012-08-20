
<?php					//to build parameters

$_tkr = $row[1];
$_cik = $row[2];
$_fye = $row[3];
$_rYq = $row[4];
$_jPeriod = $row[5];
$_acc1 = $row[6];
$_acc2 = str_replace('-', '', $_acc1);
$_href = $row[7];
$_str = "$pos | $_tkr | $_cik | $_fye | $_rYq | $_jPeriod | $_acc1 | $_href | $row[8]";

?>