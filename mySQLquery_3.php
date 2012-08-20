<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($csv_head1); unset($csv_head2);
    $a = $range_min; while (++$a <= $range_max) { 		
    	unset($href_L); unset($_box);									//____TO CREATE HEADERS FOR EACH SECTION
    	$x_field = strtoupper(mysql_field_name($result, $a + $_vFirst - 1));						//respective qtr for filing
    	$d_field = $tArray_2[$a][0];														//actual date of filing

    	$csv_head1 = $csv_head1.$x_field.chr(44);
    	$csv_head2 = $csv_head2.$d_field.chr(44);

    	if (strpos($str_quarters, substr($x_field, -2, 2), 0) !== false) {
            if ($ary_query[$a][0] == $_ticker && $_ticker !=  "") { 	    
	        $href_L = '<a href='.$url_base.$ary_query[$a][1].'/'.$ary_query[$a][8].' target=_blank>';
	    } //end if
            $period = (!empty($href_L)) ? $href_L.$x_field.'</a>' : $x_field;	

	    if ($_report == "1") {
	        if ($_user_id == 'admin' && $_edit == 'true' && !empty($href_L) && substr($x_field, -2, 2) != 'Q4') {
	            $_box = $x_field.'_box'.$_stmt;											//box name
	            $_box = "<input type='checkbox' name='$_box' value='true' />";				//editor checkbpx
	        } //end else
	    } //end if

            $line = $line."<th $border_btm nowrap valign=bottom align=right><b>$font $_box&nbsp;$d_field</br>$period</p></b></th>"; 
        } //end if	

	if ($a < $cur_period && substr($xField, -2, 2) != 'q4' && $db_match == 'true') {include($php.'mySQLquery_5.php');}		//to log priorities
    } //loop

    $line = $line."</tr><tr>";   
    $_x = ($_edit != 'true') ? '' : chr(44);
    $csv_results = $csv_results.$_x.chr(44).$csv_head1."\r\n".$_x.chr(44).$csv_head2."\r\n";
} //end if

?>