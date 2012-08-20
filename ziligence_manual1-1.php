<?php						//to query failed instance data tables

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'dbConnect.php'); 					   						//connect to db
   	$_x = ($process == 'core') ? "where ticker = '$_ticker'" : '';
	$_x =  (!empty($_sql_alt)) ? "where pos > '50000'" : $_x;
	$_x = (!empty($_GET[pos])) ? "where pos = '$_GET[pos]'" : $_x;
        $sql = "select min(pos) from _myFails $_x";

        $result = mysql_query($sql, $connection) or die(mysql_error());
        $row = mysql_fetch_row($result);										//fetch minimum position value
        $pos = $row[0];
    mysql_close($connection);												//disconnect from db	
    if (!empty($pos)) {include($php.'ziligence_manual1-6.php');}					//to query min position record

    while ($row[1] == $_GET[tkr]) {++$pos; include($php.'ziligence_manual1-6.php');}		//to cue up a different ticker
} //end if

?>