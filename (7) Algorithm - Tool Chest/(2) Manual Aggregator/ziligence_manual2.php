<?php								//to delete last item updated

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
        include($php.'dbConnect.php'); 					   	//connect to db
	if (!empty($pos)) {
            $sql = "delete from _myFails where ticker = '$tkr' && pos = '$pos'";
            mysql_query($sql, $connection) or die(mysql_error());
	} //end if
        if (is_numeric($jPeriod)) {
	    $sql = "delete from _myFails where ticker = '$tkr' && jPeriod = '$jPeriod'";
            mysql_query($sql, $connection) or die(mysql_error());
	} //end if
    mysql_close($connection);							//disconnect from db	
} //end if

?>