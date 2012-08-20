
<?php

$php='/mnt/data/myuser/'; include($php.'dbIndex.php');
$email = str_replace('Email Address', '', trim($_POST[eform]));

if (strlen($email) <= 5) {$body_1 = "Please input your valid email address to receive our newsletters.</br><br><br>";}
else {
    include($php.'dbConnect.php');
    $sql = "delete from _myNewsletter where email='$email'";
    $result = mysql_query($sql, $connection) or die(mysql_error());	

    $sql = "select count(*) from _myNewsletter";
    $result = mysql_query($sql, $connection) or die(mysql_error());
    $result = mysql_fetch_row($result);
    if ($result[0] < 10000) {														//to prevent hacker script from jamming database
        $file_w = fopen($myNewsletter, "w"); fwrite($file_w, $email);
        $sql = "load data local infile '$myNewsletter' into table _myNewsletter"; 
        mysql_query($sql, $connection) or die(mysql_error());
        fclose($file_w);
    } //end if 
    mysql_close($connection);

   $body_1 = "      
        Thank you for registering to receive our newsletters.</br><br>
        Newsletters will be sent to $email.</br>
    ";
} //end else

$body_1 = "
    <div align=center>
    <table width=100% cellspacing=0>
    <tr>
     <td width=$_w1%></td>
    	<td nowrap colspan=2 align=left><br><br>$body_1<br><br><br></td>
    	 <td width=$_w1%></td>
    </tr>
    </table>
    </div><br><br>
";

$thankyou_screen = '<html>'.$ziligence_header. $css_hyperlink.'<br>'.$body_1.$ziligence_footer.'</html>';
echo $thankyou_screen;

?>