<?php																						//form 8-K search results

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($results); unset($doc1); unset($ary_8k_results); unset($ary_ma_results); unset($_sec_type);			//purge variables

    switch ($process) {
	case 'core': $_sec_type = $sec08; $form = '2.02'; break;
	case 'm&a': $_sec_type = ''; $form = 'M14A'; break;
    } //end switch
																
    $a = -1; while (++$a < count($results_page)) {
    	$results = strtoupper(@file_get_contents($url_sec1a.$cik.$_sec_type.$url_sec1b.$results_page[$a][0]));		//form 8-K search results
    	if (strpos($results, 'ACC-NO', 0) === false) {break;}
    	else {$doc1 = $doc1.$results;}
    } //loop

    if (!empty($doc1)) {
    	$results = $doc1; $p1_b = 0; $p2_last = 1; 
    	$x = 0; while ($x !== false) {																	//to run through search results
            $x = strpos($doc1, 'ACC-NO', $p1_b); 
            if ($x !== false) {include($php.'myData02-0.php');} 												//to load ary_8k_results
	    if ($p1_b === false) {break;}
        } //loop
    } //end if

    unset($doc1); unset($results); unset($form);														//purge variables
} //end if

?>