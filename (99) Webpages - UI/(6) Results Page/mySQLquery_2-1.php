<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {    
    $id1 = ++$_box_count.'drop'.$_stmt; 
    $id2 = $_box_count.'text'.$_stmt; 
    $id3 = $_box_count.'verify'.$_stmt; 

    $_serial = substr($row[5], 0, 5);
    $_serial = "<input type='hidden' name='$id2' id='$id2' maxlength='5' size='5' value='$_serial' />";

    $_crowd_class = '--'; $_account = trim($row[4]); 
    if ($_crowd_stat == 'true' && $_account != '###' && $_stmt != "3") {			//RUN CROWD SOURCING QUERY
	$x = "label_a = '$row[3]' and class <> '#' and user_id <> 'admin'";
        $sql = "select class, count(*) freq from _myJData where $x group by class order by freq desc limit 0, 1";
        $result2 = mysql_query($sql, $connection) or die(mysql_error());
        unset($row2); while ($row2[] = mysql_fetch_array($result2));
        if (intval($row2[0][1]) > 5) {											//SET MIN THRESHOLD FOR CROWD SOURCE FREQ.
	    $a = -1; while (++$a < count($class)) {if ($row2[0][0] == $class[$a][0]) {$_crowd_class = $class[$a][1]; break;}}
	} //end if
    } //end if
    $_crowd_class = "&nbsp;&nbsp;$font_3<i>$_crowd_class</i></font>";
    $_verify = "<input type='hidden' name='$id3' id='$id3' maxlength='3' size='3' value='$_account' />";

    $_pos_val = substr($row[1], 1) + 0;
    $jStr2 = $row; include($php.'ziligence_mapper1-4.php');					//to retrieve hyperlink to report

    $_selected = ' selected="selected" default';								//default search box parameter
    $_sub = (trim($row[2]) == '$') ? $_selected : '';
    $_tbd = (strlen($_account) != 3) ? $_selected : '';
    $x = '** Mapping needs to be completed for these results. **';
    if (empty($result_status) && $_GET[source] == 1) {$result_status = (strlen($_account) != 3) ? '' : $x;}
    $_drop_box = "&nbsp;<select name='$id1' size='1' style='color: #707070;'>";

    if ($_stmt == "3") {												//cash flow stmt
	$map_lbl = $_pos_str."
            $_drop_box
               <option value = 'tbd' '<?php print $_tbd; ?></option>;
               <option value = 'sub' '<?php print $_sub; ?>($) Sub-Total</option>;
	       <option value = 'xxx'>(!) Delete Row</option>;
            </select>
        ";
    } //end if
    elseif ($_stmt == "2") {												//balance sheet
        $_101 = ($_account == '101') ? $_selected : "";
        $_103 = ($_account == '103') ? $_selected : "";
        $_105 = ($_account == '105') ? $_selected : "";
        $_107 = ($_account == '107') ? $_selected : "";
        $_109 = ($_account == '109') ? $_selected : "";
        $_111 = ($_account == '111') ? $_selected : "";
        $_113 = ($_account == '113') ? $_selected : "";
        $_115 = ($_account == '115') ? $_selected : "";
        $_117 = ($_account == '117') ? $_selected : "";
        $_201 = ($_account == '201') ? $_selected : "";
        $_203 = ($_account == '203') ? $_selected : "";
        $_205 = ($_account == '205') ? $_selected : "";
        $_207 = ($_account == '207') ? $_selected : "";
        $_209 = ($_account == '209') ? $_selected : "";
        $_211 = ($_account == '211') ? $_selected : "";
        $_301 = ($_account == '301') ? $_selected : "";
        $_303 = ($_account == '303') ? $_selected : "";
        $_305 = ($_account == '305') ? $_selected : "";
        $_307 = ($_account == '307') ? $_selected : "";
        $_309 = ($_account == '309') ? $_selected : "";
        $_401 = ($_account == '401') ? $_selected : "";
	$map_lbl = $_pos_str."
            $_drop_box
               <option value = 'tbd' '<?php print $_tbd; ?></option>;
               <option value = 'sub' '<?php print $_sub; ?>($) Sub-Total</option>;
                <option value = '101' '<?php print $_101; ?>Cash</option>;
                <option value = '103' '<?php print $_103; ?>Marketable Securities</option>;
                <option value = '105' '<?php print $_105; ?>Accounts Receivable</option>;
                <option value = '107' '<?php print $_107; ?>Inventories</option>;
                <option value = '109' '<?php print $_109; ?>Prepaid Expenses</option>;
                <option value = '111' '<?php print $_111; ?>Deferred Tax Asset</option>;
                <option value = '113 '<?php print $_113; ?>Fixed Assets</option>;
		<option value = '115' '<?php print $_115; ?>Long-Term Investments</option>;
                <option value = '117' '<?php print $_117; ?>Goodwill</option>;
                <option value = '201' '<?php print $_201; ?>Accounts Payable</option>;
                <option value = '203' '<?php print $_203; ?>Notes Payable</option>;
                <option value = '205' '<?php print $_205; ?>Long-Term Debt</option>;
                <option value = '207' '<?php print $_207; ?>Deferred Tax Liability</option>;
                <option value = '209' '<?php print $_209; ?>Pension Liability</option>;
                <option value = '211' '<?php print $_211; ?>Other Non-Current Liab.</option>;
                <option value = '301' '<?php print $_301; ?>Preferred Stock</option>;
                <option value = '303' '<?php print $_303; ?>Common Stock</option>;
                <option value = '105' '<?php print $_305; ?>A.P.I.C.</option>;
                <option value = '307' '<?php print $_307; ?>Retained Earnings</option>;
                <option value = '309' '<?php print $_309; ?>Treasury Stock</option>;
                <option value = '401' '<?php print $_401; ?>Minority Interests</option>;
		<option value = 'xxx'>(!) Delete Row</option>;
            </select>$_crowd_class
	";
    } //end if
    elseif ($_stmt == "1") {													//income stmt
        $_501 = ($_account == '501') ? $_selected : "";
        $_503 = ($_account == '503') ? $_selected : "";
        $_505 = ($_account == '505') ? $_selected : "";
        $_701 = ($_account == '701') ? $_selected : "";
        $_703 = ($_account == '703') ? $_selected : "";
        $_705 = ($_account == '705') ? $_selected : "";
        $_709 = ($_account == '709') ? $_selected : "";
        $_711 = ($_account == '711') ? $_selected : "";
        $_713 = ($_account == '713') ? $_selected : "";
        $_715 = ($_account == '715') ? $_selected : "";
        $_717 = ($_account == '717') ? $_selected : "";
	$map_lbl = $_pos_str."
            $_drop_box
             	<option value = 'tbd' '<?php print $_tbd; ?></option>;
           	<option value = 'sub' '<?php print $_sub; ?>($) Sub-Total</option>;
           	<option value = '501' '<?php print $_501; ?>Net Sales</option>;
                <option value = '503' '<?php print $_503; ?>Other Income</option>;
                <option value = '505' '<?php print $_505; ?>Non-Recurring Income</option>;
                <option value = '701' '<?php print $_701; ?>Cost of Sales</option>;
                <option value = '703' '<?php print $_703; ?>SGA Expenses</option>;
                <option value = '705' '<?php print $_705; ?>Other Expenses</option>;
              	<option value = '709' '<?php print $_709; ?>Depreciation</option>;
                <option value = '711' '<?php print $_711; ?>Amortization</option>;
		<option value = '713' '<?php print $_713; ?>Interest Expense</option>;
                <option value = '715' '<?php print $_715; ?>Income Tax Expense</option>;
            	<option value = '717' '<?php print $_707; ?>Non-Recurring Expenses</option>;
		<option value = 'xxx'>(!) Delete Row</option>;
            </select>$_crowd_class
	";
    } //end elseif
} //end if

?>