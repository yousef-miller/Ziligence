

<?php 

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $_css = "
        <style type='text/css'>
	    .bold-font {font-weight: bold;}
	    .left-text {text-align: left;}
   	    .column-width {column-width: 100px;}
	    .vertical-align {vertical-align: bottom;}
	    .small-text {font-size: 2px;}
        </style>
    ";
    $var_css = "var cssClassNames = {'headerRow': 'bold-font left-text column-width vertical-align'};";
    $var_options = "var options = {'showRowNumber': true, 'allowHtml': true, 'cssClassNames': cssClassNames, width: '90%'};";     
    $_add_rows = 'data.addRows('.count($ary_companies).');';

    $a = -1; while(++$a < count($ary_companies)) {
	unset($_tkr); unset($_company); unset($_sic); unset($_date); unset($_cik); 
	unset($_href_1); unset($_type_1); unset($_href_2); unset($_type_2); unset($_href_3); unset($_type_3); unset($_href_4); unset($_type_4); 
    	$_tkr = trim($ary_companies[$a][0]); 
    	$_company = trim($ary_companies[$a][1]); 
    	$_sic = trim($ary_companies[$a][2]); 
    	$_date = trim($ary_companies[$a][3]);

    	$_cik = trim($ary_companies[$a][4]);
    	$_href_1 = trim($ary_companies[$a][5]);
	$_x = ($ary_companies[$a][6] == 'PREM14A') ? 'Prelim' : 'Actual';
    	$_type_1 = "<a href=$url_base$_cik/$_href_1 target=_blank>$_x</a>";
	if (!empty($ary_companies[$a][7])) {
	    $_href_2 = trim($ary_companies[$a][7]);
	    $_x = ($ary_companies[$a][8] == 'PREM14A') ? 'Prelim' : 'Actual';
    	    $_type_2 = "&nbsp;<a href=$url_base$_cik/$_href_2 target=_blank>$_x</a>";
	} //end if
	if (!empty($ary_companies[$a][9])) {
	    $_x = trim($ary_companies[$a][10]); $_href_3 = trim($ary_companies[$a][9]); 
    	    $_type_3 = "&nbsp;<a href=$url_base$_cik/$_href_3 target=_blank>$_x</a>";
	} //end if
	if (!empty($ary_companies[$a][11])) {
	    $_x = trim($ary_companies[$a][12]); $_href_4 = trim($ary_companies[$a][11]); 
    	    $_type_4 = "&nbsp;<a href=$url_base$_cik/$_href_4 target=_blank>$_x</a>";
	} //end if

    	$x0 = "data.setCell($a, 0, '$_tkr');";										//ticker
    	$x1 = "data.setCell($a, 1, '$_company');";								//company	
    	$x2 = "data.setCell($a, 2, '$_sic');";										//sic code    
    	$x3 = "data.setCell($a, 3, '$_date');";									//filing date
    	$x4 = "data.setCell($a, 4, '$_type_1$_type_2$_type_3$_type_4');";			//document types
    	$_body = $_body."$x0$x1$x2$x3$x4$x5";
    } //loop

    $tbl_function = "
    	function drawTable() {
            $var_css $var_options
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'TICKER'); 
            data.addColumn('string', 'COMPANY'); 
            data.addColumn('string', 'STANDARD INDUSTRIAL CLASSIFICATION'); 
            data.addColumn('string', 'FILING DATE');
            data.addColumn('string', 'FILING TYPES');
            $_add_rows $_body
            var table = new google.visualization.Table(document.getElementById('table_div'), {allowHTML: true});
            table.draw(data, options);
        }
    ";
    $body_results = "
        <head>
            <script type='text/javascript' src='https://www.google.com/jsapi'></script>
            <script type='text/javascript'>
                google.load('visualization', '1', {packages:['table']});
	        google.setOnLoadCallback(window.drawTable); $tbl_function
	    </script>
        </head>
        <body><div id='table_div'></div></body>
    ";
} //end if

?>
