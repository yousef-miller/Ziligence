
<?php																					//upload to ratings

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
   include($php.'dbConnect.php'); 
    	$sql = "delete from _myRatings where ticker = '$_ticker'"; 									//clear prior uploads
    	mysql_query($sql, $connection) or die(mysql_error());
    	$sql = "load data local infile '$file_x' into table _myRatings fields terminated by ','"; 				//upload to ratings
    	mysql_query($sql, $connection) or die(mysql_error());
    mysql_close($connection);
} //end if


?>