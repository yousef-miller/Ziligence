
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $file_x = '/mnt/data2/mydata/'.$_cik.'estimates.txt';
    $file_a = fopen($file_x, "a");
    $c = 0; while (++$c <= count($data_set)) {
        unset($_result); unset($time_array);
        $url = $_zack_base.$data_set[$c][0].'?wsvKey='.$_zack_key.'&select='.$data_set[$c][1].'&ticker='.$_ticker.$_date_range;
        $txt1 = file_get_contents($url);
	$_illegal = array('<'.$_ticker.'>', $_ticker, chr(32), chr(34), chr(44), chr(47), chr(95), '<Results>', '<Item>', 'Itemid=', 'WASO', '10-Q');
        $txt1 = str_replace($_illegal, '', $txt1);

	$_illegal = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
	$txt1 = str_ireplace($_illegal, '', $txt1);

        $find = array($x, $x1, $x2, '<><>', '<>');
        $replace = array('', '', '', chr(44), chr(44));
        $txt1 = str_replace($find, $replace, $txt1);

        $find = array('<1>', '<2>', '<3>', '<4>');
	$replace = array('<>', '<>', '<>', '<>');
        $txt1 = str_replace($find, $replace, $txt1);

        $txt1 = str_replace('<><>', chr(44), $txt1);
	$txt1 = str_replace('<>', chr(44), $txt1);

        $_resultL = $_ticker.','.$data_set[$c][0].',';
	$_result = $_resultL.$_today.$txt1;
        fwrite($file_a, $_result."\r\n");
    } //loop
     fclose($file_a);
} //end if

?>