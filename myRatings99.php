
<?php

$php = '/mnt/data/myuser/'; $_access_override = 'true'; include($php.'dbIndex.php');
$keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
$keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';

$file = $myRatings; include($php.'myData00-15.php');								//to run PID process for CronTab
if ($_lapse == 'true') {proc_nice(20); include($php.'myRatings00.php');}				//to run API calls for ratings results

?>