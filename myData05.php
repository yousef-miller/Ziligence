<?php		// Loop through each row of the table selection

unset($ary_row); $p7 = 0; $row_n = 0; 
do { 	
    $p6 = strpos($T, '<TR', $p7); 
    if ($p6 !== false) {$p7 = strpos($T, '</TR>', $p6);}
    
    if ($p6 !== false && $p7 !== false && $p6 < $p7) {
      	include($php.'myData05-1.php');		//border check + load array  
	$p7 = $p7 + 3;
    } //end if  
    else {break;}
} while ($p7 !== false); 

?>