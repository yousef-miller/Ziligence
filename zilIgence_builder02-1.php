
<?php					//to re-start core process or run for single ticker

if (!empty($_ticker) && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $_purge = (isset($_purge) !== true) ? $_POST[single_tkr] : $_purge;
    $myUniverse_r = fopen($myUniverse, "r");						
    while ($row = trim(fgets($myUniverse_r))) {
        $sel = explode(',', strtoupper($row));
        if ($sel[2] == $_ticker) {$sCorp = $sel[0]; $cik = $sel[4]; break;}  
    } fclose($myUniverse_r); 
    if ($sCorp >= 0) {$nCorp = ($_purge == 'true') ? "0" : $nCorp;}
    if ($_purge == 'true' && !empty($cik)) {
        include($php.'ziligence_builder01-2.php');												//to clear files
        include($php.'ziligence_builder01-3.php');												//to clear hLink log
        include($php.'ziligence_builder01-4.php');												//to clear failed log
    } //end if
    if (!empty($sCorp) && !empty($cik)) {
	$_start_core = 'true'; $proc_override = 'true'; $method = "a"; include($php.'myCore00.php');		//to run parsing process
    } //end if
    unset($t_tx); unset($t_bx); unset($t_gx);													//to purge variables
    include($php.'ziligence_manual0.php');													//to jump to manual input screen
} //end if

?>