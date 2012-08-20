
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'myData00-0.php');																//to load period arrays
    include($php.'myData00-1.php');																//load array corp

    $beta = -1; while (++$beta < count($ary_corp)) {
	if ($_start_core != 'true') {include($php.'myData00-14.php');}										//for PID restarts
	if ($_start_core != 'true') {continue;}

	$tkr = $ary_corp[$beta][1]; $cik = $ary_corp[$beta][3]; 
	$fye = intval(substr($ary_corp[$beta][4], 1, 2)); $fye_str = $ary_qtr[$fye][0];
        if ($cik == 'N/A' || empty($cik)) {continue;}
	$process = 'm&a'; include($php.'myCore00-0.php');												//prem14a search results
	include($php.'myMergers00-1.php');															//to extract merger proxies
	if (count($ary_ma_results) >= 1) {
	    include($php.'dbConnect.php'); 
		$sql = "load data local infile '$myMergers' into table _myMergers fields terminated by ','"; 
		mysql_query($sql, $connection) or die(mysql_error());											//to add new record
	    mysql_close($connection); 
	} //end if
	$file_w = fopen($myMergers_1, 'w'); $x = getmypid().chr(44).$beta.chr(44).time(); fwrite($file_w, $x); fclose($file_w);	//PID / Time
    } //next beta
    $x = getmypid(); exec("kill -9 $x");																//to kill current process
} //end if

?>
