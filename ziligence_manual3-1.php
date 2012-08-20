<?php						//to clean up table selections

$x1 = strpos($text_1, '<TABLE', 0);
$x2 = strpos($text_1, '</TABLE', 0);
if ($x2 !== false) {
    if ($x1 === false) {$text_1 = '<TABLE>'.$text_1;}
    else {
	if ($x1 < $x2) {$text_1 = substr($text_1, $x1);}
	else {$text_1 = '<TABLE>'.$text_1;}
    } //end else
} //end if

$x2 = strrpos($text_1, '</TABLE', 0);
if ($x2 !== false) {$text_1 = substr($text_1, 0, $x2).'</TABLE>';}

?>