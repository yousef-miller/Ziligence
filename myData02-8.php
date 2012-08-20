
<?php

unset($xr); unset($hr); 

$h3 = stripos($txt2, $exh, 0);
if ($h3 !== false) {
    $x = substr($txt2, 0, $h3);
    $h4 = strripos($x, '<TR', 0);
    $h3 = stripos($txt2, '</TR>', $h3);
    if ($h3 !== false && $h4 !== false) {
        $row = substr($txt2, $h4, $h4 - $h3);
        $h3 = strpos($row, $accession2, 0);
        $h4 = strpos($row, '>', $h3);
        if ($h3 !== false && $h4 !== false) {
            $hr = trim(substr($row, $h3, $h4 - $h3));                                               //for mySQLquery (hyperlink)
	    $xr = $cik.chr(47).hr;										    //for url3 (actual report)                    
            if (stripos($xr, '.HTM', 0) === false) {unset($xr); unset($hr);}
        } //end if
    } //end if
} //end if

?>
