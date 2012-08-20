
<?php				//to create xDlm

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($xDlm); $a = 0; while (++$a <= $_fCount) {$xDlm = $xDlm.',0';}
    $xDlm = $xDlm.chr(44).$_user_id;
} //end if

?>