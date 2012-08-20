<?php			//to convert text files to html format

$x = ($print_txt_file == "true") ? "\r\n" : "";
$chr = '_/TD__/TR_'.$x.'_TR__TD_';
$illegal = array(chr(10), chr(9));
$legal = array($chr, '_/TD__TD_');
$text_1 = str_replace($illegal, $legal, $text_1);

$illegal = array('<TABLE>', '</TABLE>', '<PAGE>', '</PAGE>', '<', '>', '$', ';', '&', chr(34), chr(39));
$text_1 = str_replace($illegal, '', $text_1);

$illegal = array('_TD_', '_/TD_', '_TR_', '_/TR_');
$legal = array('<TD>', '</TD>', '<TR>', '</TR>');
$text_1 = str_replace($illegal, $legal, $text_1);

do {    									
    $text_1 = str_replace(chr(32).chr(32).chr(32), "___", $text_1); 	//remove 3x spacing
    $text_1 = str_replace("___", "__", $text_1); 
} while (strpos($text_1, '___',  0) !== false);

$illegal = array('<TR><TD>__', '__</TD></TR>');			//add column tags
$legal = array('<TR><TD>', '</TD></TR>');
$text_1 = str_replace($illegal, $legal, $text_1);

$illegal = array('__', '_');
$legal = array('</TD><TD>', chr(32));
$text_1 = str_replace($illegal, $legal, $text_1);

$tbl_pos = 0; $a = 0; while (++$a <= 3) {
    switch ($a) {
	case "1": $ary_x = $ary_is; break;
	case "2": $ary_x = $ary_bs; break;
	case "3": $ary_x = $ary_cf; break;
    } //end switch

    $b = -1;  while (++$b < count($ary_x)) {  	
	$_title = $ary_x[$b][0].chr(32).$ary_x[$b][1];		     
   	if (strpos($text_1, $_title, 0) !== false) {
	    $x = 0; $c = 0; while (++$c < 99) {
	        $x = strpos($text_1, $_title, $x + 20);
		if ($x === false) {break;}
		else {	  
		    $xL = substr($text_1, 0, $x-1);
		    $xR = substr($text_1, $x);
		    $text_1 = $xL.'</TABLE>'.$xR;				//to tag before title
      
	    	    $x1 = strpos($text_1, '</TD></TR>', $x) + 10;
	  	    $xL = substr($text_1, 0, $x1); 
	  	    $xR = substr($text_1, $x1);
		    $text_1 = $xL.'<TABLE>'.$xR;
		    $tbl_pos = ($x1 > $tbl_pos) ? $x1 : $tbl_pos;
		} //end else
    	    } //loop
        } //end if       
    } //loop
} //next a

if ($tbl_pos > 0) {									//to place end table tag after final table
    $x = $tbl_pos; 
    $a = 0; while (++$a < 99) {
        $x1 = strpos($text_1, '<TR><TD>', $x1 + 8);
	$x2 = strpos($text_1, '</TD></TR>', $x1) - 1;
	$row = substr($text_1, $x1, $x2 - $x1);
	if ($a > 20) {
	    if (strpos($row, '<TD></TD>', 0) === false && $x2 - $x1 > 50) {
	        $xL = substr($text_1, 0, $x1 - 8);
	        $xR = substr($text_1, $x1 - 8);
	        $text_1 = $xL.'</TABLE>'.$xR;
	        break;
	    } //end if
	} //end if
    } //loop
} //end if

?>