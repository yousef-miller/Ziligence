<?php 

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $_selected = ' selected="selected" default';							//default selection parameter

    foreach ($_GET[stmt] as $x) {$stmt_value = $stmt_value.$x.chr(44);}
    $stmt_value = (isset($stmt_value)) ? $stmt_value : '1,';
    $stmt_1 = (strpos($stmt_value, '1,', 0) !== false) ? $_selected : '';
    $stmt_2 = (strpos($stmt_value, '2,', 0) !== false) ? $_selected : '';
    $stmt_3 = (strpos($stmt_value, '3,', 0) !== false) ? $_selected : '';   

    $x = (isset($_GET[type])) ? $_GET[type] : "1";
    $type_1 = ($x == 1) ? $_selected : '';
    $type_2 = ($x == 2) ? $_selected : '';
    $type_3 = ($x == 3) ? $_selected : '';
    $type_4 = ($x == 4) ? $_selected : '';
    
    foreach ($_GET[period] as $x) {$period_value = $period_value.$x.chr(44);}
    $period_value = (isset($period_value)) ? $period_value : '2011,2010,';  
    $_2012 = (strpos($period_value, '2012,', 0) !== false) ?  : '';
    $_2011 = (strpos($period_value, '2011,', 0) !== false) ? $_selected : '';
    $_2010 = (strpos($period_value, '2010,', 0) !== false) ? $_selected : '';
    $_2009 = (strpos($period_value, '2009,', 0) !== false) ? $_selected : '';
    $_2008 = (strpos($period_value, '2008,', 0) !== false) ? $_selected : '';
    $_2007 = (strpos($period_value, '2007,', 0) !== false) ? $_selected : '';

    foreach ($_GET[qtr] as $x) {$qtr_value = $qtr_value.$x.chr(44);}
    $qtr_value = (isset($qtr_value)) ? $qtr_value : 'FY,';
    $Q_0 = (strpos($qtr_value, 'FY,', 0) !== false) ? $_selected : '';
    $Q_1 = (strpos($qtr_value, 'Q1,', 0) !== false) ? $_selected : '';
    $Q_2 = (strpos($qtr_value, 'Q2,', 0) !== false) ? $_selected : '';
    $Q_3 = (strpos($qtr_value, 'Q3,', 0) !== false) ? $_selected : '';  
    $Q_4 = (strpos($qtr_value, 'Q4,', 0) !== false) ? $_selected : ''; 
    $Q_5 = (strpos($qtr_value, 'YE,', 0) !== false) ? $_selected : '';

    $x = (!empty($_GET[option])) ? $_GET[option] : "1";
    $option_1 = ($x == 1) ? $_selected : '';
    $option_2 = ($x == 2) ? $_selected : '';       
} //end if 

?>