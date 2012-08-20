<?php									//to identify period # -> field # for query output

unset($jPeriod); $a = -1; while (++$a < count($tArray)) {
    if ($tArray[$a][0] == $rYq) {$jPeriod = $a; break;}
} //loop 

if (isset($jPeriod)) {include($php.'myData03-6.php');}								//to determine jFields

?>