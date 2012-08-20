<?php		//if selected row contains a border, marking a total / subtotal -> each row (start, end) stored in array

$row = substr($T, $p6, $p7 - $p6 + 1); 
if (!empty($row)) {
    if ($txt_file == "false") {
	$b1 = strpos($row, 'BORDER-TOP', 0);
	$b2 = strpos($row, '<HR', 0);
	$b3 = strpos($row, 'BORDER-BOTTOM', 0);
	$b4 = strpos($row, 'BGCOLOR=#000000', 0);
	if ($b1 !== false || $b2 !== false || $b3 !== false || $b4 !== false) {$bdr = 1;} 
	else {unset($bdr);}        
    } //end if

    elseif ($txt_file == "true") {
        $b1 = strpos($row, '----', 0);
        $b2 = strpos($row, '====', 0);
        if ($b1 !== false || $b2 !== false) {$bdr_top = 1;} else {unset($bdr_top);}
     
        $bdr = ($row_n == $bdr_row) ? 1 : 0; 
        $bdr_row = (isset($bdr_top)) ? $row_n + 1 : 0;
    } //end elseif

    //echo $tkr.chr(32).$rYq.chr(32).$cik.chr(32).$row."<br>";
    $ary_row[++$row_n] = array($bdr, $p6, $p7, $p7 - $p6 + 1);
} //end if

?>