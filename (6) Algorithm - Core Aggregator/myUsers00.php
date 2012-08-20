
<?php															//to refresh records for each registered user

////MYCORE00 AND ZILIGENCE_EDITOR_1

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($array_users); include($php.'dbConnect.php');
        $sql = "select distinct user_id from _myJData where ticker = '$_ticker' and user_id <> 'admin'";
        $result = mysql_query($sql, $connection) or die(mysql_error());
        unset($row); while ($array_users[] = mysql_fetch_array($result));
    mysql_close($connection);

    $delta = -1; while (++$delta < count($array_users)) { 
	$_user_id = $array_users[$delta][0];
	$file_j = '/mnt/data2/mydata/'.$_user_id.'_'.$cik.'J.txt';
       	if (file_exists($file_j)) {
	    $file_r = fopen($file_j, "r");
	    while ($row = trim(fgets($file_j))) {
		$x = explode(',', $row); 
		$x1 = "$x[0],$x[1],$x[2],$x[3],$x[4]"; $ary_map[] = array($x[5], $x1);
	    } //loop
	    fclose($file_r);
	 } //end if

        $file_r = fopen($admin_path.$cik.'J.txt', "r"); $file_w = fopen($file_j, "w"); 
        unset($_body); while ($row = trim(fgets($file_r))) {
	    $x = explode(',', $row); 
	    $a = -1; while (++$a < count($ary_map)) {
		if (strpos($row, $ary_map[$a][0]) !== false) {$row = str_replace("$x[0],$x[1],$x[2],$x[3],$x[4]", $ary_map[$a][1], $row); break;}
	    } //loop
	    $_body = $_body.substr($row, 0, -5).$_user_id."\r\n";
	} //loop
	fclose($file_r); fwrite($file_w, $_body); fclose($file_w);
	include($php.'dbConnect.php');
	    $_tbl = '_myJData'; include($php.'mySQL01-1.php');							//to load results
	mysql_close($connection);		   
    } //loop
} //end if

?>