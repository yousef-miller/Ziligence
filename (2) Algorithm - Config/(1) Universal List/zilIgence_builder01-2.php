
<?php				//to clear file contents

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'myData01-2.php');				//file paths
    $x = fopen($file_j, "w"); fclose($x);
    $x = fopen($file_m, "w"); fclose($x);
    $x = fopen($file_c, "w"); fclose($x);
    $x = fopen($file_r, "w"); fclose($x);
    $x = fopen($file_h, "w"); fclose($x);
    $x = fopen($file_mx, "w"); fclose($x);
    $x = fopen($file_cx, "w"); fclose($x);
    $x = fopen($file_rx, "w"); fclose($x);
    $x = fopen($file_hx, "w"); fclose($x);

    include($php.'dbConnect.php'); 											//connect to db
	$sql = "delete from _myHLinks where ticker = '$tkr'"; 						//to drop old records
	mysql_query($sql, $connection) or die(mysql_error());						
    mysql_close($connection);												//disconnect from db	
} //end if

?>