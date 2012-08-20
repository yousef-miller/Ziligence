<?php

$php = '/mnt/data/myuser/'; include($php.'dbIndex.php');										//to format page header, etc.

$_password = trim($_POST[password]);
if (!empty($_POST[login]) && !empty($_password)) {
    include($php.'dbConnect.php');
        $sql = "select distinct * from _myUsers where login = '$_POST[login]' and password = '$_password'";
        $result = mysql_query($sql, $connection) or die(mysql_error());	
        $row = mysql_fetch_row($result);
    mysql_close($connection);

    $error_msg = (!empty($row)) ? '' : 'Invalid Login';
    $user_id = (!empty($row)) ? $row[2] : '';
    $_path = ($_GET[admin] != 'MGLu-g8nj') ? $_aws.'/mySICquery.php?user='.$user_id : $_aws.'/mySite_admin.php?user='.$user_id;

    $new1 = trim($_POST[new_passwd1]); $new2 = trim($_POST[new_passwd2]); $illegal = array(chr(32), ',', ';');
    if (!empty($user_id) && !empty($new1) && !empty($new2) && strpos($new1, $illegal) === false) {
	$x1 = (strlen($new1) >= 8 && strlen($new1) <= 10) ? 'true' : 'false';
	$x2 = (strlen($new2) >= 8 && strlen($new2) <= 10) ? 'true' : 'false';
	if ($x1 == 'true' && $x2 == 'true' && $new1 == $new2) {
    	    include($php.'dbConnect.php');
        	$sql = "delete from _myUsers where login='$_POST[login]'";
        	$result = mysql_query($sql, $connection) or die(mysql_error());	

		$_str = "$_POST[login],$new1,$user_id,";
    		$file_w = fopen($myUsers, "w"); fwrite($file_w, $_str);
    		$sql = "load data local infile '$myUsers' into table _myUsers fields terminated by ','"; 
    		mysql_query($sql, $connection) or die(mysql_error());
    		fclose($file_w);
		unset($_password); $_directions = "Password successfully changed.";
    	    mysql_close($connection);
	} //end if
    } //end if
} //end if

if ($_GET[user] == 'true') {
    $change_passwd = "
	   </br>
	    <br />Create Password:</br>
	    <input type='password' name='new_passwd1' maxlength='10' size='30' />
	    <br />Confirm Password:</br>
	    <input type='password' name='new_passwd2' maxlength='10' size='30' />
	";
    $_directions = "Password must be between 8-10 characters in length.</br><i>Illegal characters [commas, semi-colons, spaces]</i>";
} //end if

$input_password = "<br />Password:<br/><input type='password' name='password' maxlength='10' size='30' value='$_password' />";
$input_password = ($_GET[user] != 'true') ? $input_password : '';

if (!empty($user_id) && strlen($_password) >= 8) {header("Location: $_path");}
else {
    $body_1 = "
    <br><br>
    <head>
        <title>Ziligence</title>
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='pragma' content='no-cache'>
    </head>
    <body>
        <style>input {border: 1px solid black;}</style>
          <div style='width:750px; margin-left:auto; margin-right:auto; text-align:center'>
         <form id='register' method='post'>
    	    <font color='red'>$error_msg</font>
		<br/>Login / Email Address:<br />
	        <input type='input' name='login' maxlength='50' size='30' value='$_POST[login]' />
		$input_password
		$change_passwd
	        <p></p>
	        <input type='submit' name='Submit' id = 'Submit' value='Submit' />
		</br>$createAcct
          </form>
          <br/>
	  $_directions
	<br>
	<font size='2.50' color='707070'>
	NOTE:&nbsp;Site features may not work effectively on Internet Explorer.</br>
	Compatible browsers currently include Safari, Chrome, and Firefox.</font>
          </div>
    </body><br>
    ";

    $login_form = $css_hyperlink.$ziligence_header.$body_1.$body_2.$ziligence_footer;
    sleep(1); echo $login_form;
} //end if

?>