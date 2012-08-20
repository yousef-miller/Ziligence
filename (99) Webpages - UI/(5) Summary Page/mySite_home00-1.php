<?php					//to identify current period number

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $sql = "select max(jPeriod) from _myHLinks where ticker = '$_ticker'";						//query hyperlink table for max jPeirod
    $result = mysql_query($sql, $connection) or die(mysql_error());
    $row = mysql_fetch_row($result);													//max jPeriod
    $jPeriod = ($row[0] % 5 == 0) ? ($row[0] - 1) : $row[0];									//to convert FY to Q4
    $rYq = $tArray[$jPeriod][0];
    include($php.'myData03-6.php');													//to determine jFields
} //end if

?>