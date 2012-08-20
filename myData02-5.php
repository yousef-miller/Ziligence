<?php

unset($acc3); unset($acc4); 
unset($text_8k); unset($href3); unset($href2); unset($ary_href3);

$a = -1; while (++$a < count($ary_8k_results)) {
    if ($ary_8k_results[$a][0] == $rYq) {
	$acc3 = $ary_8k_results[$a][1];												//to pick up acc number for period
	$acc4 = $ary_8k_results[$a][2];												//to pick up acc number for period
	break;
    } //end if 
} //loop

if (isset($acc3) && isset($acc4)) {
    $accession1 = $acc3; $accession2 = $acc4; 
    include($php.'myData02-1.php');												//look for acc# in list of previous updates
    if ($continue == "false") {
	include($php.'myData02-4.php');												//to retrieve Edgar results
	$href2 = $cik.chr(47).$accession2.chr(47).$accession1.'-index.htm';
	$h1 = 0; $h2 = 0; $p_1b = 0; while ($h1 !== false && $h2 !== false) {            
	    $h1= strpos($txt2, $accession2, $h1 + 10); 
    	    $h2 = strpos($txt2, '>', $h1); 		 
	    if ($h1 !== false && $h2 !== false) {	
		$results = $txt2; $x = $h1; $p1_b = 0; $proc = '1'; include($php.'myData02-7.php');			//to parse row selection
		if ($p1_a !== false && $p1_b !== false) {
		    $row = substr($results, $p1_a, $p1_b - $p1_a + 1); 
		    if (stripos($row, 'COMPLETE SUBMISSION', 0) === false) {
                        $href3 = trim(substr($txt2, $h1, $h2 - $h1)); 										//for hyperlink list
			$xr = $cik.chr(47).$href3;													//for url3 (actual report)
                        if (stripos($xr, '.htm', 0) !== false || stripos($xr, '.txt', 0) !== false) {
		            $ary_href3[] = array($href3);
			    $_x = @file_get_contents($url_base.$xr);
    	                    $text_8k = $text_8k.'X9ZNEWHTMLX9Z'.$_x; 
		            unset($href3);															//purge variable
                        } //end if
		    } //end if
		} //end if
	    } //end else
        } //loop
    } //end if
} //end if

$continue = "false";												//to reset variable

?>