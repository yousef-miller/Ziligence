<?php									//to determine fields for jString

if ($jPeriod > 0 && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $jField = $_vFirst + $jPeriod - 1;

    unset($jField_1); unset($jField_2); unset($jField_3);  
    switch (substr($rYq, -2, 2)) {					//for rolling 12 computation
        case "q1": $jField_1 = $jField - 4; $jField_2 = $jField - 3; $jField_3 = $jField - 2; break;
        case "q2": $jField_1 = $jField - 4; $jField_2 = $jField - 3; $jField_3 = $jField - 1; break;
        case "q3": $jField_1 = $jField - 4; $jField_2 = $jField - 2; $jField_3 = $jField - 1; break;
        case "q4": $jField_1 = $jField - 3; $jField_2 = $jField - 2; $jField_3 = $jField - 1; break;
        case "fy": $jField_2 = $jField - 1; break;
    } //end switch
} //end if

?>