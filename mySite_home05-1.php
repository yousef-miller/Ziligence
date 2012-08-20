<?php

$_consensus_sales = "
<tr>
    <td><font size='0.75'><b><u>Sales&nbsp;&nbsp;&nbsp;&nbsp;</u></b></font></td>
    <td align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;</font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;Qtr:Cur</u></font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;Qtr:Nxt</u></font></td>
    <td align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;</font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;&nbsp;FY:Cur</u></font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;&nbsp;FY:Nxt</u></font></td>
</tr>
<tr $bg_gray>
    <td><font size='0.75'>Mean</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_sales_2[0]>$sales[0]</font></td>
    <td align='right'><font size='0.75' color=$color_sales_2[1]>$sales[1]</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_sales_2[2]>$sales[2]</font></td>
    <td align='right'><font size='0.75' color=$color_sales_2[3]>$sales[3]</font></td>
 </tr>
<tr>
    <td><font size='0.75' color='707070'>Median</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_sales[4]>$sales[4]</font></td>
    <td align='right'><font size='0.75' color=$color_sales[5]>$sales[5]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_sales[6]>$sales[6]</font></td>
    <td align='right'><font size='0.75' color=$color_sales[7]>$sales[7]</font></td>
</tr>
";


$_consensus_eps = "
<tr>
    <td><font size='0.75'><b><u>EPS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b></font></td>
    <td align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;</font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;Qtr:Cur</u></font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;Qtr:Nxt</u></font></td>
    <td align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;</font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;&nbsp;FY:Cur</u></font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;&nbsp;FY:Nxt</u></font></td>
    <td align='right'><font size='0.75'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
    <td align='right'><font size='0.75'><u>&nbsp;&nbsp;&nbsp;LTgrowth</u></font></td>
</tr>
<tr $bg_gray>
    <td><font size='0.75' color='707070'>Low</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_eps[0]>$eps[0]</font></td>
    <td align='right'><font size='0.75' color=$color_eps[3]>$eps[3]</font></td>
    <td align='right'><font size='0.75'>$</font></td>
    <td align='right'><font size='0.75' color=$color_eps[6]>$eps[6]</font></td>
    <td align='right'><font size='0.75' color=$color_eps[9]>$eps[9]</font></td>
    <td align='right'><font size='0.75'>%</font></td>
    <td align='right'><font size='0.75' color=$color_eps[12]>$eps[12]</font></td>
 </tr>
</tr>
<tr>
    <td><font size='0.75'>Mean</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_eps_2[1]>$eps[1]</font></td>
    <td align='right'><font size='0.75' color=$color_eps_2[4]>$eps[4]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_eps_2[7]>$eps[7]</font></td>
    <td align='right'><font size='0.75' color=$color_eps_2[10]>$eps[10]</font></td>
   <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_eps_2[13]>$eps[13]</font></td>
 </tr>
<tr $bg_gray>
    <td><font size='0.75' color='707070'>High</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_eps[2]>$eps[2]</font></td>
    <td align='right'><font size='0.75' color=$color_eps[5]>$eps[5]</font></td>
    <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_eps[8]>$eps[8]</font></td>
    <td align='right'><font size='0.75' color=$color_eps[11]>$eps[11]</font></td>
   <td align='right'><font size='0.75'></font></td>
    <td align='right'><font size='0.75' color=$color_eps[14]>$eps[14]</font></td>
";

$_consensus_sales = $tbl_2.$_consensus_sales.'</table>';
$_consensus_eps = $tbl_2.$_consensus_eps.'</table>';
$_consensus_both = $_consensus_sales."<br><br><br>".$_consensus_eps;

?>