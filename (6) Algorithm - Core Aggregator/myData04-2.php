

<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($ary_stmt_pos); $type = 0; while (++$type <= 3) {
    	switch($type) {
            case "1": $ary_x = $ary_is; $xbrl = 'XBRLOP'; break;
            case "2": $ary_x = $ary_bs; $xbrl = 'XBRLBS'; break;
            case "3": $ary_x = $ary_cf; $xbrl = 'XBRLCF'; break;
    	} //end switch

        $xbrl = "false"; $tVerify = "true"; $gt = '>'; include($php.'myData04-4.php');
        if ($break == "false") {$tVerify = "true"; $gt = ''; include($php.'myData04-4.php');}
        if ($break == "false") {$tVerify = "false"; $gt = '>'; include($php.'myData04-4.php');}
        if ($break == "false") {$tVerify = "false"; $gt = ''; include($php.'myData04-4.php');}
        if ($break == "false") {$xbrl = "true"; include($php.'myData04-4.php');}
     } //next type
} //end if

?>
