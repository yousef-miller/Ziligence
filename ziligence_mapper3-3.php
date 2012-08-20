
<?php					//to build strings

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $xstr1 = ($t_i == 3) ? $full_str[3] : strtolower($full_str[0].'_'.$xv_lbl[1].'_'.$xv_lbl[2]);

    $out_n2 = ltrim(substr($full_str[1], 1), "0") + 0;										//to renumber odd/evens for subtotal lines
    if ($sClass_1 == '###') {$out_n2 = ($out_n2&1) ? $out_n2 : ($out_n2 + 1);}					//for substotal rows
    else {$out_n2 = ($out_n2&2) ? $out_n2 : ($out_n2 - 1);}									//for non_subtotal rows
    $out_n2 = ($out_n2 >= 0) ? $out_n2 : "0";
    include($php.'myData06-13.php');													//to re-number table positon
    $tbl = $t_i.$out_x.$out_n2;	

    $xstr2 = trim($full_str[0].chr(44).$tbl.chr(44).$bdr.chr(44).$xstr1.chr(44).$sClass_1.chr(44));
    $xstr3 = trim(substr($jStr, strpos($jStr, $full_str[5], 0)));
    $body = $body.$xstr2.$xstr3.'?';
} //end if

?>