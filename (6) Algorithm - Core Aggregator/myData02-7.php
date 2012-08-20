<?php							//to parse row selection

if ($proc == 1) {
    do {
    	$p1_a = stripos($results, '<TR', $p1_b); 
    	$p1_b = stripos($results, '</TR>', $p1_a);
    	if ($p1_a === false || $p1_b === false) {break;}	
	elseif ($p1_b > $x) {break;}        
    } while ($p1_a < $x); 
} //end if

else {
    do {
    	$p1_a = stripos($results, '<TR', $p1_b); 
    	$p1_b = stripos($results, '</TR>', $p1_a);
    	if ($p1_a === false || $p1_b === false) {if ($form == '10-') {$continue = "true";} break;}	        
    } while ($p1_a < $x && $p1_b < $x); 
} //end if

?>