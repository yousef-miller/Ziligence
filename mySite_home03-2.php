<?php

$_segment_1a = "
<tr>
    <td valign='bottom'><font size='0.75'>$link_sales</font></td>
    <td valign='bottom' align='right'><font size='0.75'><b>&nbsp;&nbsp;&nbsp;&nbsp;qtr:</b></font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_q0</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_q1</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_q2</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_q3</font></td>
    <td valign='bottom' align='right'><font size='0.75'><b>&nbsp;&nbsp;&nbsp;&nbsp;ttm:</b></font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_0</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_1</font></td>
    <td valign='bottom' lign='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_2</font></td>
    <td valign='bottom' align='right'><font size='0.75'><b>&nbsp;&nbsp;&nbsp;&nbsp;fye;</b></font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_y0</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_y1</font></td>
</tr>";

include($php.'mySite_home03-3.php');						//to create segmented income restults

$x0 = $net_sales_2[0] + $other_income_2[0];				//Q1:for recurring gross sales
$x1 = $net_sales_2[1] + $other_income_2[1];				//Q2
$x2 = $net_sales_2[2] + $other_income_2[2];				//Q3
$x3 = $net_sales_2[3] + $other_income_2[3];				//Q4
$x4 = $net_sales_2[4] + $other_income_2[4];				//FY-1
$x5 = $net_sales_2[5] + $other_income_2[5];				//FY-2
$x6 = $net_sales_2[6] + $other_income_2[6];				//FY-3
$x7 = $net_sales_2[7] + $other_income_2[7];				//Q5
$x8 = $net_sales_2[8] + $other_income_2[8];				//Q6
$r0 = $ttm_net_sales_2[0] + $ttm_other_income_2[0];			//TTM-1
$r1 = $ttm_net_sales_2[1] + $ttm_other_income_2[1];			//TTM-2
$r2 = $ttm_net_sales_2[2] + $ttm_other_income_2[2];			//TTM-3
$r3 = $ttm_net_sales_2[3] + $ttm_other_income_2[3];			//TTM-4
include($php.'mySite_home03-4.php');						//to format numbers

$_segment_1c = "
<tr$bg_1>
    <td><font size='0.75'>&nbsp;&nbsp;Net sales</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$color_net_sales[0]>$net_sales[0]</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75 color=$color_net_sales[1]'>$net_sales[1]</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$color_net_sales[2]>$net_sales[2]</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$color_net_sales[3]>$net_sales[3]</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$color_ttm_net_sales[0]>$ttm_net_sales[0]</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$color_ttm_net_sales[1]>$ttm_net_sales[1]</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$color_ttm_net_sales[2]>$ttm_net_sales[2]</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$color_net_sales[4]>$net_sales[4]</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$color_net_sales[5]>$net_sales[5]</font></td>
</tr>";

$_segment_2a = "
<tr$bg_2>
    <td><font size='0.75'>Other recurring</font></td>
    <td align='right'><font size='0.75'>&nbsp;</font></td>
    <td align='right'><font size='0.75' color=$color_other_income[0]>$other_income[0]</font></td>
    <td align='right'><font size='0.75' color=$color_other_income[1]>$other_income[1]</font></td>
    <td align='right'><font size='0.75' color=$color_other_income[2]>$other_income[2]</font></td>
    <td align='right'><font size='0.75' color=$color_other_income[3]>$other_income[3]</font></td>
    <td align='right'><font size='0.75'>&nbsp;</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_other_income[0]>$ttm_other_income[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_other_income[1]>$ttm_other_income[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_other_income[2]>$ttm_other_income[2]</font></td>
    <td align='right'><font size='0.75'>&nbsp;</font></td>
    <td align='right'><font size='0.75' color=$color_other_income[4]>$other_income[4]</font></td>
    <td align='right'><font size='0.75' color=$color_other_income[5]>$other_income[5]</font></td>
</tr>
<tr$bg_1>
    <td><font size='0.75'>&nbsp;&nbsp;Recurring gross</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c2_x0>$x0</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color_$c2_x1>$x1</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c2_x2>$x2</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c2_x3>$x3</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c2_r0>$r0</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c2_r1>$r1</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c2_r2>$r2</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c2_x4>$x4</font></td>
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c2_x5>$x5</font></td>
</tr>
";

include($php.'mySite_home03-6.php');						//to calculate variances/format numbers

$_segment_2b = "
<tr$bg_2>
    <td><font size='0.75' color='707070'><b>&nbsp;&nbsp;Recur gross variance</font></td>
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
    <td align='right' style='border-top:1px solid'><font size='0.75' color=$c_x5><b>$x5</b></font></td>
</tr>
";

$_segment_revenues = $tbl_1.$_segment_1a.$_segment_1b.$_segment_1c.$_segment_2a.$_segment_2b.'</table>';

?>