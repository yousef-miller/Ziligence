
<?php					//to load result files into mySQL by user_id and ticker

if (!empty($_user_id) && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $sql = "delete from _myMData where ticker = '$_ticker'";
    mysql_query($sql, $connection) or die(mysql_error());
    $sql = "load data local infile '$file_m' into table _myMData fields terminated by ','"; 
    mysql_query($sql, $connection) or die(mysql_error()); 

    $sql = "delete from _myCData where ticker = '$_ticker'";
    mysql_query($sql, $connection) or die(mysql_error());
    $sql = "load data local infile '$file_c' into table _myCData fields terminated by ','"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $sql = "delete from _myRData where ticker = '$_ticker'";
    mysql_query($sql, $connection) or die(mysql_error());
    $sql = "load data local infile '$file_r' into table _myRData fields terminated by ','"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $sql = "delete from _myMxData where ticker = '$_ticker'";
    mysql_query($sql, $connection) or die(mysql_error());
    $sql = "load data local infile '$file_mx' into table _myMxData fields terminated by ','"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $sql = "delete from _myCxData where ticker = '$_ticker'";
    mysql_query($sql, $connection) or die(mysql_error());
    $sql = "load data local infile '$file_cx' into table _myCxData fields terminated by ','"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $sql = "delete from _myRxData where ticker = '$_ticker'";
    mysql_query($sql, $connection) or die(mysql_error());
    $sql = "load data local infile '$file_rx' into table _myRxData fields terminated by ','"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $sql = "delete from _myMData where ticker is null or tbl is null or user_id regexp '^-?[0-9]+$'";
    mysql_query($sql, $connection) or die(mysql_error());

    $sql = "delete from _myCData where ticker is null or tbl is null or user_id regexp '^-?[0-9]+$'";
    mysql_query($sql, $connection) or die(mysql_error());

    $sql = "delete from _myRData where ticker is null or tbl is null or user_id regexp '^-?[0-9]+$'";
    mysql_query($sql, $connection) or die(mysql_error());

    $sql = "delete from _myMxData where ticker is null or tbl is null or user_id regexp '^-?[0-9]+$'";
    mysql_query($sql, $connection) or die(mysql_error());

    $sql = "delete from _myCxData where ticker is null or tbl is null or user_id regexp '^-?[0-9]+$'";
    mysql_query($sql, $connection) or die(mysql_error());

    $sql = "delete from _myRxData where ticker is null or tbl is null or user_id regexp '^-?[0-9]+$'";
    mysql_query($sql, $connection) or die(mysql_error());
} //end if

?>