
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $x = getmypid().chr(44).$beta.chr(44).time();
    if ($proc_override != 'true') {$file_w = fopen($myPHPcore, 'w'); fwrite($file_w, $x); fclose($file_w);}	//PID / Time
    $process = 'core'; $_user_id = 'admin';
    include($php.'myUniverse00-3.php');													//xfer list from myUniverse to myTickers
    include($php.'myData00.php');														//load arrays
    include($php.'myData00-1.php');													//load array corp
    $beta = -1; while (++$beta < count($ary_corp)) {
	if ($_start_core != 'true') {include($php.'myData00-14.php');}									//for PID restarts
	if ($_start_core != 'true') {continue;}
        $process = 'core'; $_user_id = 'admin'; unset($txt1); unset($url1a); unset($ur1b);						//to establish core settings
        $properName = str_replace(chr(32), '', $ary_corp[$beta][0]);
        $tkr = $ary_corp[$beta][1]; $cik = $ary_corp[$beta][3];
        $fye = intval(substr($ary_corp[$beta][4], 1, 2)); $fye_str = $ary_qtr[$fye][0];
        if ($cik == 'N/A' || empty($cik) || $fye == 'N/F' || empty($fye)) {continue;}
        include($php.'myCore00-0.php');                                                                                   							//form 8-K search results
        $txt1 = strtoupper(@file_get_contents($url_sec1a.$cik.$sec10.$url_sec1b.$results_page[0][0]));          	 		//form 10-K/Q search
        $alpha = $srch_n; do {     																		//iterate time periods
	    $x = getmypid().chr(44).$beta.chr(44).time();
	    if ($proc_override != 'true') {$file_w = fopen($myPHPcore, 'w'); fwrite($file_w, $x); fclose($file_w);}			//PID / Time
            include($php.'myData00-7.php');                                                     								//reset variables
            include($php.'myData02.php');                                                               							//to get HTML source code
            if ($_null_file == 'false') {                              												//skip if no records exist
                if ($continue == "false") {include($php.'myData01.php'); include($php.'myData01-4.php');}          	//txt file handlers
                if ($continue == "false") {include($php.'myData04-2.php');}         							//load table position array
                if ($continue == "false") {include($php.'myData04.php');}         								//locate financial statements
                if ($continue == "false") {$_user_id = 'admin'; include($php.'myCore01-1.php');}				//to process html tables && std labels
                if ($prev_update == 'false') {															//prevent duplicate entry for cron jobs
		    if ($m_tx == "false" || $m_bx == "false" || $m_gx == "false") {$continue = "true";}
		    if ($continue == "true") {include($php.'myCore00-7.php');}   							 //log fail in myFails table
	        } //end if
	        if ($continue == "false") {$_user_id = 'admin'; include($php.'ziligence_manual3-2.php');}		//to recalculate rolling12s, variances, etc.
	        if ($continue == "false") {echo $tkr.chr(32).$rYq.chr(32).$jField.chr(32).$m_tx.chr(32).$m_bx.chr(32).$m_gx."<br>";}
	        ////if ($continue == "false") {include($php.'myUsers00.php');}							//to update user specific files / mySQL
	    } //end if
        } while ($alpha-- > $zeta);
    } //next beta
     if ($proc_override != 'true') {$x = getmypid(); exec("kill -9 $x");}								//to kill currently running process
} //end if

?>
