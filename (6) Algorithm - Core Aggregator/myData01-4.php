

<?php														//to create std label files

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {       
    include($php.'myData01-2.php');    								//file paths    
    if (file_exists($file_m) == false || strlen(file_get_contents($file_m)) < 1000 || $process == 'mapping' || $process == 'override') {
        $mData_w = fopen($file_m, "w"); $cData_w = fopen($file_c, "w"); $rData_w = fopen($file_r, "w");
        $mxData_w = fopen($file_mx, "w"); $cxData_w = fopen($file_cx, "w"); $rxData_w = fopen($file_rx, "w");

        $type = 0; while (++$type <= 2) {
	    $ary_x = ($type == 1) ? $class : $ratio;
	    if (empty($class) || empty($ratio)) {include($php.'myData00-13.php'); $ary_x = ($type == 1) ? $class : $ratio;}	//reload if needed
	    if (strlen($xDlm) < 100) {include($php.'myData00-10.php');}			//to build xDlm
    	    $a = -1; while (++$a < count($ary_x)) { 
	        $_id= ($type == 1) ? $ary_x[$a][0].chr(45).$ary_x[$a][1] : $ary_x[$a][1];
	        $blank_str = $_z.$tkr.chr(44).$ary_x[$a][3].chr(44).$ary_x[$a][2].chr(44).$_id.chr(44).$ary_x[$a][0].chr(44).$ary_x[$a][1].$xDlm;    
	        $blank_str_2 =  $_z.$tkr.chr(44).$ary_x[$a][3].chr(44).'%'.chr(44).$_id.chr(44).$ary_x[$a][0].chr(44).$ary_x[$a][1].$xDlm;   
	        if ($type == 2) {
		    fwrite($rData_w, $blank_str."\r\n");			//ratios
		    fwrite($rxData_w, $blank_str."\r\n");			//ratios (rolling 12)
	        } //end if

    	        elseif ($type == 1) { 
            	    fwrite($mData_w, $blank_str."\r\n"); 			//std label
            	    fwrite($cData_w, $blank_str."\r\n"); 			//common size
            	    fwrite($mxData_w, $blank_str."\r\n"); 		//std label (rolling 12)
            	    fwrite($cxData_w, $blank_str."\r\n"); 		//common size (rolling 12)
		    fwrite($rData_w, $blank_str_2."\r\n");		//ratios (for variances) <blank_str_2>
		    fwrite($rxData_w, $blank_str_2."\r\n");		//ratios (rolling 12 / variances) <blank_str_2>
	      	} //end elseif
    	        unset($blank_str); unset($blank_str_2); unset($_id);
    	    } //next a
        } //next type
        fclose($mData_w); fclose($cData_w);  fclose($rData_w);
        unset($ary_x); fclose($mxData_w); fclose($cxData_w);  fclose($rxData_w); 
        include($php.'dbConnect.php'); include($php.'mySQL01-3.php'); mysql_close($connection);		//to load blank files into mySQL
    } //end if
} //end if

?>