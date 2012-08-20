
<?php

$php = '/mnt/data/myuser/'; include($php.'myLogin_2.php'); 										//to look up user id
if ($_access == 'true' && empty($keycode_1)) {
    $_access_override = 'true'; include($php.'myData00.php'); include($php.'dbIndex.php');		
    $keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
    $keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';
    include($php.'ziligence_editor1-3.php'); 
    $_ticker = trim((string)$tkr); $tkr = $_ticker; $fye = trim((string)$fye); $cik = trim((string)$cik);		//to query fye & cik
} //end if

if ($_access == 'true' && !empty($tkr) && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'dbConnect.php'); 
    	$sql = "select * from _myRecalcs where ticker = '^$tkr' and user_id = '$_user_id'";				//verify whether on cue or not
    	$result = mysql_query($sql, $connection) or die(mysql_error());
    	$row = mysql_fetch_row($result); 
	if (!empty($row[4])) {$_pid = $row[4]; exec("kill -9 $_pid)");}
   	$sql = "delete from _myRecalcs where ticker in ('$tkr','^$tkr') and user_id = '$_user_id'";			//cancel from cue (running script)
    	mysql_query($sql, $connection) or die(mysql_error());
        $sql = "delete from _myFails where pos > '50000'";
        mysql_query($sql, $connection) or die(mysql_error());
    mysql_close($connection);	

    if (!empty($fye) && !empty($cik)) {
        if ($_POST[single_tkr] == "true") {
	    include($php.'myUsers01.php');	$_user_id = 'admin';							//clear files && mySQL tables
	    $_purge = "true"; include($php.'ziligence_builder02-1.php');
	}  //end if
        else {
            include($php.'ziligence_mapper3-6.php');										//to run ovveride process
            include($php.'ziligence_mapper4.php');        									//TO CALCULATE STD LABELS
            $jPeriod = -1; while (++$jPeriod < count($tArray)) {
	        $rYq = strtoupper($tArray[$jPeriod][0]);
	        $is = ($_POST[$rYq.'_box1'] == 'true') ? "true" : "false";
	        $bs = ($_POST[$rYq.'_box2'] == 'true') ? "true" : "false";
	        $cf = ($_POST[$rYq.'_box3'] == 'true') ? "true" : "false";
	        if ($is == "true" || $bs == "true" || $cf == "true") {
		    $_proc_x = 'true';
	            include($php.'ziligence_editor1-2.php');										//to query hyperlinks (get href && acc1)
		    unset($pos); include($php.'ziligence_manual2.php');								//to delete record from myFails table
		    if (!empty($acc1) && !empty($href)) {include($php.'myCore00-7.php');}			//to log fails
	        } //end if
            } //loop
	    //if ($_user_id == 'admin') {include($php.'myUsers00.php');}		//to update user specific files / mySQL
	    if ($_proc_x == 'true') {include($php.'ziligence_manual0.php');} else {include($php.'mySQLquery.php');}
        } //end else
    } //end if
} //end if

?>