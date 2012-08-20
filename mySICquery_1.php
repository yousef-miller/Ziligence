
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
    	$_tkr = trim($ary_companies[$a][0]); 
    	$_company = trim($ary_companies[$a][1]); 
    	$_exch = trim($ary_companies[$a][2]); 
    	$_sic = trim($ary_companies[$a][3]); 
    	$_status = trim($ary_companies[$a][4]); 
	if (empty($_qkword) && $_view == '4' ) {
		$r1 = '1'; $r2 = '2'; $r3 = '3'; $r4 = '4'; $r5 = '5';
		$_setCol_1 = "data.setCell($a, 0, $_status);";
		$_addCol_1 = "data.addColumn('boolean', 'UPDATE</br>MAPPING');";
		$_edit =  "<a href=$_aws/mySQLquery.php?user=$user_id&tkr=$_tkr$_link3>Edit</a>";
		$_setCol_2 = "data.setCell($a, 6, '$_edit');";
		$_addCol_2 = "data.addColumn('string', 'EDIT</br>RESULTS');";
	} //end if
	else {$r1 = '0'; $r2 = '1'; $r3 = '2'; $r4 = '3'; $r5 = '4';}

    	$x0 = "data.setCell($a, $r1, '<a href=$_aws/mySQLquery.php?user=$user_id&tkr=$_tkr$_link2>$_tkr</a>');";		//ticker
    	$x1 = "data.setCell($a, $r2, '<a href=$_aws/mySite_home.php?user=$user_id&tkr=$_tkr$_link2>$_company</a>');";	//company	
    	$x2 = "data.setCell($a, $r3, '$_sic');";																	//sic code    
    	$x3 = "data.setCell($a, $r4, '$_exch');";																	//exchange
	$x4 = "data.setCell($a, $r5, '<a href=$_aws/myESTquery.php?user=$user_id&tkr=$_tkr$_link2>View</a>');";
    	$_body = $_body."$_setCol_1$_setCol_2$x0$x1$x2$x3$x4";
    } //loop

    $tbl_function = "
    	function drawTable() {
            $var_css $var_options
            var data = new google.visualization.DataTable();
	    $_addCol_1
            data.addColumn('string', 'TICKER'); 
            data.addColumn('string', 'COMPANY'); 
            data.addColumn('string', 'STANDARD INDUSTRIAL CLASSIFICATION'); 
            data.addColumn('string', 'EXCHANGE');
            data.addColumn('string', 'CONSENSUS</br>ESTIMATES');
	    $_addCol_2
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
