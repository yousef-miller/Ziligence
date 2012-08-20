
<?php

unset($_segment_1b);
$a = -1; while (++$a < count($ary_net_sales)) {
    $x0 = $ary_net_sales_2[$a][1];				//rolling 12 calculations (ary_net_sales_2 mirrors ary_net_sales)
    $x1 = $ary_net_sales_2[$a][2];
    $x2 = $ary_net_sales_2[$a][3];
    $x3 = $ary_net_sales_2[$a][4];
    $x4 = $ary_net_sales_2[$a][5];
    $x5 = $ary_net_sales_2[$a][6];
    $r0 = $x0 + $x1 + $x2 + $x3;
    $r1 = $x1 + $x2 + $x3 + $x4;
    $r2 = $x2 + $x3 + $x4 + $x5;
    include($php.'mySite_home03-4.php');		//to format numbers
    
    $bg_x = ($a & 1) ? "": chr(32).$bg_gray;
    $d = ($a == 0) ? '$' : "";
    $_body = "
    	<td><font size='0.75'>".$ary_net_sales[$a][0]."</font></td>
    	<td align='right'><font size='0.75'>$d</font></td>
    	<td align='right''><font size='0.75' color=$c_x0>".$x0."</font></td>
    	<td align='right'><font size='0.75' color=$c_x1>".$x1."</font></td>
    	<td align='right'><font size='0.75' color=$c_x2>".$x2."</font></td>
    	<td align='right''><font size='0.75' color=$c_x3>".$x3."</font></td>
    	<td align='right'><font size='0.75'>$d</font></td>
    	<td align='right'><font size='0.75' color=$c_r0>".$r0."</font></td>
    	<td align='right'><font size='0.75' color=$c_r1>".$r1."</font></td>
    	<td align='right'><font size='0.75' color=$c_r2>".$r2."</font></td>
    	<td align='right'><font size='0.75'>$d</font></td>
    	<td align='right'><font size='0.75' color=$c_x4>".$x4."</font></td>
    	<td align='right'><font size='0.75' color=$c_x5>".$x5."</font></td>
    ";

    $_segment_1b = $_segment_1b."<tr$bg_x>".$_body."</tr>";      
} //loop

$bg_1 = ($a & 1) ? "" : chr(32).$bg_gray;
$bg_2 = ($a & 1) ? chr(32).$bg_gray : "";

?>
