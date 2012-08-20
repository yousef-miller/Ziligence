<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $str = "$tkr,$cik,$rYq,$jPeriod,$filing_date_1,$filing_date_2,$acc1,$url_s2,$href,";    

    $myHyperlinks_w = fopen($myHyperlinks, "w");
	fwrite($myHyperlinks_w, $str."\r\n");									//to record sucessful process && hyperlink		
    fclose($myHyperlinks_w);

    include($php.'dbConnect.php'); 											//connect to db
	$sql = "delete from _myHLinks where ticker = '$tkr' and rYq = '$rYq'"; 
	mysql_query($sql, $connection) or die(mysql_error());						//to drop old record (if exists)
	$sql = "delete from _myFails where ticker = '$tkr' and acc1= '$acc1'";
    	mysql_query($sql, $connection) or die(mysql_error());

	$sql = "load data local infile '$myHyperlinks' into table _myHLinks fields terminated by ','"; 
	mysql_query($sql, $connection) or die(mysql_error());						//to add new record
    mysql_close($connection);												//disconnect from db	
} //end if

?>