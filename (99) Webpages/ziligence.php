
<?php 

$php='/mnt/data/myuser/'; include($php.'dbIndex.php');
$_image = "<iframe src='http://player.vimeo.com/video/45773017?title=0&amp;byline=0&amp;portrait=0' width='450' height='338' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>";
$_sp = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

$body_1 = $css_hyperlink."
<div align=center>
<table width=100% cellspacing=0>
<tr>
    <td nowrap align='center' colspan='6'>
	<font size='7.00'>Detailed Financials & Valuation Data</font>
    </td>
</tr>
<tr>
    <td nowrap align='center' colspan='6'>
	<font size='6.50' color='707070'>A Free & Open Source Site for Financial Research</font>
    </td>
</tr>
<tr><td colspan='6'>&nbsp;</td></tr>
<tr><td valign='top' nowrap align='center' colspan='6'>$_image</td></tr>
<tr><td colspan='6'>&nbsp;</td></tr>
<tr><td nowrap align='center' colspan='3'><font size='5' color='707070'>$learnMore|$requestTrial</font></td></tr>
</table>
</div>
";

$welcome_screen = '<html><title>Ziligence Home</title>'.$button_css.$ziligence_header.$body_1.$ziligence_footer.'</html>';
sleep(1); print $welcome_screen;

?>