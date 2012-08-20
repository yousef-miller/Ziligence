<?php

$_body_1 = "
<tr>
    <td valign='bottom'><font size='0.75'>$link_earnings</font></td>
    <td valign='bottom' align='right'><font size='0.75'><b>&nbsp;&nbsp;&nbsp;&nbsp;qtr:</b></font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_q0</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_q1</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_q2</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_q3</font></td>
    <td valign='bottom' align='right'><font size='0.75'><b>&nbsp;&nbsp;&nbsp;&nbsp;ttm:</b></font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_0</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_1</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_2</font></td>
    <td valign='bottom' align='right'><font size='0.75'><b>&nbsp;&nbsp;&nbsp;&nbspfye:</b></font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_y0</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_y1</font></td>
</tr>
<tr $bg_gray>
    <td><font size='0.75'>Gross sales</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_gross_sales[0]>$gross_sales[0]</font></td>
    <td align='right'><font size='0.75' color=$color_gross_sales[1]>$gross_sales[1]</font></td>
    <td align='right'><font size='0.75' color=$color_gross_sales[2]>$gross_sales[2]</font></td>
    <td align='right'><font size='0.75' color=$color_gross_sales[3]>$gross_sales[3]</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_gross_sales[0]>$ttm_gross_sales[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_gross_sales[1]>$ttm_gross_sales[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_gross_sales[2]>$ttm_gross_sales[2]</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_gross_sales[4]>$gross_sales[4]</font></td>
    <td align='right'><font size='0.75' color=$color_gross_sales[5]>$gross_sales[5]</font></td>
</tr>
<tr>
    <td><font size='0.75'>Gross margin</font></td>
    <td align='right'><font size='0.75'>%</font></td>
    <td align='right'><font size='0.75' color=$color_gross_margin[0]>$gross_margin[0]</font></td>
    <td align='right'><font size='0.75' color=$color_gross_margin[1]>$gross_margin[1]</font></td>
    <td align='right'><font size='0.75' color=$color_gross_margin[2]>$gross_margin[2]</font></td>
    <td align='right'><font size='0.75' color=$color_gross_margin[3]>$gross_margin[3]</font></td>
    <td align='right'><font size='0.75'>%</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_gross_margin[0]>$ttm_gross_margin[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_gross_margin[1]>$ttm_gross_margin[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_gross_margin[2]>$ttm_gross_margin[2]</font></td>
    <td align='right'><font size='0.75'>%</font></td>
    <td align='right'><font size='0.75' color=$color_gross_margin[4]>$gross_margin[4]</font></td>
    <td align='right'><font size='0.75' color=$color_gross_margin[5]>$gross_margin[5]</font></td>
 </tr>
<tr $bg_gray>
    <td><font size='0.75'>Operating margin</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_oper_margin[0]>$oper_margin[0]</font></td>
    <td align='right'><font size='0.75' color=$color_oper_margin[1]>$oper_margin[1]</font></td>
    <td align='right'><font size='0.75' color=$color_oper_margin[2]>$oper_margin[2]</font></td>
    <td align='right'><font size='0.75' color=$color_oper_margin[3]>$oper_margin[3]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_oper_margin[0]>$ttm_oper_margin[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_oper_margin[1]>$ttm_oper_margin[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_oper_margin[2]>$ttm_oper_margin[2]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_oper_margin[4]>$oper_margin[4]</font></td>
    <td align='right'><font size='0.75' color=$color_oper_margin[5]>$oper_margin[5]</font></td>
 </tr>
<tr>
    <td><font size='0.75'>Profit margin</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_profit_margin[0]>$profit_margin[0]</font></td>
    <td align='right'><font size='0.75' color=$color_profit_margin[1]>$profit_margin[1]</font></td>
    <td align='right'><font size='0.75' color=$color_profit_margin[2]>$profit_margin[2]</font></td>
    <td align='right'><font size='0.75' color=$color_profit_margin[3]>$profit_margin[3]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_profit_margin[0]>$ttm_profit_margin[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_profit_margin[1]>$ttm_profit_margin[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_profit_margin[2]>$ttm_profit_margin[2]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_profit_margin[4]>$profit_margin[4]</font></td>
    <td align='right'><font size='0.75' color=$color_profit_margin[5]>$profit_margin[5]</font></td>
 </tr>
<tr $bg_gray>
    <td><font size='0.75'>Ebitda</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_ebitda[0]>$ebitda[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ebitda[1]>$ebitda[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ebitda[2]>$ebitda[2]</font></td>
    <td align='right'><font size='0.75' color=$color_ebitda[3]>$ebitda[3]</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_ebitda[0]>$ttm_ebitda[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_ebitda[1]>$ttm_ebitda[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_ebitda[2]>$ttm_ebitda[2]</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_ebitda[4]>$ebitda[4]</font></td>
    <td align='right'><font size='0.75' color=$color_ebitda[5]>$ebitda[5]</font></td>
</tr>
<tr>
   <td><font size='0.75'>Ebit</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ebit[0]>$ebit[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ebit[1]>$ebit[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ebit[2]>$ebit[2]</font></td>
    <td align='right'><font size='0.75' color=$color_ebit[3]>$ebit[3]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_ebit[0]>$ttm_ebit[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_ebit[1]>$ttm_ebit[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_ebit[2]>$ttm_ebit[2]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ebit[4]>$ebit[4]</font></td>
    <td align='right'><font size='0.75' color=$color_ebit[5]>$ebit[5]</font></td>
 </tr>
<tr $bg_gray>
   <td><font size='0.75'>Interest expense</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right' style='border-bottom:1px solid'><font size='0.75' color=$color_interest_expense[0]>$interest_expense[0]</font></td>
    <td align='right' style='border-bottom:1px solid'><font size='0.75' color=$color_interest_expense[1]>$interest_expense[1]</font></td>
    <td align='right' style='border-bottom:1px solid'><font size='0.75' color=$color_interest_expense[2]>$interest_expense[2]</font></td>
    <td align='right' style='border-bottom:1px solid'><font size='0.75' color=$color_interest_expense[3]>$interest_expense[3]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right' style='border-bottom:1px solid' ><font size='0.75' color=$color_ttm_interest_expense[0]>$ttm_interest_expense[0]</font></td>
    <td align='right' style='border-bottom:1px solid'><font size='0.75' color=$color_ttm_interest_expense[1]>$ttm_interest_expense[1]</font></td>
    <td align='right' style='border-bottom:1px solid'><font size='0.75' color=$color_ttm_interest_expense[2]>$ttm_interest_expense[2]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right' style='border-bottom:1px solid'><font size='0.75' color=$color_interest_expense[4]>$interest_expense[4]</font></td>
    <td align='right' style='border-bottom:1px solid'><font size='0.75' color=$color_interest_expense[5]>$interest_expense[5]</font></td>
</tr>
<tr>
   <td><font size='0.75'>&nbsp;&nbsp;Earnings per share</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_eps>$eps[0]</font></td>
    <td align='right'><font size='0.75' color=$color_eps>$eps[1]</font></td>
    <td align='right'><font size='0.75' color=$color_eps>$eps[2]</font></td>
    <td align='right'><font size='0.75' color=$color_eps>$eps[3]</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_eps>$ttm_eps[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_eps>$ttm_eps[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_eps>$ttm_eps[2]</font></td>
     <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_eps>$eps[4]</font></td>
    <td align='right'><font size='0.75' color=$color_eps>$eps[5]</font></td>
</tr>
";

$x0 = $eps_2[0]; $x1 = $eps_2[1]; $x2 = $eps_2[2]; $x3 = $eps_2[3]; 
$x4 = $eps_2[4]; $x5 = $eps_2[5];
$x6 = $eps_2[6];  $x7 = $eps_2[7];
$r0 = $ttm_eps_2[0]; $r1 = $ttm_eps_2[1]; $r2 = $ttm_eps_2[2]; $r3 = $ttm_eps_2[3];    
include($php.'mySite_home03-6.php');						//to calculate variances/format numbers
$_body_2 = "
<tr $bg_gray>
   <td><font size='0.75' color='707070'><b>&nbsp;&nbsp;EPS variance</b></font></td>
    <td align='right'><font size='0.75'>%</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c_x0><b>$x0</b></font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c_x1><b>$x1</b></font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c_x2><b>$x2</b></font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c_x3><b>$x3</b></font></td>
    <td align='right'><font size='0.75'>%</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c_r0><b>$r0</b></font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c_r1><b>$r1</b></font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c_r2><b>$r2</b></font></td>
     <td align='right'><font size='0.75'>%</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c_x4><b>$x4</b></font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c_x0color=$c_x5><b>$x5</b></font></td>
</tr>
<tr>
   <td><font size='0.75' color='707070'>&nbsp;&nbsp;Wtd shares outst</font></td>
    <td align='right'><font size='0.75'>#</font></td>
    <td align='right'><font size='0.75' color=$color_waso>$waso[0]</font></td>
    <td align='right'><font size='0.75' color=$color_waso>$waso[1]</font></td>
    <td align='right'><font size='0.75' color=$color_waso>$waso[2]</font></td>
    <td align='right'><font size='0.75' color=$color_waso>$waso[3]</font></td>
    <td align='right'><font size='0.75'>#</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_waso>$ttm_waso[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_waso>$ttm_waso[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_waso>$ttm_waso[2]</font></td>
     <td align='right'><font size='0.75'>#</font></td>
    <td align='right'><font size='0.75' color=$color_waso>$waso[4]</font></td>
    <td align='right'><font size='0.75' color=$color_waso>$waso[5]</font></td>
</tr>
";

$_earnings_analysis = $tbl_1.$_body_1.$_body_2.'</table>';

?>