
<?php

$php='/mnt/data/myuser/'; include($php.'dbIndex.php');

$_w1 = "20"; $_w3 = $_w2 / 2; $_w4 = $_w2 + $_w3;
$fx0 = (!empty($fx0)) ? $fx0 : 'First'; $fx1 = (!empty($fx1)) ? $fx1 : 'Last';

$body_1 = "
<div align=center>
<table width=100% cellspacing=0>
<form id='register' action='$_aws/ziligence6_contact.php' method='post' accept-charset='UTF-8'>

<tr>
    <td width=$_w1%>&nbsp;</td>
    <td width=$_w3%>Contact Name:</td>
    <td nowrap width=$_w4% align=left>
	<input type='text' name='name_1' id='name_1' maxlength='50' size='20' value='$fx0' />
	&nbsp;&nbsp;
	<input type='text' name='name_2' id='name_2' maxlength='50' size='20' value='$fx1' />
	$_need1
    </td>
    <td width=$_w1%>&nbsp;</td>
</tr>

<tr>
    <td width=$_w1%>&nbsp;</td>
    <td width=$_w3%>Contact Email:</td>
    <td nowrap width=$_w4% align=left>
	<input type='text' name='email' id='email' maxlength='50' size='50' value='$fx2' />
	$_need2
    </td>
    <td width=$_w1%>&nbsp;</td>
</tr>

<tr>
    <td width=$_w1%>&nbsp;</td>
    <td colspan=2 align=left>
	<textarea name='message' id='message' rows='10' cols = '100' maxlength='500' size='100' />$fx3</textarea>
    </td>
    <td width=$_w1%>&nbsp;</td>
</tr>

<tr>
     <td width=$_w1%></td>
    <td nowrap width=$_w3 align=left><input type='submit' name='submitted' id='submitted' value='     Send     '/>
    <td nowrap width=$_w4% align=left></td>
    <td width=$_w1%></td>
</tr>

</form>
</table>
</div><br>
";

$register_screen = '<html><title>Ziligence Contact Form</title>'.$ziligence_header.$css_hyperlink.'<br>'.$body_1.$ziligence_footer.'</html>';
sleep(1); echo $register_screen;

?>