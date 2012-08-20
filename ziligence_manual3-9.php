<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $override = trim($_POST[override]); if (strlen($override) > 2) {include($php.'ziligence_manual3-8.php');}		//to process overrides
    $istmt = trim($_POST[istmt]); $bsht = trim($_POST[bsht]); $cflow = trim($_POST[cflow]); $combo = trim($_POST[combo]);

    if (!empty($istmt) && !empty($bsht)) {$xProcess = 'manual'; include($php.'ziligence_manual3-0.php');}
    elseif (!empty($combo)) {$xProcess = 'manual'; include($php.'ziligence_manual3-6.php');}
    else {$xProcess = 'manual/auto'; include($php.'ziligence_manual3-6.php');}	

    if ($xProcess == 'manual') {$is_skip = $_POST[is_skip]; $bs_skip = $_POST[bs_skip]; $cf_skip = $_POST[cf_skip];}			    
} //end if

?>