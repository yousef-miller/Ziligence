<?php						//to query company header

if (!empty($_ticker) && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $x1 = strpos($_ticker, '/', 0);
    if ($x1 !== false) {$_ticker = trim(substr($_ticker, 0, $x1 - 1));}

    $sql = "select distinct * from _myCompanies where ticker = '$_ticker'";
    $result = mysql_query($sql, $connection) or die(mysql_error());
    $x = mysql_fetch_row($result);
    if ($_ticker == $x[0]) {
	    $db_match = "true";
	    $tkr_co = $x[1];
	    $p1 = strpos($tkr_co, '/', 0);
	    $ticker = trim(substr($tkr_co, 0, $p1-1));
	    $company = strtoupper(trim(substr($tkr_co, $p1+1)));
	    $exch = $x[2];
	    $cik = $x[3];
	    $fye = substr($x[4], 1, 2).'/'.substr($x[4], -2, 2);
	    $_link = "<a href=$_aws/mySICquery.php?$_hdr_link_2";
	    $sic = "$_link>$x[5]</a>";
    	    $link_compset_1 = "$_link $fWhite>Competitive Set</a>";				//header section
    	    $link_compset_2 = "$_link>[Competitive Set]</a>";
	    $link_home = "$_link $fWhite>Home</a>";
	    $mail = $x[6];
	    $co_url = '  |  <a href=http://'.trim($x[7]).' target=_blank>['.$_ticker.' website]</a>';
	    $co_description = str_replace('chr(44)', chr(44), $x[8]);
	    $p1 = strpos($co_description, chr(32), 450);
	    $co_description = ($p1 !== false) ? substr($co_description, 0, $p1) : $co_description;			//to truncate description if too long
	    $co_description = $co_description.'......[more]'.$co_url;
	    if (strlen($_user_id) ==5) {include($php.'mySite_home00-3.php');}							//to track searches per user account	
    } //end if

    $sql = "select * from _myRecalcs where ticker in ('$_ticker','^$_ticker') and user_id = '$_user_id'";			//verify whether on cue or not
    $result = mysql_query($sql, $connection) or die(mysql_error());
    $row_x = mysql_fetch_row($result);
    $_proc_edit = (empty($row_x[0])) ? 'false' : 'true'; $_pid = $row_x[4];

    if (strpos($_SERVER['REQUEST_URI'], 'mySite_home') === false) {
  	$_url = $_SERVER['REQUEST_URI'];
        $_ext = (strpos($_url, '?') !== false) ? substr($_url, strpos($_url, '?')) : '';
	$illegal = array('&edit=true', '%09');
        $_ext = str_replace($illegal, '', $_ext).'&edit=true';							//prevent duplicate of edit parameter
        $_path = ($_GET[edit] == 'true') ? 'ziligence_editor1.php' : 'mySQLquery.php';
        $_path = $_aws.'/'.$_path.$_ext; $_path_csv = $_aws.'/'.$_user_id.'.csv';
        $_button = ($_GET[edit] == 'true') ? ' Submit Changes ' : '    Edit Results    ';
        $x1 = "
	    <style type='text/css'>form {display : inline;}</style>
	    <form id='export' action='$_path_csv' method='post' accept-charset='UTF-8'>
            <input type='submit' name='export' id='export' value='     Export Csv     '/>
	    </form>&nbsp;&nbsp;
        ";
	$x2 = "
	    <form id='register' action='$_path' method='post' accept-charset='UTF-8'>
            <input type='submit' name='editor' id='editor' value='$_button'/>
	";
	if ($_proc_edit == 'true') {
	    $_x = $_aws.'/ziligence_editor1.php'.$_ext;
	    $x1 = $x1."
	        <form id='register' action='$_x' method='post' accept-charset='UTF-8'>
                <input type='submit' name='cancel' id='cancel' value='   Cancel Recalcs   '/>
	    ";
	    $_recalc_msg = "Results are being <i>recalculated</i> based upon your customized mapping selections...";
	} //end if
	$editor_form = ($_proc_edit != 'true') ? $x1.$x2 : $x1;									//for custom results / not zack's results
	if ($_user_id == 'admin' && $_proc_edit != 'true') {									//for custom results / not zack's results
	    $editor_form2 = "<font size='1.5'>Overwrite All</font>&nbsp;<input type='checkbox' name='single_tkr' value='true' />";
	    $editor_form2 = (isset($_GET[edit]) !== true) ? '' : "&nbsp;&nbsp;&nbsp;$editor_form2";
	} //end if
    } //end if
    $co_header_1 = '<font size="3.5"><b>'.$company.'</b> | '.$exch.': '.$ticker.'</font>';	
    $co_header_2 = '<font size="1.5"><b>FYE: </b>'.$fye.' | <b>SIC: </b>'.$sic.' | <b>HQ: </b>'.$mail.'</font>';
    $co_header = $co_header_1.'<br />'.$co_header_2.'</br>'.$editor_form.$editor_form2;
} //end if

?>