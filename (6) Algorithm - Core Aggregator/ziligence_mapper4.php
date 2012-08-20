<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'dbConnect.php'); 
        $sql = "select distinct * from _myJData where ticker = '$tkr' and user_id = '$_user_id' order by tbl";
        $result = mysql_query($sql, $connection) or die(mysql_error());
        while ($ary_result[++$_count] = implode(',', mysql_fetch_row($result)));
    mysql_close($connection);	

    $t_i = 0; while (++$t_i <= 3) {
	$theta = 0; while (++$theta <= $_count) {
	    $_map = $_POST[$theta.'drop'.$t_i];
	    $_serial = $_POST[$theta.'text'.$t_i].'_';
	    $_verify = $_POST[$theta.'verify'.$t_i];
	    if (isset($_serial) !== true) {break;}
	    elseif (strlen($_serial) == 6) {
		$a = -1; while (++$a < $_count) {
		    $jStr = $ary_result[$a]; $full_str = explode(',', $jStr);
	            if (strpos($full_str[5], $_serial) !== false) {
			unset($ary_result[$a]); $_proc = "true";
			if ($_map == 'xxx') {break;}													//for delete row selections
		        $sClass_1 = ($_map == 'sub') ? '###' : ($_map == 'tbd') ? '' : $_map;
			$bdr = ($_map == 'sub') ? '$' : ''; $xv_lbl = explode('_', $full_str[3]);
		        include($php.'ziligence_mapper3-3.php');
			//if ($_map != $_verify) {CREATE PROCESS TO UPDATE OVERRIDE MAPPING FOR USER ACCOUNT}
			break;
	            } //end if
		} //loop
	    } //end if
	} //next theta2
    } //next theta1

    if ($_proc == "true") {
        unset($a); while (++$a <= $_count) {if (!empty($ary_result[$a][0])) {$body = $body.$ary_result[$a].'?';}}
        include($php.'myData01-2.php');													//file paths
        include($php.'myCore00-4.php');

	include($php.'dbConnect.php'); 
            $sql = "select * from _myRecalcs where ticker in ('$tkr','^$tkr') and user_id = '$_user_id'";			//verify whether on cue or not
            $result = mysql_query($sql, $connection) or die(mysql_error());
	    $row_x = mysql_fetch_row($result);
	    if (empty($row_x[0])) {
	        $file_x = '/mnt/data2/mydata/'.$_user_id.'_recalc.txt';
    	        $file_w = fopen($file_x, "w"); fwrite($file_w, "$tkr,$cik,$fye,$_user_id"); fclose($file_w);
    	        $sql = "delete from _myRecalcs where ticker = '$tkr' and user_id = '$_user_id'";
    	        mysql_query($sql, $connection) or die(mysql_error());
    	        $sql = "load data local infile '$file_x' into table _myRecalcs fields terminated by ','"; 
    	        mysql_query($sql, $connection) or die(mysql_error()); 
	    } //end if
	mysql_close($connection);
    } //end if
} //end if

?>