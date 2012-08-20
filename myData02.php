
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $txt_file = "false"; $_null_file = "false"; unset($text_8k);
    unset($href); unset($xref); unset($xref_2); unset($href_2); 
    unset($xr); unset($hr); unset($xref_2x); unset($href_2x);
    unset($acc1); unset($acc2); unset($accession1); unset($accession2);
    $form = '10-'; $results = $txt1; $p1_b = 0; $p2_last = 1;

    $m = 0; do {                                                                                            //to run through search results for form 10-K/Q files
        $x = strpos($results, 'ACC-NO', $p1_b);
        if ($x === false) {$_null_file = "true"; $continue = "true"; break;}
        else {include($php.'myData02-0.php');}
    } while ($m != $alpha);

    if ($continue == "false") {if ($type == '10-K' || $type == '10-Q') {$form = $type;} else {$continue = "true";}}

    if ($continue == "false") {
        $acc1 = $accession1;
        $acc2 = $accession2;
        include($php.'myData02-1.php');                                                          				//look for acc# in list of previous updates
    } //end if

    if ($continue == "false") {
        include($php.'myData02-5.php');											//to get 8-k results
        $accession1 = $acc1; $accession2 = $acc2;

        include($php.'myData02-4.php');                                                           		  		//to retrieve search page results for acc nummber
        $h1= strpos($txt2, $accession2, 0); 
        if ($h1 !== false) {$h2 = strpos($txt2, '>', $h1);}
        if ($h1 !== false && $h2 !== false) {
            $href = trim(substr($txt2, $h1, $h2 - $h1));                                           		 	//for mySQL query (hyperlink)
            $xref = $cik.chr(47).$href;												//for url3 (actual report)
	    if (stripos($xref, '.HTM') === false) {unset($xref); unset($href); $continue = "true";}
	    $exh = '>EX-13'; include($php.'myData02-8.php');							//for dex-13 results
	    $xref_2 = $xr; $href_2 = $hr; 
	    $exh = '>EX-19'; include($php.'myData02-8.php');							//for dex-13 results
	    $xref_2x = $xr; $href_2x = $hr; 
         } else {$continue = "true";}
    } //end if

    if ($continue == "false") {
        $text_1 = @file_get_contents($url_base.$xref).'X9ZDEX13X9Z';
        if (!empty($xref_2)) {
	    $x = @file_get_contents($url_base.$xref_2);
	    $text_1 = $text_1.$x.'X9ZEX19X9Z';
        } //end if
        if (!empty($xref_2x)) {
	    $x = @file_get_contents($url_base.$xref_2x);
	    $text_1 = $text_1.$x;
        } //end if
        $text_1 = $text_1.'X9Z8KX9Z'.$text_8k; unset($text_8k);						//append 8-k results
        include($php.'myData02-6.php');                                                             			//format text/html results;
        include($php.'myData03.php');         										//for period of report per filing cover sheet
        if (empty($rYq) && empty($jPeriod)) {include($php.'myData02-9.php');}			//for period of report per EDGAR search
        if ($continue == "false") {include($php.'myData02-3.php');}                                          //index txt3 table positions
    } //end if
} //end if

?>
