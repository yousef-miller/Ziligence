<?php

if (!empty($cik) && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'myData01-2.php');							//file paths
    include($php.'dbConnect.php'); 					   			//connect to db
        $_tbl = '_myJData'; include($php.'mySQL01-1.php');			//to load jResults
	include($php.'mySQL01-3.php');							//to load files into mySQL
    mysql_close($connection);									//disconnect from db	
} //end if

?>