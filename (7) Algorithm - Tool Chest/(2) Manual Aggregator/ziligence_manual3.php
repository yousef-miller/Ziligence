<?php

$php = '/mnt/data/myuser/'; $_access_override = 'true'; include($php.'dbIndex.php');
$keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
$keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';

include($php.'myData00.php');
$str = preg_replace('/\s+/', '',  $_POST[parameters]);
include($php.'ziligence_manual3-5.php');													//to get parameters

if (!empty($_POST[month]) && !empty($_POST[year])) {include($php.'ziligence_manual3-7.php');}	//rYq overrides
else {include($php.'ziligence_manual3-9.php');}

include($php.'ziligence_manual3-10.php');											//to run data process

if ($m_tx == "false") {unset($t_tx);}
if ($m_bx == "false") {unset($t_bx);}
if ($m_gx == "false") {unset($t_gx);}

unset($back); include($php.'ziligence_manual0.php');									//return for next manual upload

?>