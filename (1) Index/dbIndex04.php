
<?php																	//to validate ticker box and redirect url

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'dbConnect.php'); 
	$_qticker = str_replace(chr(94), '', strtoupper($_qticker));										//ticker box contents
        $sql = "select distinct * from _myCompanies where ticker = '$_qticker'";								//search in myHLinks
        $result = mysql_query($sql, $connection) or die(mysql_error());
    mysql_close($connection);

    if (mysql_num_rows($result) > 0) {
        $_file = (strpos($_url, 'query') !== false) ? 'mySQLquery.php' : 'mySite_home.php';					//file path to redirect to
    	$find = (!empty($_GET[tkr])) ? 'tkr='.trim($_GET[tkr]) : 'tkr=MMM';
	$replace = 'tkr='.$_qticker;																//search / replace
    	$_hdr_link_2 = str_replace($find, $replace, $_hdr_link_2);										//redirect to qticker value
    	header("Location: $_aws/$_file?$_hdr_link_2");												//redirect to new page
    } //end if
} //end if

?>