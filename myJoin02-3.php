<?php

$rValue = 0; switch ($type) {
    case 'Gross margin': $rValue = round($sum702 / $sum506, 2) * 100; $x13 = $rValue; break;			//GROSS PROFIT / GROSS SALES
    case 'Operating margin': $rValue = round($sum712 / $sum506, 2) * 100; $x14 = $rValue; break;		//EBIT / GROSS SALES
    case 'Profit margin': $rValue = round($sum718 / $sum506, 2) * 100; $x15 = $rValue; break;			//NET INCOME / GROSS SALES
    case 'Return on investment': $rValue = round($sum718 / $sum118, 2) * 100; $x16 = $rValue; break;	//NET INCOME / TOTAL ASSETS
    case 'Return on assets': $rValue = round($sum718 / $sum118, 2) * 100; $x17 = $rValue; break;		//NET INCOME / TOTAL ASSETS
    case 'Return on equity': $rValue = round($sum718 / ($sum310 - $sum212), 2) * 100; $x18 = $rValue; break;	//NI / TOTAL CAPITAL
    case 'Return on net assets': $rValue = round($sum718 / ($sum113 + $sum101 + $sum103), 2) * 100; $x19 = $rValue; break;  //NI / (PP&E + $$)
    case 'Return on common equity': $rValue = round($sum718 / $sum313, 2) * 100; $x20 = $rValue; break;
    //case 'Cash flow return on investment': $rValue = 0; $x21 = $rValue; break;
    case 'Efficiency ratio': $rValue = round(($sum702 - $sum712) / $sum506, 2) * 100; break;

    case 'Current ratio': $rValue = round($sum110 / $sum204, 2) * 100; $x22 = $rValue; break;
    case 'Acid test ratio': $rValue = round(($sum101 + $sum103 + $sum105) / $sum204, 2) * 100; $x23 = $rValue; break;
    case 'Cash ratio': $rValue = round(($sum101 + $sum103) / $sum204, 2) * 100; $x24 = $rValue; break;
    case 'Operation ratio': $rValue = 0; $x25 = $rValue; break;

    case 'Wtd avg shares outst': 
	$rValue = ($x == 1) ? $cur_wtd_shares : $ttm_wtd_shares; 
	$x26 = $rValue; 
	$shares_total = $rValue *  pow(10, 6);
    break;
    case 'Earnings per share': $rValue = round($sum718 / ($x26 * pow(10, 6)), 2); $x27 = $rValue; break;
    case 'Price / sales': 
	$recur = ($sum501 + $sum503) / $shares_total;				//recurring sales per share
	$rValue = round($_stockPrice[1] / $recur, 2); 
	$x28 = $rValue; 
    break;
    case 'EV / Ebitda': 
	$rValue = ($x == 1) ? $cur_wtd_shares : $ttm_wtd_shares; 
	$mktcap = $_stockPrice[1] * $rValue;
	$EVal = $mktcap + $sum203 + $sum205 + $sum301+$sum401 - $sum101 - $sum103;
	$rValue = round($EVal / $sum708, 2); 
	$x29 = $rValue; 
    break;
    case 'EV / sales': $rValue = round($EVal / $recur, 2); $x30 = $rValue; break;
    case 'P/E': $rValue = round($_stockPrice[1] / $x27, 2); $x31 = $rValue; break;
    case 'PEG': 
	$_grwth = (($x27 - $_ttm_priorEPS[0]) / $_ttm_priorEPS[0]) * 100;
	$rValue = round($x31 / $_grwth, 2);
	$x32 = $rValue;
    break;
    case 'P/CF': 
	$rValue = ($x == 1) ? $cur_wtd_shares : $ttm_wtd_shares; 
	$oper_cf = $sum712 + $sum709 - $sum715;
	$oper_cf_persh = $oper_cf / $rValue;
	$rValue = round($_stockPrice[1] / $oper_cf, 2); 
	$x33 = $rValue; 
    break;
    case 'P/Bk': 
	$rValue = ($x == 1) ? $cur_wtd_shares : $ttm_wtd_shares; 
	$BVal = ($sum118 - $sum117 - $sum212) / $rValue;
	$rValue = round($_stockPrice[1] / $BVal, 2); 
	$x34 = $rValue; 
    break;
    case 'Pretax interest coversage': 
	$rValue = round($sum712 / $sum713, 2); 
	$x35 = $rValue; 
    break;
    case 'FCF / debt': 
	$rValue = round($oper_cf / $sum713, 2); 
	$x36 = $rValue; 
    break;
    case 'FFO / debt': 
	$recur_net_income = $sum718 + $sum717 - $sum505 + $sum709 + $sum711;
	$deferred_tax_1 = $sum111 - $priorDeferredTax[0];
	$deferred_tax_2 = $sum207 - $priorDeferredTax[1];
	$ffo = ($deferred_tax_1 > 0) ? $recur_net_income - $deferred_tax_1 : $recur_net_income + $deferred_tax_1;
	$ffo = ($deferred_tax_2 < 0) ? $ffo - $deferred_tax_2 : $ffo + $deferred_tax_2;
	$rValue = round($ffo / $sum713, 2);
	$x36 = $rValue; 
    break;
    default: $rValue = 0; break;
} //end switch

unset($attribute); include($php.'myData00-9.php');									//to refresh attributes
if ($x == 1) {$attribute_1 = $attribute;} elseif ($x == 2) {$attribute_2 = $attribute;}		//to ferry values for tollup strings

?>