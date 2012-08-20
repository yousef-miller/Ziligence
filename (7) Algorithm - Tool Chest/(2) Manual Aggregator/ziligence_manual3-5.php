<?php						//to get parameters

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $str = explode('|', $str);
    $pos =trim($str[0]);															//to override on previous result link 
    $tkr = trim($str[1]); $cik = trim($str[2]); $fye = trim($str[3]); 
    $rYq = trim($str[4]); $jPeriod = trim($str[5]); 
    include($php.'myData03-6.php');												//to identify jFields
    $acc1 = trim($str[6]); $acc2 = str_replace('-', '', $acc1);
    $href = trim($str[7]); $href3 = trim($str[8]);
    $stat = 'false'; $_xPeriod = $jPeriod; 
} //end if

?>