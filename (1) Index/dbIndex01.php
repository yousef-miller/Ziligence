
<?php

include($php.'dbConnect.php'); unset($array_users);   
    $sql = "select distinct * from _myUsers"; 											//to load array of users for updating files
    $result = mysql_query($sql, $connection) or die(mysql_error());	
    while ($row = mysql_fetch_array($result)) {
	if (!empty($row[2]) && $row[2] != 'admin') {$array_users[] = array($row[2]);}
    } //loop
mysql_close($connection);

?>