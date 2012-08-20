<?php

$mySIC_r = fopen($mySIC, "r");
while ($row = rtrim(fgets($mySIC_r))) {    			//to load array with std code list	
    $x = explode(',', $row);
    $array_sic[] = array($x[0], $x[0].' / '.$x[1]);
} //loop
fclose($mySIC_r);

?>