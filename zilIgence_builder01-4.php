

<?php							//to delete prior failed entries to log

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'dbConnect.php'); 
        $sql = "delete from _myFails where ticker = '$_ticker'";
        $result = mysql_query($sql, $connection) or die(mysql_error());
     mysql_close($connection);
} //end if

?>