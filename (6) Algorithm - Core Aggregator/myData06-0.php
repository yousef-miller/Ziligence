<?php		//to parse column selection

unset($col_sel); unset($p_col);
$_td = strpos($row_sel, '</TD', $_td + 2);

if ($_td !== false) {
    if ($txt_file == "true") {$p_col = strpos($row_sel, '<TD', $_last);}
    else {
        $x1 = strpos($row_sel, '<DIV', $_last); 
        $x2 = strpos($row_sel, '<FONT', $_last); 
        if ($x1 !== false || $x2 !== false) {$p_col = ($x2 > $x1) ? $x2 : $x1;}
	if ($p_col !== false) {$p_col = ($p_col < $_td) ? $p_col : '';}

        if (empty($p_col)) {$p_col = strpos($row_sel, '<P', $_last);}
	if ($p_col !== false) {$p_col = ($p_col < $_td) ? $p_col : '';}

        if (empty($p_col)) {$p_col = strpos($row_sel, '<TD', $_last);}
	if ($p_col !== false) {$p_col = ($p_col < $_td) ? $p_col : '';}
    } //end if
} //end if

if ($p_col !== false && $_td !== false) {
    $col_sel = trim(substr($row_sel, $p_col, $_td - $p_col + 1));
    if (!empty($col_sel)) {include($php.'myData06-1.php');}
} //end if

$_last = $_td;							//to pass posititon variable for next iteration

?>