<?php		//to load alphabet specific arrays with classes

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $myClasses_r = fopen($myClasses, "r");
    while ($row = trim(fgets($myClasses_r))) {	
        if (strlen($row) > 3) {
            $sel = explode(',', $row); 
            $sClass = trim($sel[0]); 
	    $x = trim($sel[1]);
	    $xv_lbl = substr($x, 2);
	    $t_i = $x[0];
	    $bdr_i = ""; 
            include($php.'myData06-6.php');    
        } //end if
    } //loop
    fclose($myClasses_r); 
} //end if

?>