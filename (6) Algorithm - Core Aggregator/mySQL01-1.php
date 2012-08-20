
<?php						//to load jResults to master table OR temp table

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $sql = "delete from $_tbl where ticker = '$tkr' and user_id = '$_user_id'";
    mysql_query($sql, $connection) or die(mysql_error());
    if (file_exists($file_j) && strlen(file_get_contents($file_j)) > 1000) {
        $sql = "load data local infile '$file_j' into table $_tbl fields terminated by ','"; 
        mysql_query($sql, $connection) or die(mysql_error());

        $sql = "delete from _myJData where ticker is null or tbl is null or user_id regexp '^-?[0-9]+$'";
        mysql_query($sql, $connection) or die(mysql_error());
    } //end if
} //end if

?>