<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $body = trim($body).'?<END>'; $body = trim(str_replace('?', "\r\n", $body)); 
    if (strlen($body) < 100) {$continue = "true";}
    else {
    	$continue = "false";
    	$jData_w = fopen($file_j, "w"); fwrite($jData_w, $body); fclose($jData_w);
    } //end if
    unset($body);
} //end if

?>