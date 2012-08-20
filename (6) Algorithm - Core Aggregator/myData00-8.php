<?php 																	//to create empty string

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'myData00-10.php');											//to create xdlm
    include($php.'myData00-11.php');											//to create hdlm
    
    $myCompanies_r = fopen($myCompanies, "r");
    unset($ary_universe); while ($row = rtrim(fgets($myCompanies_r))) {   				//for rollup strings
        $x = explode(',', $row); 
        $_sic = explode('/', $x[5]); $_sic = trim($_sic[0]);
	$_co = explode('/', $x[1]); $_co = trim($_co[1]);
        $ary_universe[] = array($x[0], $_co, $_sic, $x[5], $x[2], $x[6], $x[4]);		//tkr, co name, sic code, sic full name, exch, address, fye
    } //loop
    fclose($myCompanies_r);
} //end if
			  
?>