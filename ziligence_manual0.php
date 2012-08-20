
<?php

$php='/mnt/data/myuser/'; $_access_override = 'true'; include($php.'dbIndex.php');
$keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
$keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';

include($php.'ziligence_manual1.php');								//to query database
$is_skip = "<input type='checkbox' name='is_skip' value='true' />";
$bs_skip = "<input type='checkbox' name='bs_skip' value='true' />";
$cf_skip = "<input type='checkbox' name='cf_skip' value='true' />";
$_rYq = (!empty($_rYq) && !empty($_tkr)) ? $_rYq : '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$_tkr = (empty($_tkr)) ? '&nbsp;&nbsp;&nbsp;' : $_tkr;

$body_1 = "
<tr>
<td nowrap colspan=1 width=5% align=left><font size=2.75 color='707070'>&nbsp;</font></label></td>
<td colspan=2 width=95% align=left>$_links</br></td>
</tr>
<tr>
<td nowrap colspan=1 width=5% align=left><font size=2.75 color='707070'>Link Override:</font></td>
<td nowrap colspan=1 width=20% align=left>
    <font size=2.75 color='707070'>$_tkr / $_rYq&nbsp;&nbsp;&nbsp;</font>
    <input type='text' name='override' id='override' maxlength='150' size='25' value='$xref_2' />
</td>
<td nowrap colspan=1 width=20% align=left>
    <font size=2.75 color='ff0000'>&nbsp;&nbsp;&nbsp;$_status_string</font>
    <input type='hidden' name='parameters' id='parameters' maxlength='250' size='50' value='$_str' />
</td>
<td colspan=1 width=50% align=left></td>
</tr>
".$month_year."
<tr>
<td nowrap colspan=1 width=5% align=left><label for='istmt'><font size=2.75 color='707070'>$is_skip Income Statement:</font></label></td>
<td colspan=3 width=95% align=left><textarea name='istmt' id='istmt' rows='5' cols = '100' maxlength='1000000' size='100' />$t_tx</textarea></td>
</tr>
<tr>
<td nowrap colspan=1 width=5% align=left><label for='bsht'><font size=2.75 color='707070'>$bs_skip Balance Sheet:</font></label></td>
<td colspan=3 width=95% align=left><textarea name='bsht' id='bsht' rows = '5' cols='100' maxlength='1000000' size='100' />$t_bx</textarea></td>
</tr>
<tr>	
<td nowrap colspan=1 width=5% align=left><label for='cflow'><font size=2.75 color='707070'>$cf_skip Cash Flow Stmt:</font></label></td>
<td colspan=3 width=95% align=left><textarea name='cflow' id='cflow' rows='5' cols='100' maxlength='1000000' size='100' />$t_gx</textarea></td>
</tr>
<tr>
<td nowrap colspan=1 width=5% align=left><label for='combo'><font size=2.75 color='707070'>Combination:</font></label></td>
<td colspan=3 width=95% align=left><textarea name='combo' id='combo' rows='5' cols='100' maxlength='5000000' size='100' /></textarea></td>
</tr>
";

echo '<html>'.$ziligence_header.$css_hyperlink.'<br>'.$div_padding2.$form_1.$body_1.$form_2.'</div></html><br><br><br><br><br>';

?>