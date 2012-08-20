
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $myClasses_w = fopen($myClasses, "w"); 		
    fwrite($myClasses_w, $sClass.','.$xClass."\r\n"); 
    fclose($myClasses_w); 

    include($php.'dbConnect.php'); 						//connect to db
        $sql = "load data local infile '$myClasses' into table _myClasses fields terminated by ','"; 
        mysql_query($sql, $connection) or die(mysql_error()); 
    mysql_close($connection);							//disconnect from db	
} //end if

?>