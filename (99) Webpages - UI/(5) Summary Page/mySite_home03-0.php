<?php						//to format values appropriately for display

$_round = ($row[4] != '951') ? "1" : "3";
$_round = ($row[4] == '952') ? "2" : $_round;
$_factor_x = ($row[4] != '951') ? $_factor : "1";

$x0 = ($resize == "true") ? round($str[0] / $_factor_x, $_round) : $str[0];				//q1
$x1 = ($resize == "true") ? round($str[1] / $_factor_x, $_round) : $str[1];				//q2
$x2 = ($resize == "true") ? round($str[2] / $_factor_x, $_round) : $str[2];				//q3
$x3 = ($resize == "true") ? round($str[3] / $_factor_x, $_round) : $str[3];				//q4
$x4 = ($resize == "true") ? round($str[4] / $_factor_x, $_round) : $str[4];				//fy-1
$x5 = ($resize == "true") ? round($str[5] / $_factor_x, $_round) : $str[5];				//fy-2
$x6 = ($resize == "true") ? round($str[6] / $_factor_x, $_round) : $str[6];				//fy-3
$x7 = ($resize == "true") ? round($str[7] / $_factor_x, $_round) : $str[7];				//q5
$x8 = ($resize == "true") ? round($str[8] / $_factor_x, $_round) : $str[8];				//q6
$val = array($x0, $x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8);					//for calculations (non-formatted values)
$chart_str = '_'.$x0.'_'.$x1.'_'.$x2.'_'.$x3.'_'.$x4.'_'.$x7.'_'.$x8.'_';				//for performance highlight chart

include($php.'mySite_home03-4.php');									//to apply number formats
$str = array($x0, $x1, $x2, $x3, $x4, $x5);								//to pass values back for std labels

if (intval($row[4]) > 950) {include($php.'mySite_home07-1.php');}				//to calculate valuation stars

if ($set_max == "false") {
    $set_max = "true";
    switch ($rYq[5]) {													//to determin year end field numbers
	case '1': $jField_4 = $jField - 1; break;
	case '2': $jField_4 = $jField - 2; break;
	case '3': $jField_4 = $jField - 3; break;
	case '4': $jField_4 = $jField + 1; break;
    } //end switch
    $jField_5 = $jField_4 - 5;			//fy-2
    $jField_6 = $jField_5 - 5;			//fy-3
    $jField_7 = $jField - 5;			//q5
    $jField_8 = $jField_3 - 5;			//q6

    $sql = "select distinct * from _myMData where ticker = '$_ticker' and left(tbl, 1) = '1' and user_id = '$_user_id'";
    $result = mysql_query($sql, $connection) or die(mysql_error());				//to determine factor
    $max_value = 0; while ($row = mysql_fetch_array($result)) {
	include($php.'mySite_home03-5.php');									//to load array    	
	$str=array(abs($str[0]), abs($str[1]), abs($str[2]), abs($str[3]), abs($str[4]), abs($str[5]), abs($str[6]), abs($str[7]), abs($str[8]));
    	$max_value = (max($str) > $max_value) ? max($str) : $max_value;    
    } //loop

    $_factor = ($max_value >= pow(10, 6)) ? pow(10, 3) : pow(10, 0);

    $_xField_0 = strtoupper(mysql_field_name($result, $jField));
    $_qField_0 = ($rYq[5] != '4') ? strtoupper(mysql_field_name($result, $jField)) : strtoupper(mysql_field_name($result, $jField_4));

    $_qField_1 = strtoupper(mysql_field_name($result, $jField_3));
    $_qField_2 = strtoupper(mysql_field_name($result, $jField_2)); 
    $_qField_3 = strtoupper(mysql_field_name($result, $jField_1));
    $_qField_4 = strtoupper(mysql_field_name($result, $jField_7)); 
    $_qField_5 = strtoupper(mysql_field_name($result, $jField_8));
    $ary_chart_fields[0] = array($_qField_0);									//load field names for earnings highlights chart
    $ary_chart_fields[1] = array($_qField_1);	
    $ary_chart_fields[2] = array($_qField_2);
    $ary_chart_fields[3] = array($_qField_3);
    $ary_chart_fields[4] = array($_qField_4);	
    $ary_chart_fields[5] = array($_qField_5);			
    $_fyField_0 = strtoupper(mysql_field_name($result, $jField_4));
    $_fyField_1 = strtoupper(mysql_field_name($result, $jField_5));

    include($php.'mySQLquery_0.php');										//to query hyperlinks

    unset($x0); unset($x1); unset($x2); unset($x3); unset($x4); unset($x5);
    $a = -1; while (++$a <= count($ary_query_2)) {
	switch ($ary_query_2[$a][2]) {									//separate switch statements so that q4 and fy links work
    	    case $_qField_0: $x0 = '<a href='.$url_base.$ary_query_2[$a][1].'/'.$ary_query_2[$a][8].' target=_blank>'.$_xField_0.'</a>'; break;
    	    case $_qField_1: $x1 = '<a href='.$url_base.$ary_query_2[$a][1].'/'.$ary_query_2[$a][8].' target=_blank>'.$_qField_1.'</a>'; break;
    	    case $_qField_2: $x2 = '<a href='.$url_base.$ary_query_2[$a][1].'/'.$ary_query_2[$a][8].' target=_blank>'.$_qField_2.'</a>'; break;
    	    case $_qField_3: $x3 = '<a href='.$url_base.$ary_query_2[$a][1].'/'.$ary_query_2[$a][8].' target=_blank>'.$_qField_3.'</a>'; break;
	} //end switch
	switch ($ary_query_2[$a][2]) {									//separate switch statements so that q4 and fy links work
    	    case $_fyField_0: $x4 = '<a href='.$url_base.$ary_query_2[$a][1].'/'.$ary_query_2[$a][8].' target=_blank>'.$_fyField_0.'</a>'; break;
      	    case $_fyField_1: $x5 = '<a href='.$url_base.$ary_query_2[$a][1].'/'.$ary_query_2[$a][8].' target=_blank>'.$_fyField_1.'</a>'; break;
	} //end switch
    } //loop

    $_dField_0 = '</br><u>'.$tArray_2[$jField - $_vFirst + 1][0].'</u>';			//to map qtr end dates back to actual period end dates
    $_dField_1 = '</br><u>'.$tArray_2[$jField_3 - $_vFirst + 1][0].'</u>'; 
    $_dField_2 = '</br><u>'.$tArray_2[$jField_2 - $_vFirst + 1][0].'</u>';
    $_dField_3 = '</br><u>'.$tArray_2[$jField_1 - $_vFirst + 1][0].'</u>';
    $_dField_4 = '</br><u>'.$tArray_2[$jField_4 - $_vFirst + 1][0].'</u>';
    $_dField_5 = '</br><u>'.$tArray_2[$jField_5 - $_vFirst + 1][0].'</u>';
    
    $_hLink_q0 = (isset($x0)) ? $x0.$_dField_0 : $_qField_0.$_dField_0;			//current qtr hyperlink / header
    $_hLink_q1 = (isset($x1)) ? $x1.$_dField_1 : $_qField_1.$_dField_1;			//previous qtr hyperlink / header
    $_hLink_q2 = (isset($x2)) ? $x2.$_dField_2 : $_qField_2.$_dField_2;			//second qtr back hyperlink / header
    $_hLink_q3 = (isset($x3)) ? $x3.$_dField_3 :$_qField_3.$_dField_3;			//third qtr back hyperlink / header
    $_hLink_y0 = (isset($x4)) ? $x4.$_dField_4 : $_fyField_0.$_dField_4;			//most recent fye hyperlink / header
    $_hLink_y1 = (isset($x5)) ? $x5.$_dField_5 : $_fyField_1.$_dField_5;			//prior fye hyperlink / header

    $x0 = substr($_xField_0, -1) - 1;							//use xField variable instead of qField b/c of fye / q4 hyperlink issue
    $x1 = substr($_qField_1, -1) - 1;							//use qField variable (not xField)
    $x2 = substr($_qField_2, -1) - 1;							//use qField variable (not xField)
    $date_str = $ary_qtr[intval(substr($fye, 0, 2))][0];
    $date_str_2 = explode('.', $date_str);
    $date_str_2 = array($date_str_2[4], $date_str_2[3], $date_str_2[2], $date_str_2[1]);
    $_ttmField_0 = '<u>'.$date_str_2[$x0].'/'.substr($_qField_0, 0, 4).'</u>';				//trailing 12 month header #1
    $_ttmField_1 = '<u>'.$date_str_2[$x1].'/'.substr($_qField_1, 0, 4).'</u>';				//trailing 12 month header #2
    $_ttmField_2 = '<u>'.$date_str_2[$x2].'/'.substr($_qField_2, 0 ,4).'</u>';				//trailing 12 month header #3
} //end if
    
?>