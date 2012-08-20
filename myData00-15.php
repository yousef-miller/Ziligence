
<?php																			//for PID process for CronTab

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $_x = file($file);
    $_x = explode(',', $_x[0]);
    $_pid = (!empty($_x[0])) ? $_x[0] : '99999999'; 
    $_beta_start = (!empty($_x[1])) ? $_x[1] + 1 : "0";
    if (empty($_x[2])) {$_lapse = 'true';}
    elseif (time() - ($_x[2] + 0) > 150) {
	$_lapse = 'true'; exec("kill -9 $_pid");												//to kill zombie process
	$file_x = fopen($file, $w); $x = $_pid.chr(44).$_x[1].chr(44).time(); fwrite($file_x, $x); fclose($file_x);
     } //end elseif
} //end if

?>