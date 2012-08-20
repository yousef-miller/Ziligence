
<?php																		//to process results

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $continue = "false"; include($php.'myData01.php');									//to load arrays	
    $t_i = 0; while (++$t_i <= 3) {
        include($php.'ziligence_mapper2-4.php');										//to assign parameters
        $theta = -1; while (++$theta < count($ary_label_x)) {
	    $proc = "0"; $xv_sum = 0; $xv = 0; $jStr = $ary_label_x[$theta][2];
	    $process = 'override'; include($php.'myData03-3.php');							//to build body string / results
	} //loop
    } //loop
    include($php.'myData01-2.php');												//file paths
    include($php.'myCore00-4.php');												//to write output
} //end if

?>