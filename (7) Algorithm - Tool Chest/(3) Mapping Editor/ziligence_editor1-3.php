<?php

if ($_access == 'true' && empty($tkr) && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $tkr =$_GET['tkr'];
    include($php.'dbConnect.php'); 
	 $sql = "select * from _myCompanies where ticker = '$tkr'";
    	 $result = mysql_query($sql, $connection) or die(mysql_error());
	 $x = mysql_fetch_row($result); 
	 $fye = substr($x[4], 1, 2); $cik = $x[3];
    mysql_close($connection);	
} //end if

?>