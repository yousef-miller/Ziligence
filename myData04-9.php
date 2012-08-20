
<?php								//for balance sheets - to determine next table when there isn't a title label

unset($x1); unset($x2);
if ($proc == "1") {
    $x1 = strpos($text_1, '<TABLE', $p_bs_end);
    if ($x1 !== false) {$x2 = strpos($text_1, '</TABLE', $x1);}				//to look at next table
} //end if
else {
    $sub = substr($text_1, 0, $p_bs_end - strlen($t_bx));
    if ($sub !== false) {$x2 = strrpos($sub, '</TABLE', 0);}
    if ($x2 !== false) {												//to look at previous table
	$sub = substr($text_1, 0, $x2);
	$x1 = strrpos($sub, '</TABLE', 0);
    } //end if
} //end else

if ($x1 !== false && $x2 !== false) {								//to find position of next table
     if ($x2 != $p_is_end && $x2 != $p_bs_end && $x2 != $p_cf_end) {    
     	$tbl = substr($text_1, $x1, $x2 - $x1);
    	$xVerify = (substr_count($tbl, '<TR', 0) > $tbl_row_min) ? "true" : "false";
	$label = ($proc == "1") ? 'LIABILIT' : 'ASSET';
    	$xVerify = (strpos($tbl, $label, 0) !== false) ? $xVerify : "false";
	if ($xVerify == "true") {
	    $replace= array(chr(32), chr(44));
	    $ary_label_x = $ary_label_2; 
	    $t_txt_2 = str_replace($replace, '', $tbl);
	    include($php.'myData04-0.php');
	    if ($verify == "true") {$t_bx = ($proc == 1) ? $t_bx.$tbl : $tbl.$t_bx;}				//to join two tables together
	    $m_bx = ($verify == "true") ? "true" : "false";
	} //end if
    } //end if
} //end if

?>