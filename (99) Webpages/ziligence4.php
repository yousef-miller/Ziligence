
<?php 

$php='/mnt/data/myuser/'; include($php.'dbIndex.php');

$_w2 = 15;
$_w3 = 100 - ($_w1 * 2) - $_w2;
$_pad1 = 'style="padding-top: 12px;"'; $_pad2 = 'style="padding-top: 9px;"';
$_blank_row = "<tr><td width=$_w1%></td><td colspan=2 $bdr></td><td width=$_w1%></td></tr>";
$_blank_row2 = "<tr><td width=$_w1%></td><td colspan=2></td><td width=$_w1%></td></tr>";
$learnMore = trim($learnMore);

$body_1 = $css_hyperlink."
<div align=center>
<table width=100% cellspacing=0>

<tr>
    <td width=$_w1% $_pad1></td>
    <td nowrap colspan=2 align=left $_pad1><font size=4><b>Coverage & Scope:</b></font></td>
    <td width=$_w1% $_pad1></td>
</tr>

$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=2 valign=top><font size=3>We cover over 4,700 companies representing all active stocks traded on the major U.S. exchanges.  Our quarterly and annual data sets date back to 2007 (this can be expanded).</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Financial Statements</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>We provide complete historical financial statements in their 'as filed' format.  Users map their own standarized fields, thus creating customized reports configured to their specs.  Our datasets are viewable by quarter, fiscal year, and trailing twelve month period.  We give you the complete picture, all the numbers, and the right tools.</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Market Data</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>We utilize historical stock prices and dividends to calculate valuation metrics on an inter-day basis.</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Consensus Estimates</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>Consensus estimates for EPS, Sales, and Growth Rates are aggregated by Zack's Investment Research.</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

$_blank_row2

<tr>
    <td width=$_w1% $_pad1></td>
    <td nowrap colspan=2 align=left $_pad1><font size=4><b>Metrics & Variances:</b></font></td>
    <td width=$_w1% $_pad1></td>
</tr>

$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=2 valign=top><font size=3>Calculations for metrics and variances are based upon user defined field mapping.  Mapping is saved and remains in-place across time, thus automatically updating these values with each new earnings releasse.</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Line Item Variances</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>EPS, Sales, COGS, Gross Income, SG&A, EBITDA, EBIT, Interest Expense, Pretax Income, Dividend, Long Term Growth Rate, Capital Expenditures, Cash, Total Debt, and more.</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Per Share Values</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>EPS, Book Value Per Share, Cash Flow, Dividend, Free Cash Flow, Sales, Tangible Book Value
</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Valuation Ratios</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>P/E, P/B, P/CF, P/FCF, P/S, Dividend Yield, Payout Ratio, EV/EBITDA, EV/EBIT, EV/Sales, Price/Tangible Book</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Profitability Margin</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>ROE, ROA, Gross Margin, Net Margin, Operating Margin, Pretax Margin, EBITDA Margin, EBIT Margin, Free Cash Flow Margin</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Leverage Measures</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>Total Debt/Assets, Total Debt/Total Equity, Total Debt/EBITDA, Total Debt/EBIT, Assets/Equity</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Credit Ratios</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>EBIT/Interest Expense on Debt, EBITDA/Interest Expense on Debt, FFO/Total Debt, Free Operating Cash Flow/Total Debt, Operating Income/Sales, LT Debt/Total Capital, Total Debt/Total Capital, Net Debt/EBITDA, Net Debt/EBITDA, Cash/Total Debt</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

$_blank_row

<tr>
    <td width=$_w1% $_pad2></td>
    <td nowrap colspan=2 align=center $_pad2><font size=4.255>$readFAQ|$sp6$collateral1|$sp6$learnMore</font></td>
    <td width=$_w1% $_pad2></td>
</tr>

</table>
</div>
";

$product_screen = '<html><title>Ziligence Coverage & Scope</title>'.$ziligence_header.$body_1.$ziligence_footer.'</html>';
sleep(1); echo $product_screen;

?>