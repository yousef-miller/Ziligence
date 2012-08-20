
<?php									//look up login && password

if (!empty($_GET[user]) && strlen($_GET[user]) == 5) {									//access protection
    include($php.'dbConnect.php');
	$user_id = $_GET[user];
        $sql = "select distinct * from _myUsers where user_id = '$user_id'";
        $result = mysql_query($sql, $connection) or die(mysql_error());	
	$row = mysql_fetch_row($result);
	if (empty($row)) {header("Location: $_aws/myLogin.php$_admin_page");} 				//redirect to login screen
	else {$_access = 'true'; $user_name = $row[0]; include($php.'dbIndex.php');}				//to refresh hyperlinks
    mysql_close($connection);
} else {header("Location: $_aws/myLogin.php?logout=1");}									//redirect to login screen

?>