<?php								//to query database

include($php.'ziligence_manual1-1.php');				//to query myFails table
include($php.'ziligence_manual1-5.php');				//to build parameters
$url = $url_base.$_cik.'/';
$_link2 = (strlen($row[8]) < 10) ? '' : '<a href='.$url.$row[8].' target=_blank>Press Release</a>';
$edgar = $url.$_acc1.chr(47).$_acc2.'-index.htm';
$_link3 = '<a href='.$edgar.' target=_blank>Edgar Results</a>';

$txt2= file_get_contents($edgar);									//not in uppercase
$exh = '>EX-13'; include($php.'myData02-8.php'); $xref_2 = $xr;		//to get dex 13 path
if (empty($xref_2)) {$exh = '>EX-19'; include($php.'myData02-8.php'); $xref_2 = $xr;}		//to get exhibit 19 path
if (empty($xref_2)) {
    $h1= strpos($txt2, $_acc2, 0);
    $h2 = strpos($txt2, '>', $h1);
    if ($h1 !== false && $h2 !== false) {
        $_x = trim(substr($txt2, $h1, $h2 - $h1));                                            //for url3 (actual report)
        $xref_2 = substr($_x, strrpos($x, chr(47), 0)+1);                                 //for mySQLquery (hyperlink)
    } //end if
} //end if
$illegal = array($_acc2, chr(34));
$xref_2 = str_replace($illegal, '', $xref_2);
$xref_2 = substr($xref_2, strrpos($xref_2, chr(47), 0));
$_link1 = '<a href='.$url.$_acc2.chr(47).$xref_2.' target=_blank>SEC Filing</a>';

$sp = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$_links = $_link1.$sp.$_link2.$sp.$sp.$sp.$_link3."<br>";

$parameters = preg_replace('/\s+/', '',  $_str);
$_path = $aws.'ziligence_manual3.php?edit='.$_editor_stat; include($php.'dbIndex00.php');

if ($_rYq == 'X' || $_jPeriod == 'X' || $_jPeriod == '0' || substr($_rYq, -2, 2) == 'xx' ) {
    include($php.'myData02-9.php');									//to get report period from Edgar search
    $month = ($month == "0") ? '' : $month;
    $_year = ($_year == "0") ? '' : $_year;

    $month_year = "
    <tr>
    <td nowrap colspan=1 width=5% align=left>&nbsp;</td>
    <td colspan=1 width=20% align=left>&nbsp;</td>
    <td nowrap colspan=1 width=5% align=right><font size=2.75 color='707070'>Month / Year:</font></td>
    <td colspan=1 width=70% align=left>
        <input type='text' name='month' id='month' maxlength='2' size='5' style='background-color: #FFFF00;' value='$month' />
        &nbsp;&nbsp;
        <input type='text' name='year' id='year' maxlength='4' size='10' style='background-color: #FFFF00;' value='$_year' />
    </td>
    </tr>
    ";
} //end if
  
?>