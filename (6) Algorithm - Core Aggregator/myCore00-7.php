<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $rYq = (!empty($rYq)) ? strtolower($rYq) : 'X';
    $jPeriod = (!empty($jPeriod)) ? $jPeriod : 'X';
    if ($rYq != 'X' && $jPeriod != 'X') {include($php.'myData00-6.php');}			 //update hyperlinks dataset

    $myFails_w = fopen($myFails, "w");
    fwrite($myFails_w, ++$fail_n.",$tkr,$cik,$fye,$rYq,$jPeriod,$acc1,$href,$href3"."\r\n");
    fclose($myFails_w); 

    include($php.'dbConnect.php'); 											//connect to db
	if (!empty($acc1)) {													//to prevent duplicate entries
	    $sql = "delete from _myFails where ticker = '$tkr' and acc1 = '$acc1'"; 	
	    mysql_query($sql, $connection) or die(mysql_error());
	} //end if

	if ($rYq != 'X') {													//to prevent duplicate entries
	    $sql = "delete from _myFails where ticker = '$tkr' and rYq = '$rYq'"; 	
	    mysql_query($sql, $connection) or die(mysql_error());
	} //end if

	$sql = "load data local infile '$myFails' into table _myFails fields terminated by ','"; 
	mysql_query($sql, $connection) or die(mysql_error());
    mysql_close($connection);												//disconnect from db	
} //end if

?>