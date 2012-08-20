<?php												//to log and pass on failed uploads

$php='/mnt/data/myuser/'; $_access_override = 'true'; include($php.'dbIndex.php');
$keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
$keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';
$process = 'manual';													//assign process type

$str = preg_replace('/\s+/', '',  $_GET[str]);
include($php.'ziligence_manual3-5.php');										//to get parameters

if (!empty($tkr) && !empty($cik)) {
    //include($php.'ziligence_manual2.php');										//to delete last record
} //end if

include($php.'ziligence_manual0.php');											//return for next manual upload

?>