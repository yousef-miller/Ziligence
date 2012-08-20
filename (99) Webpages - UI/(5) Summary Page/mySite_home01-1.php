
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {

$_chart_1 = '
<div style="width:300px">
  <div id="graphdiv3"></div>
	<script type="text/javascript">
  	    g3 = new Dygraph(
    	    	document.getElementById("graphdiv3"),
';

//$_results = '"Date, Close\n" +"2012-04-12, 70.87\n" + "2012-04-11, 70.11\n" + "2012-04-10, 68.2\n" + "2012-04-09, 69.71\n" +';

$_chart_2 = '
		,{rollPeriod: 1, showRoller: true}
  	    );
	</script>
</div>
';

$_stock_history_chart = $_chart_1.trim($_results).$_chart_2;
} //end if

?>