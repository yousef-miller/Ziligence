<?php

$php = '/mnt/data/myuser/'; include($php.'myLogin_2.php');												//to look up user name

if ($_access == 'true') {
   proc_nice(-15); include($php.'dbIndex.php');
    $keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
    $keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';
    include($php.'dbConnect.php');
	$_qkword = trim($_POST[qkword]); $_qticker = trim(strtoupper($_POST[qtkr])); 
	$x1 = "_myCompanies.suggest like '%$_qkword%'"; $x2 = "_myCompanies.overview like '%$_qkword%'";
	$x3 = "_myCompanies.sic like '%$_qkword%'";
	$_x = (empty($_qkword)) ? '' : chr(32)."where ($x1 or $x2 or $x3)";
	if (empty($_qkword)) {$_x = (empty($_qticker)) ? '' : chr(32)."where _myCompanies.ticker = '$_qticker'";}		//for ticker search
	if (!empty($_qkword) || !empty($_qticker)) {$_show = '&nbsp;'.$_acq_show_all;}							//link to show all

	$_order = "order by _myCompanies.ticker, _myMergers.date_1 asc";
	$sql = "select distinct * from _myMergers left join _myCompanies on (_myMergers.cik = _myCompanies.cik)$_x $_order";
	$result = mysql_query($sql) or die(mysql_error());
	unset($row); while($row[] = mysql_fetch_array($result));

	$a = -1; while(++$a < count($row)){
	    $_tkr = trim($row[$a]['ticker']); $_cik = trim($row[$a]['cik']);
	    unset($x1); unset($x2); if (!empty($_tkr)) {
	        ++$_result_count; $_date = date('Y-m-d', $row[$a]['date_1']);
   	        $_co = explode('/', $row[$a]['suggest']); $_co = strtoupper(str_replace(chr(39), '', trim($_co[1]))); 
    	        $_sic = trim(str_replace(chr(39), '', $row[$a]['sic']));
		$_href = trim($row[$a]['href']);  $_type = trim($row[$a]['type']);
		$_href_2 = trim($row[$a]['href_2']); $_type_2 = trim($row[$a]['type_2']);
		$_href_3 = trim($row[$a]['href_3']); $_type_3 = trim($row[$a]['type_3']);

		$m1 = (trim($row[$a + 1]['cik']) == $_cik) ? 'true' : 'false'; 
		$m2 = (trim($row[$a + 1]['type']) != $_type) ? 'true' : 'false';
		$m3 = (abs(trim($row[$a + 1]['date_1']) - trim($row[$a]['date_1'])) < (120 * 3600 * 24)) ? 'true' : 'false';
		if ($m1 == 'true' && $m2 == 'true' && $m3 == 'true') {
		    $x1 = trim($row[$a + 1]['href']); $x2 =trim($row[$a + 1]['type']); unset($row[$a + 1]['ticker']); 
		} //end if
	        $ary_companies[] = array($_tkr, $_co, $_sic, $_date, $_cik, $_href, $_type, $x1, $x2, $_href_2, $_type_2, $_href_3, $_type_3);
	    } //end if
	} //loop
     mysql_close($connection);	

    if ($_result_count >= 1) {include($php.'myACQquery_1.php');}										//to build results
    $body_null = "<div align=left><font size = '1.5'><b>Search results doesn't contain any matches.<b></font></div>";
    $body_1 = ($_result_count >= 1) ? $body_results : $body_null;										//to display table or null message
    $_x = '(Showing'.chr(32).number_format($_result_count,0,'',',').chr(32).'M&A transactions)';
    $_x = "<div align=left><font size = '1.50'>$_x</font>$_show</div>";
    sleep(1); echo $css_hyperlink.$ziligence_header.$div_padding."<html>$_css$_x$body_1</div><br><br><br><br><br></html>";
} //end if

?>
