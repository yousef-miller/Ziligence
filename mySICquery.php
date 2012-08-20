
<?php

$php = '/mnt/data/myuser/'; include($php.'myLogin_2.php');										//to look up user name

if ($_access == 'true' && ++$_xCounter == 1) {
    proc_nice(-15); include($php.'dbIndex.php');
    $keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
    $keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';
    include($php.'dbConnect.php'); 
	$x = getdate(); $yr1 = $x[year]; $yr2 = $yr1 - 1;
	$x1 = trim((!empty($_GET[option])) ? $_GET[option] : '1');									//default 1Q basis / rolling 4Q basis
	$_view = (!empty($_GET[view])) ? $_GET[view] : '3';										//sp500 list / all ticker list
	$_source = (!empty($_GET[source])) ? $_GET[source] : '1';									//custom or detault toggle
        $_link2 = "&stmt%5B%5D=1&type=1&source=$_source&period%5B%5D=$yr1&";
	$_link2 = $_link2."period%5B%5D=$yr2&qtr%5B%5D=FY&option=$x1&view=$_view";		//for link to results

	$_link3 = "%09&stmt%5B%5D=1&type=1&source=1&period%5B%5D=$yr1&";				//for edit results hyperlink
	$_link3 = $_link3."period%5B%5D=$yr2&qtr%5B%5D=FY&option=$x1&view=$_view&edit=true";

	if (empty($_qkword) && $_view == '4' ) {													//to query custom list
            $sql = "select distinct * from _mySearches where user_id = '$_user_id' order by date_1 desc";
            $result = mysql_query($sql, $connection) or die(mysql_error());
            while ($row = mysql_fetch_array($result)) {
		$tkr = trim($row[0]); $sql = "select distinct * from _myCompanies where ticker = '$tkr'";
		$result2 = mysql_query($sql, $connection) or die(mysql_error());
		unset($row2); while ($row2[] = mysql_fetch_array($result2));
		$_co = strtoupper(str_replace(chr(39), '', trim($row2[0][1]))); 
		$_sic = str_replace(chr(39), '', trim($row2[0][5])); 

		$sql = "select count(*) from _myJData where ticker = '$tkr' and user_id = '$_user_id' and class = '#'";
		$result3 = mysql_query($sql, $connection) or die(mysql_error());
		unset($row3); $row3 = mysql_fetch_array($result3);
		$_map = ($row3[0] > 0) ? 'false' : 'true';
		if ($_history != 'true') {$_history = ($row3[0] > 0) ? 'true' : 'false';}

  	        ++$_result_count; $ary_companies[] = array($tkr,$_co,$row2[0][2],$_sic,$_map);
	    } //loop
	} //end if	
	elseif (empty($_qkword) && $_view == '3' ) {												//to query sp500 list
            $sql = "select distinct * from _myCompanies_2 order by ticker";
            $result = mysql_query($sql, $connection) or die(mysql_error());
            while ($row = mysql_fetch_array($result)) {
		$_co = strtoupper(str_replace(chr(39), '', trim($row[1]))); 
		$_sic = str_replace(chr(39), '', trim($row[3])); 
  	        ++$_result_count; $ary_companies[] = array($row[0],$_co,$row[2],$_sic); 					//ticker/company/sic/exchange
	    } //loop
	} //end if	
	elseif (empty($_qkword) && $_view == '2') {												//to query sp500 list
            $sql = "select distinct * from _mySP500 order by ticker";
            $result = mysql_query($sql, $connection) or die(mysql_error());
            while ($row = mysql_fetch_array($result)) {
		$_co = strtoupper(str_replace(chr(39), '', trim($row[1]))); 
		$_sic = str_replace(chr(39), '', trim($row[4])); 
  	        ++$_result_count; $ary_companies[] = array($row[0],$_co,$row[2],$_sic); 					//ticker/company/sic/exchange
	    } //loop
	} //end if
	else {																				//to query all ticker list
            $x1 = "select distinct * from _myCompanies where ticker <> '_' order by ticker";					//default search for page
	    $x = "suggest like '%$_qkword%' or overview like '%$_qkword%' or sic like '%$_qkword%'";
	    $x2 = "select distinct * from _myCompanies where ($x) order by ticker";
	    $sql = (empty($_qkword)) ? $x1 : $x2;
            $result = mysql_query($sql, $connection) or die(mysql_error());
            while ($row = mysql_fetch_array($result)) {
	    	if (strlen($row[5]) > 10 && is_numeric($row[0]) == false && strlen($row[0]) <= 5) {
    	            $_co = explode('/', $row[1]); $_co = strtoupper(str_replace(chr(39), '', trim($_co[1]))); 
    	            $_sic = trim(str_replace(chr(39), '', $row[5]));
    	            ++$_result_count; $ary_companies[] = array($row[0],$_co,$row[2],$_sic); 
	        } //end if
	    } //loop
	} //end else
    mysql_close($connection);

    if ($_result_count >= 1) {include($php.'mySICquery_1.php');}									//to build results
    $body_null = "<div align=left><font size = '1.5'><b>Search results doesn't contain any matches.</b></font></div>";
    $body_1 = ($_result_count >= 1) ? $body_results : $body_null;								//to display table or null message
    $_x1 = "$_home_1&nbsp;&nbsp;|&nbsp;&nbsp;$_home_2&nbsp;&nbsp;|&nbsp;&nbsp;$_home_3&nbsp;&nbsp;|&nbsp;&nbsp;$_home_4&nbsp;&nbsp;";
    $_x2 = '(Showing'.chr(32).number_format($_result_count,0,'',',').chr(32).'companies)';
    $_toggle = "<b>VIEW:</b>&nbsp;$_x1$_x2</br>";
    $_toggle = "<div align=left><font size = '2.75'>$_toggle</font></div>";
    sleep(1); echo $css_hyperlink.$ziligence_header.$div_padding."<html>$_css$_toggle$body_1</div><br><br><br><br><br></html>";
} //end if

?>
