<?php

if ($_access == 'true') {
    $set_max = "false"; include($php.'mySite_home03-0.php');						//to determine value factor & periods

    $_loop = 0; while (++$_loop <=2) {
    	switch ($_loop) {
	    case "1": $sql = "select distinct * from _myJData where ticker = '$_ticker' and class = '501' and user_id = '$_user_id' order by tbl"; break;
	    case "2": $sql = "select distinct * from _myJData where ticker = '$_ticker' and class = '501' and user_id = 'admin' order by tbl"; 
        } //end switch
        $result = mysql_query($sql, $connection) or die(mysql_error());
        while ($row = mysql_fetch_array($result)) {
            include($php.'mySite_home03-5.php');									//to load "str" array
            if (array_sum($str) != 0) {
            	$resize = "true"; include($php.'mySite_home03-0.php');						//to format values for display
            	$p1 = strpos($row[5], chr(32), 25);
            	$lbl = ($p1 !== false) ? substr($row[5], 6, $p1) : substr($row[5], 6);				//to truncate labels for detailed earnings section
            	$ary_net_sales[] = array($lbl, $x0, $x1, $x2, $x3, $x4, $x5);
            	$ary_net_sales_2[] = array('_', $val[0], $val[1], $val[2], $val[3], $val[4], $val[5], $val[6], $val[7], $val[8]);		//for calculations
             } //end if
        } //loop
        if (abs($str_sum) > 0) {break;}												//to break or repeat depending on values
    } //loop

    $_loop = 0; while (++$_loop <=2) {
    	switch ($_loop) {
	    case "1": $sql = "select distinct * from _myMData where ticker = '$_ticker' and user_id = '$_user_id'"; break;
	    case "2": $sql = "select distinct * from _myMData where ticker = '$_ticker' and user_id = 'admin'"; break;
        } //end switch
        $result = mysql_query($sql, $connection) or die(mysql_error());
        while ($row = mysql_fetch_array($result)) {
    	    include($php.'mySite_home03-5.php');									//to load "str" array
    	    $resize = "true"; include($php.'mySite_home03-0.php');						//to format values for display
    	    switch ($row[4]) {
	    	case '101': $cash = $val; $color_cash = $color; break;
	    	case '103': $mkbl_sec = $val; $color_mktbl_sec = $color; break;
	    	case '105': $accts_recvbl = $str; $color_accts_recvbl = $color; break;
	    	case '107': $inventories = $str; $color_inventories = $color; break;
	    	case '118': $total_assets = $str; $color_total_assets = $color_2; break;
	    	case '201': $accts_pybl = $str; $color_accts_pybl = $color; break;
	    	case '203': $cur_notes_pybl = $val; $color_cur_notes_pybl = $color; break;
	    	case '205': $notes_pybl = $val; $color_notes_pybl = $color; break;
	    	case '212': $total_liab = $str; $color_total_liab = $color_2; break;

	    	case '501': $net_sales = $str; $net_sales_2 = $val; $color_net_sales = $color_2; break;
	    	case '503': $other_income = $str; $other_income_2 = $val; $color_other_income = $color; break;
	    	case '505': $non_recurring = $str; $color_non_recurring = $color; break;
	    	case '506': $gross_sales = $str; $color_gross_sales = $color; break;
	    	case '708': $ebitda = $str; $color_ebitda = $color; break;
	    	case '712': $ebit = $str; $color_ebit = $color; break;
	    	case '713': $interest_expense = $str; $color_interest_expense = $color; break;
            } //end switch
        } //loop
       if (abs($str_sum) > 0) {break;}												//to break or repeat depending on values
    } //loop

    $_loop = 0; while (++$_loop <=2) {
       switch ($_loop) {
	    case "1": $sql = "select distinct * from _myMxData where ticker = '$_ticker' and user_id = '$_user_id'"; break;
	    case "2": $sql = "select distinct * from _myMxData where ticker = '$_ticker' and user_id = 'admin'"; break;
        } //end switch
        $result = mysql_query($sql, $connection) or die(mysql_error());
        while ($row = mysql_fetch_array($result)) {
    	    include($php.'mySite_home03-5.php');									//to load "str" array
    	    $resize = "true"; include($php.'mySite_home03-0.php');					//to format values for display
    	    switch ($row[4]) {
	    	case '101': $ttm_cash = $val; $color_ttm_cash = $color; break;
	    	case '103': $ttm_mkbl_sec = $val; $color_ttm_mktbl_sec = $color; break;
	    	case '105': $ttm_accts_recvbl = $str; $color_ttm_accts_recvbl = $color; break;
	    	case '107': $ttm_inventories = $str; $color_ttm_inventories = $color; break;
	    	case '118': $ttm_total_assets = $str; $color_ttm_total_assets = $color_2; break;
	    	case '201': $ttm_accts_pybl = $str; $color_ttm_accts_pybl = $color; break;
	    	case '203': $ttm_cur_notes_pybl = $val; $color_ttm_cur_notes_pybl = $color; break;
	    	case '205': $ttm_notes_pybl = $val; $color_ttm_notes_pybl = $color; break;
	    	case '212': $ttm_total_liab = $str; $color_ttm_total_liab = $color_2; break;

	    	case '501': $ttm_net_sales = $str; $ttm_net_sales_2 = $val; $color_ttm_net_sales = $color_2; 
		    $ary_chart_values[] = array('501', 'Net sales', $chart_str); break; break;
	    	case '503': $ttm_other_income = $str; $ttm_other_income_2 = $val; $color_ttm_other_income = $color; break;
	    	case '505': $ttm_non_recurring = $str; $color_ttm_non_recurring = $color; break;
	    	case '506': $ttm_gross_sales = $str; $color_ttm_gross_sales = $color; break;
	    	case '708': $ttm_ebitda = $str; $color_ttm_ebitda = $color; 
		    $ary_chart_values[] = array('708', 'Ebitda', $chart_str); break;
	    	case '712': $ttm_ebit = $str; $color_ttm_ebit = $color; break;
	    	case '713': $ttm_interest_expense = $str; $color_ttm_interest_expense = $color; break;
            } //end switch
        } //loop
         if (abs($str_sum) > 0) {break;}												//to break or repeat depending on values
    } //loop

    $_loop = 0; while (++$_loop <=2) {
    	switch ($_loop) {
            case "1" : $sql = "select distinct * from _myRData where ticker = '$_ticker' and class >= '900' and user_id = '$_user_id'"; break;
            case "2": $sql = "select distinct * from _myRData where ticker = '$_ticker' and class >= '900' and user_id = 'admin'"; break;
        } //end switch
        $result = mysql_query($sql, $connection) or die(mysql_error());
        while ($row = mysql_fetch_array($result)) {
            include($php.'mySite_home03-5.php');										//to load "str" array
            $resize = "false"; include($php.'mySite_home03-0.php');						//to format values for display
            switch ($row[4]) {
	    	case '901': $gross_margin = $str; $color_gross_margin = $color; break;
	    	case '902': $oper_margin = $str; $color_oper_margin = $color; break;
	    	case '903': $profit_margin = $str; $color_profit_margin = $color; break;
	    	case '906': $roe = $str; $color_roe = $color; break;
	    	case '911': $cur_ratio = $str; $color_cur_ratio = $color; break;
	    	case '918': $int_cov_ratio = $str; $color_int_cov_ratio = $color; break;
	    	case '919': $fcf_debt_ratio = $str; $color_fcf_debt_ratio = $color; break;
	    	case '920': $ffo_debt_ratio = $str; $color_ffo_debt_ratio = $color; break;
	    	case '951': $waso = $str; $color_waso = '707070'; break;
	    	case '952': $eps = $str; $eps_2 = $val; $color_eps = $color_2; 
		    $eps_stats = $stats_str; $eps_stats_color = $stats_color; break;
	    	case '953': $pr_sales = $stats_str; $pr_sales_color = $stats_color; break;
	    	case '954': $ev_ebitda = $stats_str; $color_ev_ebitda = $stats_color; break;
	    	case '955': $ev_sales = $stats_str; $color_ev_sales = $stats_color; break;
	    	case '958': $pr_cf = $stats_str; $color_pr_cf = $stats_color; break;
	    	case '959': $pr_bk = $stats_str; $color_pr_bk = $stats_color; break;
            } //end switch
        } //loop
        if (abs($str_sum) > 0) {break;}												//to break or repeat depending on values
    } //loop

    $_loop = 0; while (++$_loop <=2) {
        switch ($_loop) {
 	    case "1": $sql = "select distinct * from _myRxData where ticker = '$_ticker' and class >= '900' and user_id = '$_user_id'"; break;
	    case "2": $sql = "select distinct * from _myRxData where ticker = '$_ticker' and class >= '900' and user_id = 'admin'"; break;
        } //end switch
        $result = mysql_query($sql, $connection) or die(mysql_error());
        while ($row = mysql_fetch_array($result)) {
            include($php.'mySite_home03-5.php');										//to load "str" array
            $resize = "false"; include($php.'mySite_home03-0.php');						//to format values for display
            switch ($row[4]) {
	    	case '901': $ttm_gross_margin = $str; $color_ttm_gross_margin = $color; break;
	    	case '902': $ttm_oper_margin = $str; $color_ttm_oper_margin = $color; break;
	    	case '903': $ttm_profit_margin = $str; $color_ttm_profit_margin = $color; break;
	    	case '906': $ttm_roe = $str; $color_ttm_roe = $color; break;
	    	case '911': $ttm_cur_ratio = $str; $color_ttm_cur_ratio = $color; break;
	    	case '918': $ttm_int_cov_ratio = $str; $color_ttm_int_cov_ratio = $color; break;
	    	case '919': $ttm_fcf_debt_ratio = $str; $color_ttm_fcf_debt_ratio = $color; break;
	    	case '920': $ttm_ffo_debt_ratio = $str; $color_ttm_ffo_debt_ratio = $color; break;
	    	case '951': $ttm_waso = $str; $color_ttm_waso = '707070'; break;
	    	case '952': $ttm_eps = $str; $ttm_eps_2 = $val; $color_ttm_eps = $color_2; break;
	    	case '956': $ttm_pe = $stats_str; $color_ttm_pe = $stats_color; break;
	    	case '957': $ttm_peg = $stats_str; $color_ttm_peg = $stats_color; break;
             } //end switch
        } //loop
        if (abs($str_sum) > 0) {break;}											//to break or repeat depending on values 
    } //loop

    include($php.'mySite_home03-1.php');										//to query earnings analysis
    include($php.'mySite_home03-2.php');										//to query segment earnings

} //end if

?>