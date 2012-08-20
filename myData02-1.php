<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'dbConnect.php'); 
        $sql = "select distinct * from _myHLinks where acc1 = '$accession1'";
        $result = mysql_query($sql, $connection) or die(mysql_error());
	$row = mysql_fetch_row($result);
	$continue = (!empty($row[0])) ? "true" : "false";
	$prev_update = $continue;											//to tag iterations so they don't get logged as fails
     mysql_close($connection);
} //end if

?>