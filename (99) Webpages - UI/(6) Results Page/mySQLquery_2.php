<html>
<title>Financial Statement Results</title>

<?php 

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $form = 'M14A';  unset($filing_date_1); $sub = time(); unset($jPeriod); 
    include($php.'myData00-0.php'); $x = intval(substr($fye, 0, 2)); $fye_str = $ary_qtr[$x][0];
    include($php.'myData02-10.php'); $cur_period = $jPeriod;								//to identify current period

    $border_top = "style='border-top:1px solid'";
    $border_btm = "style='border-bottom:1px solid'";
    $font_size = 1.25;
    $font = "<p><font size=$font_size color=000000>"; 
    $font_2 = "<p><font size=$font_size color=0000FF>"; 
    $font_3 = "<font size=$font_size color=707070>"; 
    $lbl_w = '300'; $val_w = '90'; 
   
    foreach ($_GET[stmt] as $x) {$ary_stmt[] = array($x);}
    $_report = $_GET[type];
    foreach ($_GET[period] as $x) {$ary_period[] = array($x);}
        $range_max = $ary_period[0][0]; 
        $range_min = $ary_period[count($ary_period)-1][0];
        $range_max = $_fCount - ((2040 - ($range_max+1)) * 5);
        $range_min = $_fCount - ((2040 - $range_min) * 5);
	$xPeriod = $range_min; $jPeriod2 = $range_max;

    foreach ($_GET[qtr] as $x) {$str_quarters = $str_quarters.$x.chr(44);}
        if (strpos($str_quarters, 'FY,', 0) !== false) {$str_quarters = "Q1,Q2,Q3,Q4,FY,";}

     $option = $_GET[option];
        if ($option == "2" && $_report > 1) {$_b = ' / Rolling 4Q Basis'; $_basis = "x";} 
	else {$_b = ' / Default 1Q Basis'; $_basis = ""; }   							//for header row& roll 12 query

    if ($_GET[edit] == "true" && $_proc_edit != 'true') {
	include($php.'myData00-13.php'); 										//load class array
 	$_edit = 'true'; $_report = 1; unset($ary_stmt); $ary_stmt[] = '1'; $ary_stmt[] = '2'; $ary_stmt[] = '3';
    } //end if 	

	
    include($php.'mySQLquery_0.php');										//query hyperlinks

    $sql = "select distinct user_id from _myJData where ticker = '$_ticker' and user_id <> 'admin'";
    $result = mysql_query($sql, $connection) or die(mysql_error());
    unset($row); unset($count); while ($row[++$count] = mysql_fetch_array($result));
    $_crowd_stat = ($count > 10) ? 'true' : 'false';								//set min threshold for crowd sourcing users 				

    $s = -1; while (++$s < count($ary_stmt)) {
        unset($line); unset($row_n); unset($_box_count); 
        $line = ($s == 0) ? '<br><br>'.$div_padding.$co_header.'</div>' : '';
        $_stmt = $ary_stmt[$s][0]; 
        if ($_stmt != $stmt_last) {$stmt_last = $_stmt;} else {break;}			//prevent  multiple outputs of same 
        $line = $line."$div_padding<table border=0 style=font-family:arial>";
        $line = $line."<tr>";  

        switch ($_stmt) {
	    case "1": $_description = 'INCOME STATEMENT'.$_b; break;
	    case "2": $_description = 'BALANCE SHEET'.$_b; break;
	    case "3": $_description = 'STATEMENT OF CASH FLOWS'.$_b; break;
        } //end switch    

        if ($_report == 4) {$_description = 'RATIOS / VARIANCES'.$_b;}

	$x = "CUSTOM MAPPING <i>(Crowd Sourced Suggestion)</i>";
        $line = ($_edit != 'true') ? $line : $line."<th $border_btm width = '200' nowrap valign=bottom align=left><b>$font$x</p></b></th>";
        $line = $line."<th $border_btm width = '400' nowrap valign=bottom align=left><b>$font $_description </p></b></th>";
        $line = $line."<th></th>";

        switch ($_report) {			//____TO RETURN DATA W/IN EACH SECTION
	    case "1": $sql = "select distinct * from _myJData where ticker = '$_ticker' and left(tbl, 1) = '$_stmt'"; break;
	    case "2": $sql = "select distinct * from _myM".$_basis."Data where ticker = '$_ticker' and left(tbl, 1) = '$_stmt'"; break;
	    case "3": $sql = "select distinct * from _myC".$_basis."Data where ticker = '$_ticker' and left(tbl, 1) = '$_stmt'"; break;
	    case "4": $sql = "select distinct * from _myR".$_basis."Data where ticker = '$_ticker'"; break;
        } //end switch    
	$x1 = " and user_id = '$_user_id' order by tbl asc";					//per user id
	$x2 = " and user_id = 'admin' order by tbl asc";						//default setting
        $result = mysql_query($sql.$x1, $connection) or die(mysql_error());
        $result = (mysql_num_rows($result) > 5) ? $result : mysql_query($sql.$x2, $connection) or die(mysql_error());
   
        include($php.'mySQLquery_3.php');						//_TO CREATE HEADERS  
        
        while($row = mysql_fetch_row($result)) {    
	    $x = substr($row[2], 0, 1);          	
	    if ($x == '$') {
	        $dollar = ($_report != "3") ? '$' : '%'; 					//percent sign for common size results
	        $_bdrC = $border_top; $b1 = '<b>'; $b2 = '</b>';
	        $indent = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		$csv_indent = chr(32).chr(32).chr(32).chr(32);
	    }  //end if
	    else {$dollar = ($x != '_') ? $x : ""; $_bdrC = ""; $indent = ''; $csv_indent = '';}

	    $v = ($_report == "4" && substr($row[1], 0, 1) != "0") ? ' variance' : '';
	   
	    include($php.'mySQLquery_4.php');					//_TO FORMAT CONTENTS OF EACH CELL
	
	    if ($sum != 0) {
		$label = ($_report == 1) ? substr($row[5], 6) : $row[5];					//row label	
		$csv_map = ''; if ($_edit == 'true') {
		    $csv_map = chr(44);
		    if ($_stmt == '3' || substr($row[2], 0, 1) == '$' || $row[4] == '#' || $row[4] == '###' || $row[4] == '_') {$csv_map = chr(44);}
		    else {$a = -1; while (++$a < count($class)) {if ($row[4] == $class[$a][0]) {$csv_map = $class[$a][1].chr(44); break;}}}
		} //end if
	  	$csv_results = $csv_results.$csv_map.$csv_indent.$label.chr(44).$csv2."\r\n";		//csv output
	
	        $label = str_replace(chr(32), '&nbsp;', $indent.$label);						//row label
	        $X9Z = (++$row_n % 2) ? "bgcolor=#E0E0E0" : "";	  					//highlight rows   
	        if ($_edit == 'true') {include($php.'mySQLquery_2-1.php');}				//create mapping drop-down boxes
	        $line = ($_edit != 'true') ? $line : $line."<td X9Z nowrap valign=bottom width='400' align=left>$font_2$map_lbl</p></td>"; //mapping 
	        $line = $line."<td X9Z nowrap valign=bottom width='400' align=left>$font$b1$label$v$b2</p></td>"; //label
	        $line = $line."<td X9Z nowrap valign=bottom align=right>$font$dollar</p></td>";		//border ($) 	
	        $line3 = ($_edit != 'true') ? '' : "<td>$_serial&nbsp;$_verify</td>"; 
	        $line = $line.$line2.$line3."</tr>";
	        $line = str_replace('X9Z', $X9Z, $line);	
	    } //end if		
        } //loop (next row) 
        $line = $line."<br>";
        $line = $line."</table></div>";
        $line = $line."<br></br>";

	$csv_results = $csv_results."\r\n\r\n";
        $query_results = $query_results.$line;											//output HTML
        if ($_stmt == 2 && $_report > 1) {break;}	
    } //next stmt

     $query_results = (!empty($editor_form)) ? $query_results."</form>" : $query_results;					//for editor form
} //end if

?> 

</html>