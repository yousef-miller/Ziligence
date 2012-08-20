
<?php										//to build datasets w/ details of overview (decription, etc.)

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'myUniverse00-3.php');						//to create listing of ticker symbols
    include($php.'myData00-1.php');						//to load array_corp with tickers to iterate			
    include($php.'myUniverse00.php');						//to update universe list w/ details
    include($php.'myUniverse06.php');						//to update SP500 list w/ details

    include($php.'dbConnect.php'); 
    	$sql = "delete from  _myOwnership"; 
    	mysql_query($sql, $connection) or die(mysql_error());
    	$sql = "delete from  _myCompanies"; 
    	mysql_query($sql, $connection) or die(mysql_error());
    	$sql = "delete from  _mySP500"; 
    	mysql_query($sql, $connection) or die(mysql_error());

    	$sql = "load data local infile '$myOwnership' into table _myOwnership fields terminated by ','"; 
    	mysql_query($sql, $connection) or die(mysql_error());
	$sql = "load data local infile '$myCompanies' into table _myCompanies fields terminated by ','"; 
	mysql_query($sql, $connection) or die(mysql_error());
    	$sql = "load data local infile '$mySP500' into table _mySP500 fields terminated by ','"; 
    	mysql_query($sql, $connection) or die(mysql_error());
    mysql_close($connection);
} //end if

?>