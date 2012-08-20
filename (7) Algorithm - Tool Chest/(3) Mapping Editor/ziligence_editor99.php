
<?php																			//to recalculate rolling12s, variances, etc.

$php = '/mnt/data/myuser/'; $_access_override = 'true'; include($php.'dbIndex.php');
$keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
$keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';

sleep(2); include($php.'dbConnect.php'); 
    $sql = "select * from _myRecalcs where left(ticker, 1) <> '^' limit 0,1";
    $result = mysql_query($sql, $connection) or die(mysql_error());
    $row = mysql_fetch_row($result);
    if (!empty($row[0])) {
        $sql = "delete from _myRecalcs where ticker = '$row[0]' and user_id = '$row[3]'";
        mysql_query($sql, $connection) or die(mysql_error());
    } //end if
mysql_close($connection);	

if (!empty($row[0])) {
    $tkr = trim((string)$row[0]); $_ticker = $tkr; $cik = trim((string)$row[1]); $fye = trim((string)$row[2]); $_user_id = trim((string)$row[3]);
    include($php.'dbConnect.php'); 
	$file_x = '/mnt/data2/mydata/admin2_recalc.txt'; $_pid = getmypid();
    	$file_w = fopen($file_x, "w"); fwrite($file_w, "^$tkr,$cik,$fye,$_user_id,$_pid"); fclose($file_w);
    	$sql = "load data local infile '$file_x' into table _myRecalcs fields terminated by ','"; 
    	mysql_query($sql, $connection) or die(mysql_error()); 
    mysql_close($connection);	

    proc_nice(-15); $process = 'mapping'; include($php.'ziligence_manual3-2.php');				//to recalculate rolling12s, variances, etc.

     include($php.'dbConnect.php'); 
        $sql = "delete from _myRecalcs where ticker = '^$tkr' and user_id = '$_user_id'";
        mysql_query($sql, $connection) or die(mysql_error());
    mysql_close($connection);	
} //end if

?>