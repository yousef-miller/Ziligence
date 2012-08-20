<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    $sum = 0; switch($type) {	
    	case "101": if ($proc == 0) {$sum101 = array_sum($ary_101);} elseif ($proc == 2) {$sum101 = $_x;} $sum = $sum101; break;
    	case "103": if ($proc == 0) {$sum103 = array_sum($ary_103);} elseif ($proc == 2) {$sum103 = $_x;} $sum = $sum103; break;
    	case "105": if ($proc == 0) {$sum105 = array_sum($ary_105);} elseif ($proc == 2) {$sum105 = $_x;} $sum = $sum105; break;
    	case "107": if ($proc == 0) {$sum107 = array_sum($ary_107);} elseif ($proc == 2) {$sum107 = $_x;} $sum = $sum107; break;
    	case "109": if ($proc == 0) {$sum109 = array_sum($ary_109);} elseif ($proc == 2) {$sum109 = $_x;} $sum = $sum109; break;
    	case "110": if ($proc != 1) {$sum110 = $sum101 + $sum103 + $sum105 + $sum107 + $sum109;} $sum = $sum110; break;

    	case "111": if ($proc == 0) {$sum111 = array_sum($ary_111);} elseif ($proc == 2) {$sum111 = $_x;} $sum = $sum111; break;    
    	case "113": if ($proc == 0) {$sum113 = array_sum($ary_113);} elseif ($proc == 2) {$sum113 = $_x;} $sum = $sum113; break;
    	case "115": if ($proc == 0) {$sum115 = array_sum($ary_115);} elseif ($proc == 2) {$sum115 = $_x;} $sum = $sum115; break;
    	case "117": if ($proc == 0) {$sum117 = array_sum($ary_117);} elseif ($proc == 2) {$sum117 = $_x;} $sum = $sum117; break;
    	case "118": if ($proc != 1) {$sum118 = $sum112 + $sum111 + $sum113 + $sum115 + $sum117;} $sum = $sum118; break;

    	case "201": if ($proc == 0) {$sum201 = array_sum($ary_201);} elseif ($proc == 2) {$sum201 = $_x;} $sum = $sum201; break;
    	case "203": if ($proc == 0) {$sum203 = array_sum($ary_203);} elseif ($proc == 2) {$sum203 = $_x;} $sum = $sum203; break;
    	case "204": if ($proc != 1) {$sum204 = $sum201 + $sum203;} $sum = $sum204; break;

    	case "205": if ($proc == 0) {$sum205 = array_sum($ary_205);} elseif ($proc == 2) {$sum205 = $_x;} $sum = $sum205; break;
    	case "207": if ($proc == 0) {$sum207 = array_sum($ary_207);}  elseif ($proc == 2) {$sum207 = $_x;} $sum = $sum207; break;
    	case "209": if ($proc == 0) {$sum209 = array_sum($ary_209);} elseif ($proc == 2) {$sum209 = $_x;} $sum = $sum209; break;
    	case "211": if ($proc == 0) {$sum211 = array_sum($ary_211);} elseif ($proc == 2) {$sum211 = $_x;} $sum = $sum211; break;
    	case "212": if ($proc != 1) {$sum212 = $sum205 + $sum207 + $sum209 + $sum211;} $sum = $sum212; break;

    	case "301": if ($proc == 0) {$sum301 = array_sum($ary_301);} elseif ($proc == 2) {$sum301 = $_x;} $sum = $sum301; break;
    	case "303": if ($proc == 0) {$sum303 = array_sum($ary_303);} elseif ($proc == 2) {$sum303 = $_x;} $sum = $sum303; break;
    	case "305": if ($proc == 0) {$sum305 = array_sum($ary_305);} elseif ($proc == 2) {$sum305 = $_x;} $sum = $sum305; break;
    	case "307": if ($proc == 0) {$sum307 = array_sum($ary_307);} elseif ($proc == 2) {$sum307 = $_x;} $sum = $sum307; break;
    	case "309": if ($proc == 0) {$sum309 = array_sum($ary_309);} elseif ($proc == 2) {$sum309 = $_x;} $sum = $sum309; break;
    	case "310": if ($proc != 1) {$sum310 = $sum212 + $sum301 + $sum303 + $sum305 + $sum307 + $sum309;} $sum = $sum310; break;

    	case "401": if ($proc == 0) {$sum401 = array_sum($ary_401);} elseif ($proc == 2) {$sum401 = $_x;} $sum = $sum401; break;

    	case "501": if ($proc == 0) {$sum501 = array_sum($ary_501);} elseif ($proc == 2) {$sum501 = $_x;} $sum = $sum501; break;
    	case "503": if ($proc == 0) {$sum503 = array_sum($ary_503);} elseif ($proc == 2) {$sum503 = $_x;} $sum = $sum503; break;
    	case "505": if ($proc == 0) {$sum505 = array_sum($ary_505);} elseif ($proc == 2) {$sum505 = $_x;} $sum = $sum505; break;
    	case "506": if ($proc != 1) {$sum506 = $sum501 + $sum503 + $sum505;} $sum = $sum506; break;

    	case "701": if ($proc == 0) {$sum701 = array_sum($ary_701);} elseif ($proc == 2) {$sum701 = $_x;} $sum = $sum701; break;
    	case "702": if ($proc != 1) {$sum702 = $sum506 - $sum701;} $sum = $sum702; break;

    	case "703": if ($proc == 0) {$sum703 = array_sum($ary_703);} elseif ($proc == 2) {$sum703 = $_x;} $sum = $sum703; break;
    	case "705": if ($proc == 0) {$sum705 = array_sum($ary_705);} elseif ($proc == 2) {$sum705 = $_x;} $sum = $sum705; break;
    	case "708": if ($proc != 1) {$sum708 = $sum702 - $sum703 - $sum705;} $sum = $sum708; break;

    	case "709": if ($proc == 0) {$sum709 = array_sum($ary_709);} elseif ($proc == 2) {$sum709 = $_x;} $sum = $sum709; break;
    	case "711": if ($proc == 0) {$sum711 = array_sum($ary_711);} elseif ($proc == 2) {$sum711 = $_x;} $sum = $sum711; break;
    	case "712": if ($proc != 1) {$sum712 = $sum708 - $sum709 - $sum711;} $sum = $sum712; break;			

    	case "713": if ($proc == 0) {$sum713 = array_sum($ary_713);} elseif ($proc == 2) {$sum713 = $_x;} $sum = $sum713; break;
    	case "715": if ($proc == 0) {$sum715 = array_sum($ary_715);} elseif ($proc == 2) {$sum715 = $_x;} $sum = $sum715; break;
    	case "717": if ($proc == 0) {$sum717 = array_sum($ary_717);} elseif ($proc == 2) {$sum717 = $_x;} $sum = $sum717; break;    
    	case "718": if ($proc != 1) {$sum718 = $sum712 - $sum713 - $sum715 - $sum717;} $sum = $sum718; break;

    	case "999": $sum = $sum999; break;
    	case "801": $sum = $sum801; break;
    	case "803": $sum = $sum803; break;
    	case "805": $sum = $sum805; break;
    	case "807": $sum = $sum807; break;
    	case "809": $sum = $sum809; break;
    	case "811": $sum = $sum811; break;
    	case "812": $sum = $sum812; break;
    	case "813": $sum = $sum813; break;
    	case "815": $sum = $sum815; break;
    	case "817": $sum = $sum817; break;
    	case "819": $sum = $sum819; break;
    	case "821": $sum = $sum821; break;
    	case "822": $sum = $sum822; break;
    	case "823": $sum = $sum823; break;
    	case "825": $sum = $sum825; break;
    	case "827": $sum = $sum827; break;
    	case "829": $sum = $sum829; break;
    	case "830": $sum = $sum830; break;
    	case "831": $sum = $sum831; break;
    	case "832": $sum = $sum832; break;
    	case "834": $sum = $sum834; break;
    } //end switch
} //end if

?>

