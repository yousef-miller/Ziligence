<?php

$text_1 = strtoupper($text_1);
$text_1 = str_replace('STATEMENTS', 'STATEMENT', $text_1);
if (strlen($text_1) < 1000 || $text_1 === false) {if ($process == 'core') {$continue = "true";}}
else {	
    if (strpos($text_1, '</TD>', 0) === false && strpos($text_1, '</TR>', 0) === false) {
	$txt_file = "true"; 
	include($php.'myData02-2.php');						//TXT files to HTML		        
    } //end if
    else {												//for HTML file
	$text_1 = str_replace($ary_illegal, '', $text_1); 	

	$illegal = array('&#39;',' &#40;', '&#41;', '&#44;', '&#45;', '&#46;', '&#039;', '&#040;', '&#041;', '&#044;', '&#045;', '&#046;');
	$legal = array('', '(', ')', ',', '-', '.', '', '(', ')', ',', '-', '.');
	$text_1 = str_replace($illegal, $legal, $text_1);

	$illegal = array('<!-- END TABLE BODY -->', '<!-- BEGIN TABLE BODY -->');
	$legal = array('</TABLE>', '<TABLE>');
	$text_1 = str_replace($illegal, $legal, $text_1);	

	$illegal = array('<!-- XBRL,OP -->', '<!-- XBRL,IN -->', '<!-- XBRL,BS -->', '<!-- XBRL,CF -->');
	$legal = array('XBRLOP', 'XBRLOP', 'XBRLBS', 'XBRLCF');
	$text_1 = str_replace($illegal, $legal, $text_1);

	$illegal = array('&AMP;', '&#38;', '&#038;', '&#160;', '&NBSP;');
	$legal = array('&', '&', '&', chr(32), chr(32), '');
	$text_1 = str_replace($illegal, $legal, $text_1);	    

	$illegal = array('&#45;', '&#045;', '&#8211;', '&#8212;');
	$text_1 = str_replace('>'.$illegal.'<', '0', $text_1);	 

	$text_1 = @preg_replace("/&#(\d+);/i", '', $text_1);								//remove html entities
 	$text_1 = @preg_replace("/<--!#(\w+)-->/i", '', $text_1);							//remove html entities
	$text_1 = @preg_replace('/<A[^>]+NAME[^>]+>/', '', $text_1);						//remove html entities

	$text_1 = str_ireplace('Minnesota Mining and Manufacturing', '3M', $text_1);    		//CORPORATE NAME CHANGES
    } //end else    	
} //end else

$text_1 = @preg_replace('/\s+/', chr(32), $text_1);				//strip whitespace
$text_1 = str_replace('>'.chr(32), '>', $text_1);
$text_2 = @preg_replace('/\s+/', '', $text_1);					//strip whitespace
$text_2 = str_replace('&', '', $text_2);	
				

?>