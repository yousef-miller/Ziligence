<?php							//to clean up table selections

$t_tx = $istmt; $t_bx = $bsht; $t_gx = $cflow;
include($php.'myCore00-2.php');													//verification script

$t_i = 0; while (++$t_i <= 3) {
    switch ($t_i) {
    	case "1": $text_1 = $t_tx; $ary_label_x = $ary_label_1; break;
    	case "2": $text_1 = $t_bx; $ary_label_x = $ary_label_2; break;
   	case "3": $text_1 = $t_gx; $ary_label_x = $ary_label_3; break;
    } //end switch

    if (strlen($text_1) > 500) {
        include($php.'myData02-6.php');												//to clean up selection
  	include($php.'ziligence_manual3-1.php');										//to clean up selection	
	$text_1 = str_replace(chr(44), '', $text_1);

        switch ($t_i) {
    	    case "1": $t_tx = $text_1; $m_tx = "true"; break;
    	    case "2": $t_bx = $text_1; $m_bx = "true"; break;
   	    case "3": $t_gx = $text_1; $m_gx = "true"; break;
        } //end switch
        unset($text_1); unset($text_2); unset($t_txt_2); unset($ary_label_x);					//purge variables
    } //end if
} //loop

if (!empty($t_tx) && !empty($t_bx)) {$_stat = 'true';}

?>