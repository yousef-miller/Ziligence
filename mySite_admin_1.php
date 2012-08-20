
<?php

$php = '/mnt/data/myuser/'; include($php.'dbIndex.php');

    include($php.'dbConnect.php'); 
    $sql = "select * from _myTrialRequests";
    $result = mysql_query($sql, $connection) or die(mysql_error());
    while($row = mysql_fetch_row($result)) {
	$x1 = 'record'.++$count; $x2 = 'email'.$count;
	if ($_POST[$x1] == 'true') {
	    $email = $_POST[$x2];	
	    $passwd = chr(rand(97, 122)).chr(rand(97, 122)).chr(rand(97, 122)).chr(rand(97, 122)).chr(rand(97, 122));
	    $id = chr(rand(97, 122)).chr(rand(97, 122)).chr(rand(97, 122)).chr(rand(97, 122)).chr(rand(97, 122));
	    $_body = $_body.$email.chr(44).$passwd.chr(44).$id.chr(44)."/r/n";

	    $_html = $_html."
		<a href=mail to:$email>Reply</a></br>
		Login:&nbsp;&nbsp;$email</br>
		Password: &nbsp;&nbsp;$passwd</br>
		<br><br>
	    ";
	    //SEND EMAIL TO email ADDRESS WITH passwd
	} //end if
    } //loop

    $file_w = fopen($myUsers, "w"); fwrite($file_w, $_body);
    $sql = "load data local infile '$myUsers' into table _myUsers fields terminated by ','"; 
    mysql_query($sql, $connection) or die(mysql_error());
    fclose($file_w);

    mysql_close($connection);

    echo $_html;

?>