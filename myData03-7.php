<?php													//to process rYq

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $rYq = trim($_year.$qtr);
    $continue = (substr($rYq, -2, 2) == 'xx') ? "true" : "false";

    if ($continue == "false") {
    	include($php.'myData03-1.php');								//to identify period #
    	$continue = (isset($jField)) ? "false" : "true";
    } //end if	
} //end if

?>