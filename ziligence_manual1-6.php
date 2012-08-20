
<?php						//to query min position record

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'dbConnect.php'); 	
        $sql = "select distinct * from _myFails where pos = '$pos'";
        $result = mysql_query($sql, $connection) or die(mysql_error());
        $row = mysql_fetch_row($result);
    mysql_close($connection);		
} //end if

?>