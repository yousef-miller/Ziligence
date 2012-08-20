
<?php								//to explode results

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    switch ($proc) {
	case "0"; $jRow = explode(',', $row); break;					//for myData01.php
	case "1"; $row = implode(',', $jRow); break;			//for ziligence_mapper1-5.php
    } //end switch

    $str = array($jRow[3], $jRow[1], $row, $jRow[4], $jRow[2]);

    switch (substr($jRow[1], 0, 1)) {
	case "1": $ary_label_1[] = $str; $ary_label[] = $str; break;
	case "2": $ary_label_2[] = $str; $ary_label[] = $str; break;
	case "3": $ary_label_3[] = $str; break;	
	default: continue; break;        
    } //end switch
} //end if

?>