

<?php                                                                                   //to search for report titles wth in report body

$break = "false";
$x1 = strpos($xbrl, $text_1, 0);
$x2 = strpos('/'.$xbrl, $text_1, $x1 + 5);
if ($xbrl == "true" && $x1 !== false && $x2 !== false) {						//for xbrl files
    $break = "true";
    $ary_stmt_pos[] = array($type, $x1, $x2); 					//use table_1 positions for xbrl only
} //end if
else {include($php.'myData04-8.php');}                                          //for traditional files

?>
