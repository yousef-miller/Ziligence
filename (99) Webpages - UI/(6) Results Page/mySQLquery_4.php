<?php

unset($line2); unset($csv2); unset($sum); unset($x_value_str); 
$a = $range_min; while (++$a <= $range_max) {	
    unset($val_stat);
    $x_field = strtoupper(mysql_field_name($result, $a + $_vFirst - 1));
    $x_label =  substr($x_field, -2, 2);
    if (strpos($str_quarters, $x_label, 0) !== false && $x[0] != '!') {	
	$val = $row[$a + $_vFirst - 1] + 0;	
	$csv2 = $csv2.$val.chr(44);										//csv output    
	$val = number_format($val, 1); 

	$sum = $sum + $val; 
	if ($x_label == "FY") {
	    $color = ($val >= 0) ? '000000' : 'A00000';
	    if ($dollar == '$') {$b1 = "<b>"; $b2 = "</b>";} else {$b1 = ""; $b2 = "";}
	} //end if
	else {
	    $b1 = ""; $b2 = "";
	    if ($dollar == '$') {$color = ($val >= 0) ? '000000' : 'A00000';}
	    else {$color = ($val >= 0) ? '707070' : 'E00000';}	            
	} //end else
	$font_1 = "<p><font size=$font_size color=$color>";	        	    
	$val = ($val == 0) ? "-" : $val;
	$align = ($val == 0) ? 'center' : 'right';
	$val = ($val < 0) ? '('.substr($val, 1).')' : $val;		//must be last change made				
	$line2 = $line2."<td X9Z $_bdrC width='75' nowrap valign=bottom align=$align>$font_1$b1$val$b2</p></td>";	
    } //end if   		
} //loop	  

if (isset($x_value_str)) {$ary_chart_values[] = array($row[4], substr($row[5], 6), $x_value_str);}  

?>