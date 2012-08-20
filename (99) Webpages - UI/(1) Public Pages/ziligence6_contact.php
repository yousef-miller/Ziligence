


<?php																			//to create sql table with trial request infomration

$php='/mnt/data/myuser/'; include($php.'dbIndex.php');
$_stat = 'true'; $illegal = array(',', ';');

$fx0 = str_replace($illegal, '', trim($_POST[name_1])); 
$fx1 = str_replace($illegal, '', trim($_POST[name_2])); 
$fx2 = str_replace($illegal, '', trim($_POST[email]));
$fx3 = str_replace($illegal, '', trim($_POST[message]));
$fx0 = ($fx0 != 'First') ? $fx0 : ''; $fx1 = ($fx1 != 'Last') ? $fx1 : '';

$_stat = (!empty($fx0)) ? $_stat : 'false';
$_stat = (!empty($fx1)) ? $_stat : 'false';
$_stat = (strlen($fx2) > 5) ? $_stat : 'false';
$_stat = (strlen($fx3) > 5) ? $_stat : 'false';

$x = $fx0.$fx1; $_need1 = (!empty($x)) ? '' : '&nbsp;<b>****</b>';
$_need2 = (!empty($fx2)) ? '' : '&nbsp;<b>****</b>';

if ($_stat == 'false') {include($php.'ziligence6.php');}								//to verify that all fields are filled-in
else {
    include($php.'dbConnect.php'); 
    $sql = "select count(*) from _myContactForm";
    $result = mysql_query($sql, $connection) or die(mysql_error());
    $result = mysql_fetch_row($result);
    if ($result[0] < 1000) {															//to prevent hacker script from jamming database
	$_str = "$_current_date,$fx0,$fx1,$fx2,$fx3";
	$file_w = fopen($myContact, "w"); fwrite($file_w, $_str);
        $sql = "load data local infile '$myContact' into table _myContactForm fields terminated by ','"; 
        mysql_query($sql, $connection) or die(mysql_error());
	fclose($file_w);
    } //end if
    mysql_close($connection);

    $body_1 = "
	<br><br>
 	Thank you for your corresponding with us.</br><br>
	<br><br><br>
    ";

    $body_1 = "
	<div align=center>
	<table width=100% cellspacing=0>
	<tr>
    	    <td width=$_w1%></td>
    	    <td nowrap colspan=2 align=left>$body_1</td>
    	     <td width=$_w1%></td>
	</tr>
	</table>
	</div><br><br>
     ";

    $thankyou_screen = '<html>'.$ziligence_header. $css_hyperlink.'<br>'.$body_1.$ziligence_footer.'</html>';
    sleep(1); echo $thankyou_screen;
} //end else

?>