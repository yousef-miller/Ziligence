<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    unset($ary_illegal); unset($ary_illegal_2); unset($ary_illegal_alpha); unset($ary_skip);
    unset($ary_is); unset($ary_bs); unset($ary_cf); unset($ary_cover); unset($ary_period);
    unset($class); unset($ratio); unset($ary_thesaurus); unset($thesaurus_search); unset($thesaurus_replace);

    $ary_illegal = array(
    '<B>','</B>','<I>','</I>','<U>','<SMALL>','</SMALL>','<A>','</A>','<C>','<S>','<BR>','<STRONG>','</STRONG>',
    chr(0),chr(1),chr(2),chr(3),chr(4),chr(5),chr(6),chr(7),chr(8),chr(9),chr(10),chr(11),chr(12),chr(13),
    chr(14),chr(15),chr(16),chr(17),chr(18),chr(19),chr(20),chr(21),chr(22),chr(23),chr(24),chr(25),chr(26),
    chr(27),chr(28),chr(29),chr(30),chr(31),chr(34),chr(39),'<CAPTION>','<PAGE>','$');

    $ary_illegal_2 = array(chr(33),chr(35),chr(36),chr(37),chr(38),chr(39),chr(40),chr(41),chr(42),
    chr(43),chr(44),chr(46),chr(47),chr(48),chr(49),chr(50),chr(51),chr(52),chr(53),chr(54),chr(55),
    chr(56),chr(57),chr(59),chr(60),chr(61),chr(62),chr(63),chr(64));								//numeric and sybmbols	

    $ary_illegal_alpha = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

    $ary_skip[] = array('yearended');
    $ary_skip[] = array('inmillions');
    $ary_skip[] = array('basic');
    $ary_skip[] = array('diluted');
    $ary_skip[] = array('average');
    //$ary_skip[] = array('before');
    $ary_skip[] = array('returnon');
    $ary_skip[] = array('pershare');
    $ary_skip[] = array('percommonshare');
    $ary_skip[] = array('sharesoutstanding');
    $ary_skip[] = array('accompanying');
    $ary_skip[] = array('supplemental');
    $ary_skip[] = array('unaudited');
    $ary_skip[] = array('signaturepage');

    $x = 'STATEMENT OF';	
    $ary_is[] = array($x, 'OPERATION');
    $ary_is[] = array($x, 'CONSOLIDATED OPERATION');
    $ary_is[] = array($x, 'NET INCOME');
    $ary_is[] = array($x, 'INCOME');
    $ary_is[] = array($x, '(LOSS) INCOME');
    $ary_is[] = array($x, 'EARNINGS');
    $ary_is[] = array($x, 'COMPREHENSIVE LOSS');
    $ary_is[] = array($x, 'DISTRIBUTABLE INCOME');
    $ary_is[] = array($x, 'FINANCIAL CONDITION');
    $ary_is[] = array($x, 'INCOME (LOSS)');
    $ary_is[] = array($x, 'CONSOLIDATED INCOME');
    $ary_is[] = array($x, 'CURRENT AND RETAINED EARNINGS');
    $ary_is[] = array($x, 'LOSS');
    $ary_is[] = array($x, 'EXPENSES');
    $ary_is[] = array('RESULTS OF',  'OPERATION');
    $ary_is[] = array('SUMMARY OF', 'OPERATION'); 
    $ary_is[] = array('INCOME', 'STATEMENT');

    $ary_bs[] = array($x, 'CONDITION');
    $ary_bs[] = array($x, 'FINANCIAL CONDITION');   
    $ary_bs[] = array($x, 'FINANCIAL POSITION');
    $ary_bs[] = array('BALANCE', 'SHEET');	
    $ary_bs[] = array('FINANCIAL CONDITION');   
    $ary_bs[] = array('FINANCIAL POSITION');

    $ary_cf[] = array($x, 'CASH FLOW');		
    $ary_cf[] = array('CASH FLOW', 'STATEMENT');	
	    
    $ary_month[0] = array('Null');
    $ary_month[1] = array('JANUARY');
    $ary_month[2] = array('FEBRUARY');
    $ary_month[3] = array('MARCH');
    $ary_month[4] = array('APRIL');
    $ary_month[5] = array('MAY');
    $ary_month[6] = array('JUNE');
    $ary_month[7] = array('JULY');
    $ary_month[8] = array('AUGUST');
    $ary_month[9] = array('SEPTEMBER');
    $ary_month[10] = array('OCTOBER');
    $ary_month[11] = array('NOVEMBER');
    $ary_month[12] = array('DECEMBER');    

    $ary_cover[] = array('ACCELERATED FILER');
    $ary_cover[] = array('FULE 12B-2');
    $ary_cover[] = array('SHARES OF COMMON STOCK OUTSTANDING');
    $ary_cover[] = array('EMPLOYER IDENTIFICIATION');
    $ary_cover[] = array('TELEPHONE NUMBER');
    $ary_cover[] = array('PRINCIPAL EXECUTIVE OFFICES');
    $ary_cover[] = array('STATE OF INCORPORATION');
    $ary_cover[] = array('TABLE OF CONTENTS');
    
    $ary_period[] = array('QUARTERLY PERIOD');
    $ary_period[] = array('QUARTER');
    $ary_period[] = array('FISCAL YEAR');
    $ary_period[] = array('YEAR');
    
    //to remove spaces btwn characters w/in the array values / 1st column w/ spaces
    $a = -1; while (++$a < count($ary_cover)) {$ary_cover[$a] = array(str_replace(chr(32),"",$ary_cover[$a][0]));}
    $a = -1; while (++$a < count($ary_period)) {$ary_period[$a] = array(str_replace(chr(32),"",$ary_period[$a][0]));} 
    
    $ary_thesaurus[] = array('continuing', 'continued');
    $ary_thesaurus[] = array('discontinuing', 'discontinued');
    $ary_thesaurus[] = array('net loss', 'net income');
    $ary_thesaurus[] = array('net earnings', 'net income');
    $ary_thesaurus[] = array('operating earnings', 'operating income');
    $ary_thesaurus[] = array('loss from', 'income from');
    $ary_thesaurus[] = array('used by', 'from');
    $ary_thesaurus[] = array('used in', 'from');
    $ary_thesaurus[] = array('used for', 'from');
    $ary_thesaurus[] = array('provided by', 'from');
    $ary_thesaurus[] = array('from in in', 'from in');
    $ary_thesaurus[] = array('from used', 'from/used');
    $ary_thesaurus[] = array('from from', 'from');
    $ary_thesaurus[] = array('used used', 'used');
    $ary_thesaurus[] = array('operating activities', 'operations');
    $ary_thesaurus[] = array('cash flows', 'cash flow');
    $ary_thesaurus[] = array('shareholders equity', 'equity');
    $ary_thesaurus[] = array('shareholder equity', 'equity');
    $ary_thesaurus[] = array('gain on sales of', 'gain from');
    $ary_thesaurus[] = array('gains on sales of', 'gain from');
    $ary_thesaurus[] = array('gain on sale of', 'gain from');
    $ary_thesaurus[] = array('(gain)', 'gain');
    $ary_thesaurus[] = array('(loss)', 'loss');
    $ary_thesaurus[] = array('inventories', 'inventory');
    $ary_thesaurus[] = array('loss before', 'income before');
    $ary_thesaurus[] = array('operating loss', 'operating income');
    $ary_thesaurus[] = array('taxes on income', 'taxes');
    $ary_thesaurus[] = array('tax benefit expense', 'tax expense');
    $ary_thesaurus[] = array('adjustment to', 'adjustments to');
    $ary_thesaurus[] = array('allowances', 'allowance');
    $ary_thesaurus[] = array('total interest expense', 'interest expense');
    $ary_thesaurus[] = array('increase', 'change');
    $ary_thesaurus[] = array('decrease', 'change');
    $ary_thesaurus[] = array('exercises', 'exercise');
    $ary_thesaurus[] = array('retained deficit', 'retained earnings');
    $ary_thesaurus[] = array('provision for income tax expense', 'income tax expense');
    $ary_thesaurus[] = array('income taxes provision', 'income tax expense');
    $ary_thesaurus[] = array('income taxes', 'income tax expense');
    $ary_thesaurus[] = array('net income on sale and disposal of assets', 'net gain on sale of assets');
    $ary_thesaurus[] = array('loss on sale and disposal of assets', 'loss on sale of assets');
    $ary_thesaurus[] = array('other expenses', 'other expense');
    $ary_thesaurus[] = array('transactions', 'tranaction');
    $ary_thesaurus[] = array('before taxes', 'before income taxes');
    $ary_thesaurus[] = array('prepaid and other current assets', 'other current assets');
    $ary_thesaurus[] = array('charges', 'expense');
    $ary_thesaurus[] = array('charge', 'expense');
    $ary_thesaurus[] = array('revenues', 'revenue');
    $ary_thesaurus[] = array('expenses', 'expense');
    $ary_thesaurus[] = array('costs', 'cost');

    $a = -1; while (++$a < count($ary_thesaurus)) {
        $thesaurus_search[] = strtoupper($ary_thesaurus[$a][0]);
        $thesaurus_search_2[] = str_replace(chr(32), '', strtoupper($ary_thesaurus[$a][0]));
        $thesaurus_replace[] = strtoupper($ary_thesaurus[$a][1]);
    } //loop

    $rYq = !(date("Y"))+1; $rYq = $rYq.'fy'; include($php.'myData03-1.php'); $_field_year = $jPeriod;  //to id cy

    //________LEAVE AT VERY BOTTOM OF PROCEDURE SCRIPT
    include($php.'myData00-13.php');					//to load class array
    include($php.'myData00-0.php');					//to load data array
    include($php.'myData00-3.php');					//to load auto-update (if possible)
    include($php.'myData00-8.php'); 					//blank dlm string
    include($php.'myData00-9.php');					//attributes
    include($php.'myData00-2.php'); 					//load load class arrays
} //end if

?>