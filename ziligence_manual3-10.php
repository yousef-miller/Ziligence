
<?php									//to run data process

if ($_stat == 'true' && !empty($tkr) && !empty($cik) && !empty($fye) && !empty($jPeriod)) {
     $rYq = $tArray[$jPeriod][0]; $_status_string = "$tkr $rYq > "; include($php.'myData03-6.php');		//to determine jFields 
     if (!empty($rYq)) {
        $process = 'override'; include($php.'ziligence_mapper3-6.php');								//to zero out previous result
        if ($m_tx == "true" && $m_bx == "true" && $m_gx == "true") {
            $process = $xProcess;
            $continue = "false"; include($php.'myData01.php'); include($php.'myData01-4.php');  			//j+m+c file handlder
            $continue = "false"; include($php.'myCore01-1.php');
	    if ($continue == "false") {
	        include($php.'ziligence_manual2.php');									//to delete last record
                include($php.'ziligence_manual3-2.php');								//to recalculate rolling12s, variances, etc.
                unset($t_tx); unset($t_bx); unset($t_gx); 								//purge ALL table selections
	    } //end if
         } //end if
     } //end if
     $_status_string = ($continue == "false") ? $_status_string.'OK' : $_status_string.'FAIL';	//for html output screen
} //end if

?>