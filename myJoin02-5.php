<?php						//to query EPS from TTM database for same period in prior year

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($priorDeferredTax);
    $sql = "select distinct * from _myMData where ticker = '$tkr' and class = '111' and user_id = '$_user_id'"; 
    $result = mysql_query($sql, $connection) or die(mysql_error());
    $row = mysql_fetch_row($result);
    $_dta = $row[jField_3];

    $sql = "select distinct * from _myMData where ticker = '$tkr' and class = '207' and user_id = '$_user_id'"; 
    $result = mysql_query($sql, $connection) or die(mysql_error());
    $row = mysql_fetch_row($result);
    $_dtl = $row[jField_3];
    $priorDeferredTax= array($_dta, $_dtl);
} //end if

?>