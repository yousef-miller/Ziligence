
<?php									//to p/u acc1 && href && href3 from hyperlinks SQL table

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($acc1); unset($href); unset($href3);
    include($php.'dbConnect.php');													//to p/u acc1 && href && href3
	$_x = "where ticker = '$tkr' and jPeriod = '$jPeriod' and rYq = '$rYq'";
	$sql = "select distinct * from _myHLinks $_x";
	$result = mysql_query($sql, $connection) or die(mysql_error());
        $row = mysql_fetch_row($result);
        if (!empty($row)) {$acc1 = $row[6]; $href = $row[7]; $href3 = $row[8];}
	else {
	    $sql = "select distinct * from _myFails $_x";
            $result = mysql_query($sql, $connection) or die(mysql_error());
            $row = mysql_fetch_row($result);
	    if (!empty($row)) {$acc1 = $row[6]; $href = $row[7]; $href3 = $row[8];}
    	} //end else
    mysql_close($connection);	
} //end if			

?>