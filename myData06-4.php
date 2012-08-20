<?php														//to write unique labels to master list

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($sClass); unset($ary_label_x);								//to purge variables

    switch ($t_i) {
        case "1": $ary_label_x = $ary_label_1; break;
        case "2": $ary_label_x = $ary_label_2; break;
        case "3": $ary_label_x = $ary_label_3; break;
    } //end switch

    $new = "true"; if (!empty($ary_label_x)) {	
        $b = -1; do {
	    if ($sxv_3 == $ary_label_x[++$b][0]) {
                $iVal = intval(substr($ary_label_x[$b][1], 1) + 0); 	        
	        if ($out_n2 >= $iVal - 20 && $out_n2 <= $iVal + 20) {$new = "false"; break;} 		
	    } //end if        
        } while ($b < count($ary_label_x)); 
    } //end if

    if ($new == "false") { 
        $x = ($out_n2 < $iVal) ? $iVal : $out_n2;     
    	switch ($t_i) {
    	    case "1": $ary_new_1[$iVal] = array($x); $out_n2 = $x; break;				//position was = is
	    case "2": $ary_new_2[$iVal] = array($x); $out_n2 = $x; break;
	    case "3": $ary_new_3[$iVal] = array($x); $out_n2 = $x; break;
        } //end switch    	
		
        include($php.'myData06-13.php');									//to re-number table positon
        $x = $t_i.$out_x.$out_n2;										//new tbl position

    	if ($t_i == 1) {	
	    $sClass = trim($ary_label_1[$b][3]);								//std label
            $jStr = trim(str_replace($ary_label_1[$b][1], $x, $ary_label_1[$b][2]));	//renumber
	    unset($ary_label_1[$b][1]); unset($ary_label_1[$b][2]); 				//purge for myData06-7
         } //end if

    	elseif ($t_i == 2) {
	    $sClass = trim($ary_label_2[$b][3]);
            $jStr = trim(str_replace($ary_label_2[$b][1], $x, $ary_label_2[$b][2]));
	    unset($ary_label_2[$b][1]); unset($ary_label_2[$b][2]);
        } //end elseif

    	elseif ($t_i == 3) {
	    $sClass = trim($ary_label_3[$b][3]);
            $jStr = trim(str_replace($ary_label_3[$b][1], $x, $ary_label_3[$b][2]));
	    unset($ary_label_3[$b][1]); unset($ary_label_3[$b][2]);
    	} //end elseif  
    } //end if

     elseif ($new == 'true') { 
    	if ($t_i == 3) {$sClass = '_';}
    	else {	
	    unset($sClass); $xClass = $t_i.'_'.$bdr_i.$xv_lbl;
	    include($php.'dbConnect.php'); 									//connect to db
	        include($php.'myData06-5.php');								//to find sClass	
	    mysql_close($connection);										//disconnect from db
	    if (isset($sClass) !== true) {	    
	    	if ($bdr_i != '$' && $xv_sum != '0.0') {$sClass = '#'; include($php.'myData06-3.php');}	
	    	else {$sClass = '###';}	       								//to auto match (if possible)
	    	$bdr_i = ($xv_sum == '0.0')? $bdr_i.'!' : $bdr_i;				//to tag zero rows
	    	if ($sClass[0] != '#') {include($php.'myData06-6.php');} 			//to add new label to array         	
	    } //end if		   
        } //end else  
    
        include($php.'myData06-13.php');									//to re-number table positon 	
        $sxv_2 = $t_i.$out_x.$out_n2.chr(44).$bdr_i.chr(44);	

        if (strlen($xDlm) < 100) {include($php.'myData00-10.php');}			//to build xDlm
        $_serial = chr(rand(1, 26) + 96).chr(rand(1, 26) + 96).chr(rand(1, 26) + 96).chr(rand(1, 26) + 96).chr(rand(1, 26) + 96);
        $sxv_4 = $_serial.'_'.$sxv_4;
        $jStr = $tkr.chr(44).$sxv_2.$sxv_3.chr(44).$sClass.chr(44).$sxv_4.$xDlm;       
    } //end else
} //end if

?>