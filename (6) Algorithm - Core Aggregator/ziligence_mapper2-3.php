<?php

$a = -1; while (++$a < count($ary_label)) {
    $jRow = explode(',', $ary_label[$a][2]);
    $xv_sum = $jRow[$jField];
    $sClass = trim($ary_label[$a][3]);
    if ($sClass != '_') {include($php.'myJoin02-1.php');}			//subtotal arrays utilizing std labels (sClass)
} //loop

unset($ary_label);

?>