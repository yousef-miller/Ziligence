<?php

$mkt_cap = '$ '.number_format($waso[0] * $_stockPrice[1], 0, chr(46), chr(44));

$_body_0 = "
<tr> 
    <td nowrap colspan='2'><font size='0.75'><b>Current price:<b></font></td>
    <td colspan='3' align='right'><font size='0.75'><b>$&nbsp;$_stockPrice[1]<b></font></td>
    <td colspan ='2' align='right'><font size='0.75'><font size='0.75' color=$color_stock_history[0]>&nbsp;&nbsp;$_stockHistory[0]</font></td>
</tr>
<tr $bg_gray>
   <td nowrap colspan='6'><font size='0.75'>Avg vol (3m):</font></td>
    <td align='right'><font size='0.75' color='707070'>$_stockRange[0]</font></td>
</tr>
<tr>
   <td nowrap colspan='2'><font size='0.75'>3 mo range & chg:</font></td>
    <td colspan='3' align='right'><font size='0.75' color='707070'>$_stockRange[1]</font></td>
    <td colspan='2' align='right'><font size='0.75' color=$color_stock_history[2]>$_stockHistory[2]</font></td>
</tr>
<tr $bg_gray>
   <td nowrap colspan='2'><font size='0.75'>YTD range & chg:</font></td>
    <td colspan='3' align='right'><font size='0.75' color='707070'>$_stockRange[2]</font></td>
    <td colspan='2' align='right'><font size='0.75' color=$color_stock_history[1]>$_stockHistory[1]</font></td>
</tr>
<tr>
   <td nowrap colspan='2'><font size='0.75'>52 wk range & chg:</font></td>
    <td colspan='3' align='right'><font size='0.75' color='707070'>$_stockRange[3]</font></td>
    <td colspan='2' align='right'><font size='0.75' color=$color_stock_history[3]>$_stockHistory[3]</font></td>
</tr>
<tr $bg_gray>
   <td nowrap colspan='2'><font size='0.75'>Mkt cap (in millions):</font></td>
    <td colspan='3' align='right'><font size='0.75' color='707070'>&nbsp;</font></td>
    <td colspan='2' align='right'><font size='0.75' color='707070'>$mkt_cap</font></td>
</tr>
<tr>
   <td colspan='2'><font size='0.75'>&nbsp;</font></td>
    <td colspan='3' align='right'><font size='0.75' color='707070'>&nbsp;</font></td>
    <td colspan='2' align='right'><font size='0.75' color='707070'>&nbsp;</font></td>
</tr>
";

$_body_1 = "
<tr>
    <td><font size='0.75'>[$link_valuation]</font></td>
    <td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='0.75'></font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;&nbsp;Current</u></font></td>
    <td align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5Yr:&nbsp;</font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;High</u></font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Low</u></font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Avg</u></font></td>
</tr>
<tr $bg_gray>
    <td><font size='0.75'>EPS</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$eps_stats_color[0]>$eps_stats[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$eps_stats_color[1]>$eps_stats[1]</font></td>
    <td align='right'><font size='0.75' color=$eps_stats_color[2]>$eps_stats[2]</font></td>
    <td align='right'><font size='0.75' color=$eps_stats_color[3]>$eps_stats[3]</font></td>
</tr>
<tr>
   <td><font size='0.75'>P/E (LTM)</font></td>
    <td align='right'><font size='0.75'>x</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_pe[0]>$ttm_pe[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_pe[1]>$ttm_pe[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_pe[2]>$ttm_pe[2]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_pe[3]>$ttm_pe[3]</font></td>
</tr>
<tr $bg_gray>
   <td><font size='0.75'>PEG (LTM)</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_peg[0]>$ttm_peg[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_peg[1]>$ttm_peg[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_peg[2]>$ttm_peg[2]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_peg[3]>$ttm_peg[3]</font></td>
</tr>
<tr>
   <td><font size='0.75'>P/Bk</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_pr_bk[0]>$pr_bk[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_pr_bk[1]>$pr_bk[1]</font></td>
    <td align='right'><font size='0.75' color=$color_pr_bk[2]>$pr_bk[2]</font></td>
    <td align='right'><font size='0.75' color=$color_pr_bk[3]>$pr_bk[3]</font></td>
</tr>
<tr $bg_gray>
   <td><font size='0.75'>P/CF</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_pr_cf[0]>$pr_cf[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_pr_cf[1]>$pr_cf[1]</font></td>
    <td align='right'><font size='0.75' color=$color_pr_cf[2]>$pr_cf[2]</font></td>
    <td align='right'><font size='0.75' color=$color_pr_cf[3]>$pr_cf[3]</font></td>
</tr>
<tr>
   <td><font size='0.75'>P/Sales</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$pr_sales_color[0]>$pr_sales[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$pr_sales_color[1]>$pr_sales[1]</font></td>
    <td align='right'><font size='0.75' color=$pr_sales_color[2]>$pr_sales[2]</font></td>
    <td align='right'><font size='0.75' color=$pr_sales_color[3]>$pr_sales[3]</font></td>
</tr>
<tr $bg_gray>
   <td><font size='0.75'>EV/Ebitda</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ev_ebitda[0]>$ev_ebitda[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ev_ebitda[1]>$ev_ebitda[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ev_ebitda[2]>$ev_ebitda[2]</font></td>
    <td align='right'><font size='0.75' color=$color_ev_ebitda[3]>$ev_ebitda[3]</font></td>
</tr>
<tr>
   <td><font size='0.75'>EV/Sales</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ev_sales[0]>$ev_sales[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ev_sales[1]>$ev_sales[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ev_sales[2]>$ev_sales[2]</font></td>
    <td align='right'><font size='0.75' color=$color_ev_sales[3]>$ev_sales[3]</font></td>
</tr>
<tr $bg_gray>
   <td><font size='0.75'>Div yield</font></td>
    <td align='right'><font size='0.75'>%</font></td>
    <td align='right'><font size='0.75' color=$color_yield_history[0]>$yield_history[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_yield_history[1]>$yield_history[1]</font></td>
    <td align='right'><font size='0.75' color=$color_yield_history[2]>$yield_history[2]</font></td>
    <td align='right'><font size='0.75' color=$color_yield_history[3]>$yield_history[3]</font></td>
</tr>
<tr>
   <td colspan = '4' align='left'><font size='0.75'><i>(Last dividend paid: $yield_history[4])</i></font></td>
    <td colspan='3' align='right'><font size='0.75'>$link_compset_2</font></td>
</tr>
";

$_valuation_smmry = $tbl_1.$_body_0.$_body_1.'</table>';

?>