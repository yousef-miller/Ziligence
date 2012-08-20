<?php						//to determine rY for stock price queries

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $x1 = substr($rYq, -1, 1);
    $x1 = ($x1 == 'y') ? "4" : $x1;
    $qtr_str = $ary_qtr[intval($fye)];
    $qtr_str = explode(chr(46), $qtr_str);
    $qtr_str = chr(46).$qtr_str[4].chr(46).$qtr_str[3].chr(46).$qtr_str[2].chr(46).$qtr_str[1];		//to reverse order
    $qtr_str = explode(chr(46), $qtr_str);
    $rY = substr($rYq, 0, 4).$qtr_str[$x1];						//for stock price queries
} //end if

?>