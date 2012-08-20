
<?php

$offset = ($txt_file == "true") ? 100 : 600;
unset($_c); $x3 = "true"; $x4 = "true"; $x5 = "true"; $xVerify = "true";

if ($x2 !== false) {
    $x1 = ($x1 === false) ? $x : $x1;
    $x1 = ($x1 > $x2) ? $x : $x1;                                                					//to test table start position
    $tbl = substr($text_2, $x1, $x2 - $x1);                                                                     //table string
    $offset = (($x - $offset) > 0) ? $offset : $x;

    $t0 = substr($text_2, $x - $offset, ($offset * 2));                                                
    if (strpos($t0, 'CONSOLIDATING', 0) === false) {
        if ($process != 'manual' && $tVerify == "true") {
	    $x5 = (strpos($t0, $properName, 0) !== false) ? "true" : "false";				//company name
	} //end if
	if ($loop != "3" && $process != 'manual') {
            $t0 = substr($text_2, $x - 25, 50);
            $x3 = (strpos($t0, $gt.'CONDENSED', 0) !== false) ? "true" : "false";                                 
            $x4 = (strpos($t0, $gt.'CONSOLIDATED', 0) !== false) ? "true" : "false";     
	} //end if                   
    } //end if
    if ($x5 == "true" && $x3 == "true" || $x4 == "true") {
        $w = $x2 - $x;
        $t1 = substr($text_2, $x - $offset, $w + $offset);                                                      	
        $w2 = strrpos($t1, '</TABLE>', 0);
        $t1 = ($w2 !== false) ? substr($t1, $w2) : $t1;
        if ($process != 'manual') {
            if (substr($rYq, -2, 2) != 'fy') {$xVerify = (strpos($t1, 'AUDITED', 0) !== false) ? $xVerify : "false";}
            $xVerify = (strpos($t1, 'PARENT', 0) === false) ? $xVerify : "false";
        } //end if
        $xVerify = (substr_count($tbl, '<AHREF', 0) <= 1) ? $xVerify : "false";                         			//table string / prevent TofC
        $xVerify = (substr_count($tbl, '<TR', 0) > $tbl_row_min) ? $xVerify : "false";                           		//table string / tbl row min
        if ($x < $x1) {$xVerify = ($x1 - $x < 1500) ? $xVerify : "false";}
        if (!empty($x2_last)) {
            $xVerify = ($x2 > $x2_last) ? $xVerify : "false";
            $_c = ($x - $x2_last > 0 && $x - $x2_last < ($offset * 12)) ? 'c' : '';
        } //end if
	if ($type == "2") {
	    $xVerify = (strpos($tbl, '>ALLOTHERASSET', 0) === false) ? $xVerify : "false";
	    $xVerify = (strpos($tbl, '>ALLOTHERLIABILIT', 0) === false) ? $xVerify : "false";
	} //end if
	if ($xVerify == "true") {include($php.'myData04-5.php');}										//to load position array
    } //end if
} //end else                        

unset($tbl); unset($t); unset($t0); unset($t1);

?>
