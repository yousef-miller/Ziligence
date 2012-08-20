
<?php

$php='/mnt/data/myuser/'; include($php.'dbIndex.php');

$x1 = '<font size=4>Signup Now:&nbsp;</font>';
$x2 = '<font size=3>Getting started is simple.</font>';
$_legend = "<b>$x1$x2</b>";
$_w1 = "20"; $_w3 = $_w2 / 2; $_w4 = $_w2 + $_w3;

$_sp5 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

$x1="<input type='radio' name='preference' value='email' default /><font size=3.25 color='707070'>&nbsp;&nbsp;Email</font>";
$x2="<input type='radio' name='preference' value='phone' /><font size=3.25 color='707070'>&nbsp;&nbsp;Phone</font>";
$_radio = $_sp5.$x1.$_sp5.$_sp5.$x2;
$fx0 = (empty($fx0)) ? 'First' : $fx0; $fx1 = (empty($fx1)) ? 'Last' : $fx1;

$body_1 = "
<div align=center>
<table width=100% cellspacing=0>
<form id='register' action='$_aws/myLogin.php?user=true' method='post' accept-charset='UTF-8'>

<tr>
    <td width=$_w1%></td>
    <td nowrap colspan=2 align=left>$_legend</td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%>&nbsp;</td>
    <td colspan=2 $bdr><font size=3 color='707070'><b>Ziligence will always be free.</b></font></td>
    <td width=$_w1%>&nbsp;</td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td nowrap width=$_w3% align=left>&nbsp;</td>
    <td nowrap width=$_w4% align=left>&nbsp;</td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td nowrap width=$_w3% align=left><font size=3 color='707070'>Your Name:</font></td>
    <td nowrap width=$_w4% align=left>
	<input type='text' name='name_1' id='name_1' maxlength='50' size='20' value='$fx0' />
	&nbsp;&nbsp;
	<input type='text' name='name_2' id='name_2' maxlength='50' size='20' value='$fx1' />
	$_need1
    </td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td nowrap width=$_w3% align=left><font size=3 color='707070'>Email:</font></td>
    <td nowrap width=$_w4% align=left><input type='text' name='email' id='email' maxlength='50' size='50' value='$_email'/>$_need11</td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td nowrap width=$_w3% align=left>&nbsp;</td>
    <td nowrap width=$_w4% align=left>&nbsp;</td>
    <td width=$_w1%></td>
</tr>


<tr>
    <td width=$_w1%>&nbsp;</td>
    <td width=$_w3% $bdr><input type='submit' name='submitted' id='submitted' value='Submit'/></td>
    <td width=$_w4% $bdr>&nbsp;</td>
    <td width=$_w1%>&nbsp;</td>
</tr>

</form>
</table>
</div>
";

$register_screen = '<html><title>Free Trial Request</title>'.$ziligence_header.$css_hyperlink.'<br>'.$body_1.$ziligence_footer.'</html>';
sleep(1); echo $register_screen;

?>