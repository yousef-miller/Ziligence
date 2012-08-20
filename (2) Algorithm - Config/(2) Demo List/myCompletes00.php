
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $file_w = fopen($myCompletes, 'w'); $x = getmypid().chr(44).$beta.chr(44).time(); fwrite($file_w, $x); fclose($file_w);	//PID / Time
    include($php.'dbConnect.php');
	$sql = "select distinct * from _myCompanies where ticker <> '_' order by ticker";
	$result = mysql_query($sql, $connection) or die(mysql_error());
	unset($ary_corp); while ($ary_corp[] = mysql_fetch_array($result));
    mysql_close($connection);

    $file_x = fopen($myCompanies_2, "w"); fclose($file_x);								//to clear file contents
    unset($_upload_stat); $beta = -1; while (++$beta < count($ary_corp)) {    				//to load array with std code list	
        $illegal = array(chr(39), chr(44));
	$_co = explode('/', strtoupper($ary_corp[$beta][1])); $_co = str_replace($illegal, '', trim($_co[1])); 
	$_tkr = trim($ary_corp[$beta][0]); $_exch =  trim($ary_corp[$beta][2]); 
	$_sic = str_replace($illegal, '', strtoupper(trim($ary_corp[$beta][5]))); 
    	if ($ary_corp[$beta][3] == 'N/A' || strlen($ary_corp[$beta][3]) == 0 || strlen($_sic) <= 5) {continue;}
 
	 include($php.'dbConnect.php');
            $sql = "select distinct * from _myFails where ticker = '$_tkr'";
            $result = mysql_query($sql, $connection) or die(mysql_error());
            unset($row1); while ($row1[] = mysql_fetch_array($result));

            $sql = "select distinct * from _myHLinks where ticker = '$_tkr'";
            $result = mysql_query($sql, $connection) or die(mysql_error());
            unset($row2); while ($row2[] = mysql_fetch_array($result));
	mysql_close($connection); fclose($file_r); fclose($file_a);

        if (empty($row1[0][0]) && !empty($row2[0][0])) {
	    $str = "$_tkr,$_co,$_exch,$_sic";
	    if (strlen($str) > 10) {$_upload_stat = 'true'; $file_a = fopen($myCompanies_2, "a"); fwrite($file_a, $str."\r\n"); fclose($file_a);}
        } //end if
	$file_w = fopen($myCompletes, 'w'); $x = getmypid().chr(44).$beta.chr(44).time(); fwrite($file_w, $x); fclose($file_w);	//PID / Time
    } //loop

   if ($_upload_stat == 'true') {
	include($php.'dbConnect.php'); 
	    $sql = "delete from _myCompanies_2"; 
            $result = mysql_query($sql, $connection) or die(mysql_error());
	    $sql = "load data local infile '$myCompanies_2' into table _myCompanies_2 fields terminated by ','"; 
    	    mysql_query($sql, $connection) or die(mysql_error());
	mysql_close($connection); 
    } //end if
} //end if

?>

