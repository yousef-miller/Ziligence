
<?php

$php = '/mnt/data/myuser/'; $_access_override = 'true'; include($php.'dbIndex.php');
$keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
$keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';

proc_nice(20); $_pid = file($myPHPstocks);
$_pid = explode(',', $str[0]);
$_pid = (!empty($_pid[0])) ? $_pid[0] : '99999999';
exec("ps $_pid", $output);																	//to see if process is currently running
if (count ($output) < 2) {
    include($php.'myData00-1.php'); 
    $beta = -1; while (++$beta < count($ary_corp)) {
	$file_w = fopen($myPHPstocks, 'w'); $x = getmypid().chr(44).$beta; fwrite($file_w, $x."\r\n"); fclose($file_w);		//record PID
        $tkr = $ary_corp[$beta][1]; $cik = $ary_corp[$beta][3];
	if ($cik != 'N/A') {include($php.'myStockPrices00.php');}										//to get stock prices (Yahoo)
    } //loop
    exec("kill $_pid");																		//to kill currently running process
} //end if

?>
