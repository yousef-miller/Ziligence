

<?php                                                   //to search for report titles wth in report body

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $loop = 0; while (++$loop <= 3) {
        $a = -1; while (++$a < count($ary_x)) {
            $break = "false"; unset($x2_last); unset($_audit);

            $x = ($loop == 3) ? 'CONSOLIDATED' : '';
            $_title1 = $ary_x[$a][0].$x.$ary_x[$a][1];
            $_title2 = str_replace(chr(32), '', $_title1);

	    if ($loop == 1) {
            	$_audit = strpos($text_2, 'WECONDUCTEDOURAUDIT', 0);
	    	if ($_audit === false) {$_audit = strpos($text_2, 'WEBELIEVETHATOURAUDIT', 0);}
	    } //end if

            if (strpos($text_2, $_title2, 0) !== false) {
                $x = ($_audit !== false) ? $_audit : "0";
                do {
                    $x = strpos($text_2, $_title2, $x + 5);
                    $x1 = strpos($text_2, '<TABLE', $x);
                    $x2 = strpos($text_2, '</TABLE>', $x);
                    if ($x !== false) {include($php.'myData04-3.php');}
                } while ($x !== false);
                if ($break == "true") {break;}
            } //end if
        } //loop
        if ($break == "true") {break;}
    } //loop
} //end if

?>