



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
    	$_date = trim($ary_companies[$a][0]);
    	$_type = trim($ary_companies[$a][1]);
	$x1 = trim($ary_companies[$a][2]);
	$x2 = trim($ary_companies[$a][3]);
	$x3 = trim($ary_companies[$a][4]);
	$x4 = trim($ary_companies[$a][5]);
	$x5 = trim($ary_companies[$a][6]);

    	$_date = "data.setCell($a, 0, '$_date');";									//date of estimate
    	$_type = "data.setCell($a, 1, '$_type');";									//est type
    	$x1 = "data.setCell($a, 2, '$x1');";										//qtr 1 est
    	$x2 = "data.setCell($a, 3, '$x2');";										//qtr 2 est 
    	$x3 = "data.setCell($a, 4, '$x3');";										//fy 1 est
    	$x4 = "data.setCell($a, 5, '$x4');";										//fy 2 est
    	$x5 = "data.setCell($a, 6, '$x5');";										//ltg est

    	$_body = $_body."$_date$_type$x1$x2$x3$x4$x5";
    } //loop

    $tbl_function = "
    	function drawTable() {
            $var_css $var_options
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'DATE PUBLISHED'); 
            data.addColumn('string', 'FORECAST TYPE'); 
            data.addColumn('string', 'QTR: CURRENT'); 
            data.addColumn('string', 'QTR: NEXT');
            data.addColumn('string', 'YEAR: CURRENT');
            data.addColumn('string', 'YEAR: NEXT');
            data.addColumn('string', 'LT GROWTH');
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
