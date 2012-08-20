
<?php															//for combo of all 3 statements

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $text_1 = ($xProcess == 'manual') ? $combo : file_get_contents($url_base.$cik.'/'.$href);
    if (strlen($text_1) > 1000) {
	$process = $xProcess;
        include($php.'myData02-6.php');									//to clean up selection
        include($php.'myData02-3.php');									//to index table positions  
        $text_1 = str_replace(chr(44), '', $text_1);
        $text_2 = str_replace(chr(44), '', $text_2);
        include($php.'myData04-2.php');									//load table position array
        include($php.'myData04.php');									//to process table positions
        $_stat = (!empty($t_tx) && !empty($t_bx)) ? "true" : "false";
    } //end if
} //end if

?>