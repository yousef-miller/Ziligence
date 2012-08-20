
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $month = date("m", $sub) + 0;
    $_year = date("Y", $sub) + 0;
    $_year = ($month == 1 && (date("j", $sub) + 0) < 10) ? $_year - 1 : $_year;			//to fix irregular filing dates
    $month = ($month == 1 && (date("j", $sub) + 0) < 10) ? "12" : $month;				//to fix irregular filing dates
      
    include($php.'myData03-5.php');											//to translate month to quarter
    include($php.'myData03-7.php');											//to identify period #
} //end if

?>