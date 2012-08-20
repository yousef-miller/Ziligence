

<?php										//to create sql table with trial request infomration

$php='/mnt/data/myuser/'; include($php.'dbIndex.php');
$_stat = 'true'; $illegal = array(',', ';');

$fx0 = str_replace($illegal, '', trim($_POST[name_1])); 
$fx1 = str_replace($illegal, '', trim($_POST[name_2])); 
$_email = str_replace($illegal, '', trim($_POST[email]));

$fx0 = (substr($fx0, 0, 5) == 'First') ? '' : $fx0;														//first name
$fx1 = (substr($fx1, 0, 4) == 'Last') ? '' : $fx1;														//last name

$_stat = (!empty($fx0)) ? $_stat : 'false';
$_stat = (!empty($fx1)) ? $_stat : 'false';
$_stat = (!empty($_email)) ? $_stat : 'false';

$_need1 = (!empty($fx0)) ? '' : '&nbsp;<b>****</b>';
$_need1 = (!empty($fx1)) ? $_need1 : '&nbsp;<b>****</b>';
$_need11 = (!empty($_email)) ? '' : '&nbsp;<b>****</b>';

if ($_stat == 'false') {include($php.'ziligence3.php');}										//to verify that all fields are filled-in
else {
    include($php.'dbConnect.php'); 
    $sql = "select count(*) from _myTrialRequests";
    $result = mysql_query($sql, $connection) or die(mysql_error());
    $result = mysql_fetch_row($result);
    if ($result[0] < 1000) {															//to prevent hacker script from jamming database
	////$sql = "delete from _myTrialRequests where email='$_email'"; 							//to delete duplicate record
        ////mysql_query($sql, $connection) or die(mysql_error());
	$_str = "$_current_date,$fx0,$fx1,$fx2,$fx3,$fx4,$fx5,$fx6,$fx7,$fx8,$fx9,$fx10,$_email,$fx12,$fx13,$fx14";
	$file_w = fopen($myTrialRequest, "w"); fwrite($file_w, $_str);
        $sql = "load data local infile '$myTrialRequest' into table _myTrialRequests fields terminated by ','"; 
        mysql_query($sql, $connection) or die(mysql_error());
	fclose($file_w);
    } //end if
    mysql_close($connection);
} //end else

?>