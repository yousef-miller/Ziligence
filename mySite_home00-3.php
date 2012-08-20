
<?php

if (strlen($_user_id) == 5 && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {			//to track searches per user account	
    $path_x = '/mnt/data2/mydata/'.$_user_id.'_search.txt'; $file_x = fopen($path_x, 'w'); fwrite($file_x, "$_ticker,".time().",$_user_id"); fclose($file_x);	
    $sql = "delete from _mySearches where ticker = '$_ticker' and user_id = '$_user_id'";
    $result = mysql_query($sql, $connection) or die(mysql_error()); 
    $sql = "load data local infile '$path_x' into table _mySearches fields terminated by ','";
    $result = mysql_query($sql, $connection) or die(mysql_error());
} //end if	

?>