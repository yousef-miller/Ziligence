
<?php																//to run process for retrieving Analyst estimates

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'myData00.php');
    include($php.'myData00-1.php');										//to load ticker array

    $beta = -1; while (++$beta < count($ary_corp)) {
	if ($_start_core != 'true') {include($php.'myData00-14.php');}									//for PID restarts
	if ($_start_core != 'true') {continue;}
        $_ticker = $ary_corp[$beta][1]; $_cik = $ary_corp[$beta][3];
	if (!empty($_ticker) && !empty($_cik) && $_cik != 'N/A') {
 	    include($php.'myRatings00-1.php');									//to get query specific details
	    include($php.'myRatings00-2.php');									//clean up query results
	} //end if
	$file_w = fopen($myRatings, 'w'); $x = getmypid().chr(44).$a.chr(44).time(); fwrite($file_w, $x); fclose($file_w);	//PID / Time
    } //loop
     include($php.'myRatings00-3.php');										//upload results to mySQL
 } //end if

?>

