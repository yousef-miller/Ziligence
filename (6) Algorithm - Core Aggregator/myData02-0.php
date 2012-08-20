<?php							//to strip out accession numbers from Edgar search results

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $proc = '2'; include($php.'myData02-7.php');										//to parse row selection     
    $row = substr($results, $p1_a, $p1_b - $p1_a + 1); 
    $p2_a = strpos($row, $form, 0); $_doc = substr($row, $p2_a - 3, 3).$form;
    $p2_b = strpos($row, 'ACC-NO', 0);
    if ($p2_a === false || $p2_b === false) {if ($form != '2.02') {$continue = "true";}}
    else {
    	$p2_ax = strpos($row, "<", $p2_a) - 1; 
    	$type = trim(substr($row, $p2_a, $p2_ax - $p2_a + 1)); 
    	$p2_last = $p2_b + 8; 
    	$accession1 = substr($row, $p2_last, 20); 
    	$accession2 = str_replace('-', "", $accession1);

    	if ($type == $form.'Q' || $type == $form.'K') {++$m;}        										//for 10-K/Q search results
    	elseif ($p2_b !== false && ($form == '2.02' || $form == 'M14A')) {								//for 8-K & mergers search results
	    unset($p2_c); unset($p2_d);
	    $p2_c = strpos($row, '<TD>', $p2_b);
	    $p2_d = strpos($row, '</TD>', $p2_c);
	    if ($p2_c !== false && $p2_d !== false) {
	    	$p2_c = $p2_c + 4;
	    	$str = trim(substr($row, $p2_c, $p2_d - $p2_c));
	    	if (strlen($str) == 10) {
	            $y = substr($str, 0, 4); $month = intval(substr($str, 5, 2)); 									//identify month & year
		    if ($process == 'm&a') {$ary_ma_results[] = array(strtotime($str), $accession1, $accession2, $_doc);}	//for mergers / acq
		    else {
		        include($php.'myData03-5.php');														//translate month to quarter
	                $ary_8k_results[] = array($y.$qtr, $accession1, $accession2);  								//load ary_8k_results
		    } //end else
	        } //end if
	    } //end if
        } //end elseif       
    } //end else
} //end if


?>