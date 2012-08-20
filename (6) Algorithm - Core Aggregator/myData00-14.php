
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    if ($_start_core != 'true') {																			//for PID restarts
	$_beta_start = ($_beta_start >= count($ary_corp)) ? "0" : $_beta_start;
	$_start_core = ($beta >= $_beta_start) ? 'true' : 'false';
    } //end if
} //end if

?>
