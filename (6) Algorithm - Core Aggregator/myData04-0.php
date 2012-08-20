<?php

$verify = 'false'; unset($str);

if (empty($ary_label_x)) {$verify = 'true';}
else {
    $t_txt_2 = str_ireplace($thesaurus_search_2, $thesaurus_replace, $t_txt_2);		//thesaurus without spaces
    $t_txt_2 = str_replace($ary_illegal_2, '', $t_txt_2);							//remove numbers & symbols
    $t_txt_2 = strtoupper(preg_replace('/\s+/', '', $t_txt_2));						//strip whitespace & uppercase

    $n = 0; $a = -1; while (++$a < count($ary_label_x)) {
	$str = $ary_label_x[$a][0]; 
	$str = strtoupper(substr($str, strripos($str, chr(95)) + 1));	
	if (strpos($t_txt_2, $str, 0) !== false) {$verify = 'true'; break;} 				//find 1 match to confirm selection
    } //loop
} //end else

?>