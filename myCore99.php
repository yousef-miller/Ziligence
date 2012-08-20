
<?php

$php = '/mnt/data/myuser/'; $_access_override = 'true'; include($php.'dbIndex.php');
$keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
$keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';

$file = $myPHPcore; include($php.'myData00-15.php');							//to run PID process for CronTab
if ($_lapse == 'true') {
    include($php.'dbConnect.php'); 					   							//connect to db
        $sql = "select min(pos) from _myFails";
        $result = mysql_query($sql, $connection) or die(mysql_error());
        $row = mysql_fetch_row($result);											//fetch minimum position value
        $fail_n = (!empty($row[0])) ? $row[0] : "0";
    mysql_close($connection);													//disconnect from db	
    proc_nice(-20); include($php.'myCore00.php');									//to run master parsing process
} //end if

?>