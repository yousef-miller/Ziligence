<?php						//to query EPS from TTM database for same period in prior year

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($_ttm_priorEPS);
    $sql = "select distinct * from _myRxData where ticker = '$tkr' and class = '952' and user_id = '$_user_id'"; 
    $result = mysql_query($sql, $connection) or die(mysql_error());
    $row = mysql_fetch_row($result);
    $_ttm_priorEPS = array($row[$jField - 5]);
} //end if

?>