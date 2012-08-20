
<?php					//to process overrides

$x = strrpos($override, '/', 0);
if ($x !== false && stripos($override, htm, 0) !== false) {$x1 = 'true'; $override = substr($override, $x);}

$ext = (substr($override, -3, 3) != 'txt') ? '.htm' : '.txt';
$illegal = array('/', 'htm', 'txt', '.');
$override = str_ireplace($illegal, '', $override);
$href = (!empty($override)) ? $acc2.chr(47).$override.$ext : $href;						//for ovveride hyperlink

?>