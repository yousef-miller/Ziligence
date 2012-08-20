<?php								//clean up hanging words && hanging letters

$a = 0; while (++$a <= 2) {
    $x_stat = "false"; 
    $x = ($a == 1) ? $sxv_4 : $xv_lbl;
    do { 	
	$x = rtrim($x);		
    	if (substr($x, -4) == chr(32).'and') {$x = substr($x, 0, -3); $x_stat = "true";}
    	//elseif (substr($x, -4) == chr(32).'net') {$x = rtrim(substr($x, 0, -3)); $x_stat = "true";}		
    	elseif (substr($x, -3) == chr(32).'in') {$x = rtrim(substr($x, 0, -2)); $x_stat = "true";}
    	elseif (substr($x, -3) == chr(32).'of') {$x = rtrim(substr($x, 0, -2)); $x_stat = "true";}
    	elseif (substr($x, -3) == chr(32).'at') {$x = rtrim(substr($x, 0, -2)); $x_stat = "true";}	
    	elseif (substr($x, -2, 1) == chr(32)) {$x = rtrim(substr($x, 0, -1)); $x_stat = "true";}  
    	else {$x = $x; $x_stat = "false"; break;}
    } while ($x_stat == "true");    
} //next a

?>