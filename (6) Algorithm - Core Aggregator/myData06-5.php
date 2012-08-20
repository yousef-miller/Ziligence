
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
        $sql = "select distinct * from _myClasses where class_2 = '$xClass'";
        $result2 = mysql_query($sql, $connection) or die(mysql_error());
        $row2 = mysql_fetch_row($result2);
        unset($sClass); if ($row2[0] != '') {$sClass = $row2[0];}
} //end if	

?>
