
<?php										//for manual process / 1st column skipper

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    switch ($t_i) {
	case "1": $skip_col = ($is_skip == "true") ? "true" : "false"; break;
	case "2": $skip_col = ($bs_skip == "true") ? "true" : "false"; break;
	case "3": $skip_col = ($cf_skip == "true") ? "true" : "false"; break;
    } //end switch
} //end if

?>