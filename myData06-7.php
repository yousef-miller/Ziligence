1<?php		//to print && renumber table positions of unused rows

unset($_stat); unset($ary_label_x);

if ($t_i == 1 && isset($ary_label_1)) {$_stat = "true"; $ary_label_x = $ary_label_1; $ary_new_x = $ary_new_1;}
elseif ($t_i == 2 && isset($ary_label_2)) {$_stat = "true"; $ary_label_x = $ary_label_2; $ary_new_x = $ary_new_2;}
elseif ($t_i == 3 && isset($ary_label_3)) {$_stat = "true"; $ary_label_x = $ary_label_3; $ary_new_x = $ary_new_3;}       

if ($_stat == "true") {
    $b = -1; while (++$b < count($ary_label_x)) {
    	$x = trim($ary_label_x[$b][2]); 
        if (strlen($x) > 100) {		    
	    $i = intval(substr($ary_label_x[$b][1], 1)); 
	    $n1 = (substr($i, -1, 1)&1) ? "1" : "0";	    
	    unset($i2); $t = 0; $n2 = $n1;
	    do {
	        if (isset($ary_new_x[$i-$n1][0]) !== true) {++$t; $n1 = $n1+2;}
	        else {$i2 = $ary_new_x[$i-$n1][0] + ($t*2) + $n2; break;}
	    } while ($i - $n1 > 0);	
	    if (isset($i2) !== true) {$i2 = $i;}     	   

	    if ($i2 <= 9) {$i = $t_i.'000'.$i2;}
	    elseif ($i2 <= 99) {$i = $t_i.'00'.$i2;}
	    elseif ($i2 <= 999) {$i = $t_i.'0'.$i2;}	    

	    $jStr = str_replace($ary_label_x[$b][1], $i, $x);
	    $body = trim($body.'?'.$jStr);
	} //end if	
    } //loop

    switch ($t_i) {
	case "1": $ary_new_1 = $ary_new_x; unset($ary_label_1); break;
	case "2": $ary_new_2 = $ary_new_x; unset($ary_label_2); break;
	case "3": $ary_new_3 = $ary_new_x; unset($ary_label_3); break;
    } //end switch
} //end if

unset($_stat); unset($ary_label_x);

?>