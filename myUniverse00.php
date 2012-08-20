
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'myUniverse00-1.php');				//load SIC list to array
    $form = '10'; unset($_body);
    $illegal = array(chr(48), chr(49), chr(50), chr(51), chr(52), chr(53), chr(54), chr(55), chr(56), chr(57));
    $illegal_2 = array(chr(44), chr(46), chr(58));	
    $find_0 = '<DIV CLASS="MAILER">BUSINESS ADDRESS';
    $find_1 = '<SPAN CLASS="MAILERADDRESS">';

    $beta = -1; while (++$beta < count($ary_corp)) {
        unset($_mail); unset($_sic); unset($_lastrow); unset($_website); unset($_overview);
        $_co_name = ""; $_tkr = ""; $exch = ""; $_cik = ""; $_fye = "";
        $_co_name = $ary_corp[$beta][0];
        $_tkr = $ary_corp[$beta][1]; 
        $_exch = $ary_corp[$beta][2]; 
        $_cik = $ary_corp[$beta][3];
        $_fye = $ary_corp[$beta][4];
        $_suggest = $_tkr.' / '.$_co_name;
        if ($_cik == 'N/A' || strlen($_cik) == 0) {continue;}

        include($php.'myUniverse01.php');				//to get company address info (SEC)
        if (!empty($_sicSelection) && substr($_sic, 0, 4) != $_sicSelection) {continue;}	
        include($php.'myUniverse02.php');				//to get company description (Zack's)
	include($php.'myUniverse03.php');				//to get company homepage (Yahoo)     
        $str = "$_tkr,$_suggest,$_exch,$_cik,$_fye,$_sic,$_mail,$_website,$_overview";
        echo $str."<br>";
        $_body = $_body.$str."\r\n";   
        include($php.'myUniverse05.php');				//to get ownership/mgmt information

    	include($php.'dbConnect.php'); 
    	    $sql = "delete from _myOwnership where ticker = '$_tkr'"; 
    	    mysql_query($sql, $connection) or die(mysql_error());
    	    $sql = "delete from _myCompanies where ticker = '$_tkr'"; 
	    mysql_query($sql, $connection) or die(mysql_error());
        mysql_close($connection);
    } //loop
		
    $myCompanies_w = fopen($myCompanies, "w");
    fwrite($myCompanies_w, $_body);				//to print out companies and sic codes
    unset($_body); fclose($myCompanies_w);

    $myOwnership_w = fopen($myOwnership, "w");
    $a = -1; while (++$a < count($ary_ownership)) {
        $x1 = $ary_ownership[$a][0];
        $x2 = $ary_ownership[$a][1];
        if (strlen($x1) > 8 && strlen($x2) > 20) {fwrite($myOwnership_w, $x2."\r\n");}
    } //loop
    fclose($myOwnership_w);
} //end if

?>