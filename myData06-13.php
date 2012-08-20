
<?php							//to re-number table positions

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    if ($out_n2 <= 9) {$out_x = '000';}
    elseif ($out_n2 <= 99) {$out_x = '00';}
    elseif ($out_n2 <= 999) {$out_x = '0';}	
} //end if

?>