<?php											//to handle override month / year

$month = trim($_POST[month]) + 0;
$_year = trim($_POST[year]) + 0;

if ($month != 0 && $_year != 0) {
    $form = '10-Q'; $fye_str = $ary_qtr[$fye][0]; 
    include($php.'myData03-5.php');									//to translate montb to quarter
    $qtr = ($qtr == 'xx') ? 'fy' : $qtr;
    if ($p !== false) {include($php.'myData03-7.php');}									//process rYq
    include($php.'ziligence_manual3-9.php');
} //end if

?>