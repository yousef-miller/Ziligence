
<?php										//to overwrite records for each registered user

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $delta = -1; while (++$delta < count($array_users)) { 
	$_user_id = $array_users[$delta][0];
	if ($_user_id == 'admin') {continue;} 
	$file_j = '/mnt/data2/mydata/'.$_user_id.'_'.$cik.'J.txt';
	$file_w = fopen($file_j, "w"); fclose($file_j);
	include($php.'dbConnect.php');
	    $_tbl = '_myJData'; include($php.'mySQL01-1.php');							//to load results
	mysql_close($connection);		   
    } //loop
} //end if

?>