<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($data_set); $_date_range = ''; $_today = date("Ymd"); 
    $x = array('Q1AvgSlsEst','Q2AvgSlsEst','F1AvgSlsEst','F2AvgSlsEst','Q1MedSlsEst','Q2MedSlsEst','F1MedSlsEst','F2MedSlsEst');
    $unit_sales = "$x[0],$x[1],$x[2],$x[3],$x[4],$x[5],$x[6],$x[7]";
    $x1 = array('QR1LoEPSEst','QR1AvgEPSEst','QR1HiEPSEst','QR2LoEPSEst','QR2AvgEPSEst','QR2HiEPSEst','FR1LoEPSEst');
    $x2 = array('FR1AvgEPSEst','FR1HiEPSEst','FR2LoEPSEst','FR2AvgEPSEst','FR2HiEPSEst','LTGLoEst','LTGAvgEst','LTGHiEst');
    $unit_eps = "$x1[0],$x1[1],$x1[2],$x1[3],$x1[4],$x1[5],$x1[6],$x2[0],$x2[1],$x2[2],$x2[3],$x2[4],$x2[5],$x2[6],$x2[7]";
    $data_set[1] = array('SC3_Sales_Estimates3', $unit_sales);
    $data_set[2] = array('ZN1_Earnings_Estimates', $unit_eps);
} //end if

?>