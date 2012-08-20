
<?php                                                   //to index table positions

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($index_txt); unset($x); $x0 = 0; while ($x0 !== false) {
        $x0 = strpos($text_1, '<TABLE', $x0 + 5);
        if ($x0 !== false) {
            $x1 = strpos($text_1, '</TABLE>', $x0);
            if ($x1 !== false) {$index_txt[++$x] = array($x0, $x1);}
        } //end if
    } //loop
} //end if

?>