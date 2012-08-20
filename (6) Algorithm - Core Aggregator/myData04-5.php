
<?php                                           //to convert from txt4 (no spaces) back to txt3

$break = "true";
$n = substr_count($text_2, '</TABLE', 0, $x1) + 1;
$x1 = $index_txt[$n][0];
$x2 = $index_txt[$n][1];
if ($x1 > strpos($text_1, 'X9Z8KX9Z', 0)) {
    $t = substr($text_1, 0, $x1);
    $n = substr_count($t, 'X9ZNEWHTMLX9Z');
    if ($n > 0) {$href3 = $ary_href3[$n - 1][0];}                               //hyperlink address to actual 8-K document
} //end if

$ary_stmt_pos[] = array($type.$_c, $x1, $x2);

$x2_last =  strpos($text_2, '</TABLE>', $x);                  			  						//to ferry values for continue tables
$href = ($x1 > strpos($text_1, 'X9ZDEX13X9Z', 0) && !empty($href_2)) ? $href_2 : $href;		//hyperlink for EX-13 files	
$href = ($x1 > strpos($text_1, 'X9ZEX19X9Z', 0) && !empty($href_2x)) ? $href_2x : $href;		//hyperlink for EX-13 files
$href = ($x1 > strpos($text_1, 'X9Z8KX9Z', 0) && !empty($href3)) ? $href3 : $href;				//hyperlink for 8-K files

?>
