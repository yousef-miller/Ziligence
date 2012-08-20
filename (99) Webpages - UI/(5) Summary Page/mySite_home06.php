<?php

$x0 = $cash[0] + $mktbl_sec[0];							//to sum components for working capital
$x1 = $ttm_cash[0] + $ttm_mktbl_sec[0];
$x2 = $ttm_cash[1] + $ttm_mktbl_sec[1];
$x3 = $ttm_cash[2] + $ttm_mktbl_sec[2];
include($php.'mySite_home03-4.php');						//to format values
$wkg_cap = array($x0, $x1, $x2, $x3);
$color_wkg_cap = $color;

$x0 = $cur_notes_pybl[0] + $notes_pybl[0];					//to sum components for working capital
$x1 = $ttm_cur_notes_pybl[0] + $ttm_notes_pybl[0];
$x2 = $ttm_cur_notes_pybl[1] + $ttm_notes_pybl[1];
$x3 = $ttm_cur_notes_pybl[2] + $ttm_notes_pybl[2];
include($php.'mySite_home03-4.php');						//to format values
$note_pay = array($x0, $x1, $x2, $x3);
$color_note_pay = $color;

$_body_1 = "
<tr>
    <td valign='bottom' nowrap><font size='0.75'>$link_ratios&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
    <td valign='bottom' align='right'><font size='0.75'><b>qtr:</b></font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_q0</font></td>
    <td valign='bottom' align='right'><font size='0.75'><b>&nbsp;&nbsp;ttm:</b></font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_0</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_1</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_2</font></td>
</tr>
<tr $bg_gray>
   <td><font size='0.75'>Pretax int cov</font></td>
    <td align='right'><font size='0.75'>x</font></td>
    <td align='right'><font size='0.75' color=$color_int_cov_ratio[0]>$int_cov_ratio[0]</font></td>
    <td align='right'><font size='0.75'>x</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_int_cov_ratio[0]>$ttm_int_cov_ratio[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_int_cov_ratio[1]>$ttm_int_cov_ratio[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_int_cov_ratio[2]>$ttm_int_cov_ratio[2]</font></td>
</tr>
<tr>
   <td><font size='0.75'>FFO / debt</font></td>
    <td align='right'><font size='0.75'>%</font></td>
    <td align='right'><font size='0.75' color=$color_ffo_debt_ratio[0]>$ffo_debt_ratio[0]</font></td>
    <td align='right'><font size='0.75'>%</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_ffo_debt_ratio[0]>$ttm_ffo_debt_ratio[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_ffo_debt_ratio[1]>$ttm_ffo_debt_ratio[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_ffo_debt_ratio[2]>$ttm_ffo_debt_ratio[2]</font></td>
</tr>
<tr $bg_gray>
   <td><font size='0.75'>FCF / debt</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_fcf_debt_ratio[0]>$fcf_debt_ratio[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_fcf_debt_ratio[0]>$ttm_fcf_debt_ratio[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_fcf_debt_ratio[1]>$ttm_fcf_debt_ratio[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_fcf_debt_ratio[2]>$ttm_fcf_debt_ratio[2]</font></td>
</tr>
<tr>
   <td><font size='0.75'>Return on equity</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_roe[0]>$roe[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_roe[0]>$ttm_roe[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_roe[1]>$ttm_roe[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_roe[2]>$ttm_roe[2]</font></td>
</tr>
<tr $bg_gray>
   <td><font size='0.75'>Current ratio</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_cur_ratio[0]>$cur_ratio[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_cur_ratio[0]>$ttm_cur_ratio[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_cur_ratio[1]>$ttm_cur_ratio[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_cur_ratio[2]>$ttm_cur_ratio[2]</font></td>
</tr>
";

$_body_2 = "
<tr>
    <td valign='bottom' nowrap><font size='0.75'>$link_balsht_items&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
    <td valign='bottom' align='right'><font size='0.75'><b>qtr:</b></font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_hLink_q0</font></td>
    <td valign='bottom' align='right'><font size='0.75'><b>&nbsp;&nbsp;ttm:</b></font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_0</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_1</font></td>
    <td valign='bottom' align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;$_ttmField_2</font></td>
</tr>
<tr $bg_gray>
    <td><font size='0.75'>Working capital</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_wkg_cap[0]>$wkg_cap[0]</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_wkg_cap[1]>$wkg_cap[1]</font></td>
    <td align='right'><font size='0.75' color=$color_wkg_cap[2]>$wkg_cap[2]</font></td>
    <td align='right'><font size='0.75' color=$color_wkg_cap[3]>$wkg_cap[3]</font></td>
</tr>
<tr>
    <td><font size='0.75'>A/Receivable</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_accts_recvbl[0]>$accts_recvbl[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_accts_recvbl[0]>$ttm_accts_recvbl[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_accts_recvbl[1]>$ttm_accts_recvbl[1]</font></td>
    <td align='right'><font size='0.75' color=$color_accts_recvbl[2]>$ttm_accts_recvbl[2]</font></td>
 </tr>
<tr $bg_gray>
    <td><font size='0.75'>Inventories</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_inventories[0]>$inventories[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_inventories[0]>$ttm_inventories[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_inventories[1]>$ttm_inventories[1]</font></td>
    <td align='right'><font size='0.75 ' color=$color_ttm_inventories[2]>$ttm_inventories[2]</font></td>
 </tr>
<tr>
    <td><font size='0.75'>Total assets</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_total_assets[0]>$total_assets[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_total_assets[0]>$ttm_total_assets[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_total_assets[1]>$ttm_total_assets[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_total_assets[2]>$ttm_total_assets[2]</font></td>
 </tr>
<tr $bg_gray>
    <td><font size='0.75'>A/Payable</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_accts_pybl[0]>$accts_pybl[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_accts_pybl[0]>$ttm_accts_pybl[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_accts_pybl[1]>$ttm_accts_pybl[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_accts_pybl[2]>$ttm_accts_pybl[2]</font></td>
</tr>
<tr>
    <td><font size='0.75'>N/Payable</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_note_pay[0]>$note_pay[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_note_pay[1]>$note_pay[1]</font></td>
    <td align='right'><font size='0.75' color=$color_note_pay[2]>$note_pay[2]</font></td>
    <td align='right'><font size='0.75' color=$color_note_pay[3]>$note_pay[3]</font></td>
</tr>
<tr $bg_gray>
   <td><font size='0.75'>Total liabilities</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_total_liab[0]>$total_liab[0]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_ttm_total_liab[0]>$ttm_total_liab[0]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_total_liab[1]>$ttm_total_liab[1]</font></td>
    <td align='right'><font size='0.75' color=$color_ttm_total_liab[2]>$ttm_total_liab[2]</font></td>
</tr>
";

$_body_1 = $tbl_1.$_body_1.'</table>';
$_body_2 = $tbl_1.$_body_2.'</table>';
$_credit_position = $_body_1."<br>".$_body_2;

?>