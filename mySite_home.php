
<?php

$php = '/mnt/data/myuser/';
include($php.'dbIndex.php');
include($php.'myLogin_2.php');							//to look up user id

if ($_access == 'true') {
    $keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
    $keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';
    $tbl_1 = '<table cellspacing="0" cellpadding="0" width:800px;>';
    $tbl_2 = '<table cellspacing="0" cellpadding="0" width:400px;>';
    $fWhite = 'style="color: #FFFFFF"'; $fBlack =  'style="color: #000000"';
    $bg_gray = "bgcolor='F0F0F0'"; $_chartType = 'Line'; $_title = "''";
    include($php.'myData00-0.php');																//to load time period array

    include($php.'mySite_home00-2.php');														//to parse url
    $today_y2 = $today_y - 1; $x = "&period%5B%5D=$today_y&period%5B%5D=$today_y2&qtr%5B%5D=FY";
    $_dIS = "%09&stmt%5B%5D=1&type=1".$x."&optionr%5B%5D=1";
    $_sIS = "%09&stmt%5B%5D=1&type=2".$x."&optionr%5B%5D=1";
    $_sBS = "%09&stmt%5B%5D=1&type=2".$x."&optionr%5B%5D=1";
    $_xRx = "%09&stmt%5B%5D=1&type=4".$x."&optionr%5B%5D=1";

    $link_sales = "<a href=$_aws/mySQLquery.php?$_hdr_link_2$_dIS>[Detailed P&L]</a>";
    $link_earnings = "<a href=$_aws/mySQLquery.php?$_hdr_link_2$_sIS>[Standard P&L]</a>";
    $link_credit = "<a href=$_aws/mySQLquery.php?$_hdr_link_2$xRx>Credit Position:</a>";
    $link_valuation = "<a href=$_aws/mySQLquery.php?$_hdr_link_2$_xRx>Valuation:</a>";
    $link_ratios = "<a href=$_aws/mySQLquery.php?$_hdr_link_2$_xRx>[Fundamentals]</a>";
    $link_balsht_items = "<a href=$_aws/mySQLquery.php?$_hdr_link_2$_sBS>[Bal Sheet Items]</a>";
    $link_fin_stmts = "<a href=$_aws/mySQLquery.php?$_hdr_link_2$_sIS $fWhite>Financial Statements</a>";			//header section
    $link_fundamentals = "<a href=$_aws/mySQLquery.php?$_hdr_link_2$_xRx $fWhite>Fundamentals</a>";			//header section
    $link_logout = "<a href=$_aws/ziligence.php?logout=1 $fWhite>Logout</a>";									//header section

    include($php.'dbConnect.php'); 
	$sql = "select distinct * from _myJData where ticker = '$_ticker' and left(tbl, 1) <= '2'";
    	$result = mysql_query($sql, $connection) or die(mysql_error());
	while($row = mysql_fetch_row($result)) {   
    	    $x1 = '** Mapping needs to be completed for these results. **';
	    $x2 = "<a href=$_aws/mySQLquery.php?$_hdr_link_2>[Click Here]</a>";
    	    if (strlen($row[4]) != 3) {$result_status = "<font size='1.50' color='FF0000'>$x1&nbsp;$x2</font></br>"; break;}
	} //loop

	include($php.'mySite_home00.php');			//to query company profile information
        include($php.'mySite_home00-1.php');			//to determine period number
	include($php.'myData00-12.php');				//to configure tArray_2 (actual dates for qtr ends)		
	include($php.'mySite_home01.php');			//to query stock price history
        include($php.'mySite_home01-1.php');			//to create stock history chart
        include($php.'mySite_home02.php');			//to query ownership/mgmt information
        include($php.'mySite_home03.php');			//to query earnings analysis
	include($php.'myChart_1.php');				//to prepare highlight chart
	include($php.'myChart_0.php');				//to prepare earnings chart
	include($php.'mySite_home05.php');			//to query eps estimates
        include($php.'mySite_home05-1.php');			//to create tables
        include($php.'mySite_home06.php');			//to create credit position table
        include($php.'mySite_home07.php');			//to create valuation summary
    mysql_close($connection);
    sleep(1);
} //end if

?>


<head>
    <script type="text/javascript"src="dygraph-combined.js"></script>
</head>

<?php print $css_hyperlink; ?>
<?php print $ziligence_header ?>
<div align='center'><table width="1250px">

<tr>
    <td nowrap valign="bottom" colspan="4" style="background-color:white;height:50px;width:800px;">
	<?php print $co_header; ?>
	<font size="0.75"><b>UPDATED:</b>&nbsp;<?php print $_marketTime; ?></font>
    </td>
    <td nowrap valign="bottom" align="left" colspan="2" style="background-color:white;height:50px;width:400px;">
	<?php print $result_status ?>
     </td>
</tr>

<tr>
    <td nowrap valign="bottom" colspan="4" style="background-color:white;height:10px;width:800px;"></td>
    <td nowrap valign="bottom" align="right" colspan="2" style="background-color:white;height:10px;width:400px;"></td>
</tr>

<tr>
    <td colspan="4" style="background-color:#F0F0F0;height:5px;width:800px;"><b><font size="1.5">Company Description:</font></b><br /></td>
   <td colspan="2" style="background-color:#F0F0F0;height:5px;width:400px;"><b><font size="1.5">Management:</font></b><br /></td>
</tr>
<tr>
    <td colspan="4" style="background-color:white;height:40px;width:800px;"><font size="1.5"><?php print $co_description; ?></font><br /></td>
   <td colspan="2" style="background-color:white;height:40px;width:400px;"><font size="0.75"><?php print $_management; ?></font></td>
</tr>
<tr>
    <td colspan="4" style="background-color:#F0F0F0;height:5px;width:800px;"><b><font size="1.5">Sales Analysis:</font></b><br /></td>
    <td colspan="2" style="background-color:#F0F0F0;height:5px;width:400px;"><b><font size="1.5">Major Holders:</font></b><br /></td>
</tr>
<tr>
    <td valign="top" colspan="4" style="background-color:white;height:40px;width:800px;"><?php print $_segment_revenues; ?><br /></td>
    <td valign="top" colspan="2" style="background-color:white;height:40px;width:400px;">
    	<font size="1.5"><?php print $_ownership; ?><br><div style=background-color:#F0F0F0;><b>Earnings Highlights:</b></div></font>
	<?php print $_chart_earnings_data; ?>
	<body><div id="chart_div"></div></body><br />
    </td>
</tr>
<tr>
    <td colspan="4" style="background-color:#F0F0F0;height:5px;width:800px;"><b><font size="1.5">Earnings Analysis</font></b><br /></td>
    <td colspan="2" style="background-color:#F0F0F0;height:5px;width:400px;"><b><font size="1.5">Consensus Estimates:</font></b><br /></td>
</tr>
<tr>
    <td valign="top" colspan="4" style="background-color:white;height:40px;width:800px;"><?php print $_earnings_analysis; ?><br /></td>
    <td valign="top" colspan="2" style="background-color:white;height:40px;width:400px;"><font size="0.75"><?php print $_consensus_both; ?></font><br /></td>
</tr>
<tr>
    <td colspan="2" style="background-color:#F0F0F0;height:5px;width:400px;"><b><font size="1.5">Credit Position:</font></b><br /></td>
    <td colspan="2" style="background-color:#F0F0F0;height:5px;width:400px;"><b><font size="1.5">&nbsp;Performance:</font></b><br /></td>
   <td colspan="2" style="background-color:#F0F0F0;height:5px;width:400px;"><b><font size="1.5">Price History:</font></b><br /></td>
</tr>
<tr>
    <td valign="top" colspan="2" style="background-color:white;height:60px;width:400px;"><?php print $_credit_position; ?><br /></td>
    <td valign="top" align="center" colspan="2" style="background-color:white;height:60px;width:200px;">
    <?php print $_valuation_smmry; ?><br /></td>
    <td align="left" colspan="2"><?php print $_stock_history_chart; ?></td></tr>

</table></div>
<br><br><br><br><br><br><br><br>