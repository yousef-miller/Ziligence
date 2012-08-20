<?php

if (!empty($accession1) && !empty($accession2)) {
    $url2 = $url_base.$cik.chr(47).$accession2.chr(47).$accession1.'-index.htm'; 					//Base URL (SEC)
    $txt2 = @file_get_contents($url2);  
    $txt2 = str_replace(chr(34), "", $txt2);        
} //end if

?>