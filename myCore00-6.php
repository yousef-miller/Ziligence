<?php

$break = "false";

if ($t_i == 1 && $xv_lbl == 'netincome') {$break = "true";} 								//to terminate loops @ end of report
if (strpos($xv_lbl, '._.', 0) !== false) {$break = "true";} 									//special tag for termination
	    	
if ($t_i == 2 && strpos($xv_lbl, 'noncontrolling', 0) !== false) {$break = "true";} 

if ($t_i == 3) {
    if (strpos($xv_lbl, 'endingcashbalance', 0) !== false) {$break = "true";}
    elseif (strpos($xv_lbl, 'cashandcashequivalentsatend', 0) !== false) {$break = "true";}	    
} //end if

?>