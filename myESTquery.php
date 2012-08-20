
<?php

$php = '/mnt/data/myuser/'; include($php.'myLogin_2.php');												//to look up user name

if ($_access == 'true') {
   proc_nice(-15); include($php.'dbIndex.php');
    $keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
    $keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';
    include($php.'dbConnect.php');
	$_qkword = trim($_POST[qkword]); $_qticker = trim(strtoupper($_POST[qtkr])); 
	$_tkr = (!empty($_qticker)) ? $_qticker : $_GET[tkr];

	$_x = (empty($_qkword)) ? "where ticker = '$_tkr'" : "where suggest like '%$_qkword%'";
	$sql = "select distinct * from _myCompanies $_x";
	$result = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_row($result); $_company = trim($row[1]);
	$_tkr = trim($row[0]); $_tkr = (!empty($_tkr)) ? $_tkr : 'FALSE';
		
	$sql = "select distinct * from _myRatings where ticker = '$_tkr' order by query_date desc, data_type asc";
	$result = mysql_query($sql) or die(mysql_error());
	unset($row); while($row[] = mysql_fetch_array($result));

	$a = -1; while(++$a < count($row)){
	    if (!empty($row[$a]['query_date'])) {
		unset($x1); unset($x2); unset($x3); unset($x4); unset($x5);
	        ++$_result_count; 
		$_date = date('Y-m-d', $row[$a]['query_date']);
		$_type = (substr($row[$a]['data_type'], 0, 3) == 'SC3') ? 'SALES' : 'EARNINGS';
		if ($_type == 'SALES') {
		    $x1 = trim($row[$a]['Q1AvgSlsEst']); 
		    $x2 = trim($row[$a]['Q2AvgSlsEst']);
		    $x3 = trim($row[$a]['F1AvgSlsEst']);
		    $x4 = trim($row[$a]['F2AvgSlsEst']);
		    $x5 = 'n/a';
		} //end if
		else {
		    $x1 = trim($row[$a]['QR1AvgEPSEst']);
		    $x2 = trim($row[$a]['QR2AvgEPSEst']);
		    $x3 = trim($row[$a]['FR1AvgEPSEst']);
		    $x4 = trim($row[$a]['FR2AvgEPSEst']);
		    $x5 = trim($row[$a]['LTGAvgEst']);
		} //end else
		$x1 = (!empty($x1)) ? $x1 : '--';
		$x2 = (!empty($x2)) ? $x2 : '--';
		$x3 = (!empty($x3)) ? $x3 : '--';
		$x4 = (!empty($x4)) ? $x4 : '--';
		$x5 = (!empty($x5)) ? $x5 : '--';
	        $ary_companies[] = array($_date, $_type, $x1, $x2, $x3, $x4, $x5);
	    } //end if
	} //loop
     mysql_close($connection);	

    $x1 = "<a href=$_aws/mySQLquery.php?$_hdr_link_2>Earnings Detail</a>";
    $x2 = "<a href=$_aws/mySite_home.php?$_hdr_link_2>Earnings Summary</a>";
    $_link = "&nbsp;&nbsp;&nbsp;&nbsp;$x1&nbsp;&nbsp;|&nbsp;&nbsp;$x2";

    $x = "Content for this page will be uploaded on or before completion of beta testing.";
    $_alert_str = "<font size='1.50' color='FF0000'>$x</font></br>";
    
    if ($_result_count >= 1) {include($php.'myESTquery_1.php');}										//to build results
    $body_null = "<div align=left><font size = '1.5'><b>Search results doesn't contain any matches.<b></font></div>";
    $body_1 = ($_result_count >= 1) ? $body_results : $body_null;										//to display table or null message
    $_x = "(Showing historical consensus estimates for <b>$_company</b>)$_link";
    $_x = "<div align=left><font size = '1.50'>$_x</font>$_show</div>";
    sleep(1); echo $css_hyperlink.$ziligence_header.$div_padding."<html>$_css$_alert_str$_x$body_1</div><br><br><br><br><br></html>";
} //end if

?>
