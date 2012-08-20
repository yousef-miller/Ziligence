<?php			//auto-match (if possible) word search <NOTE: Can be 1 or 2 fields>

//____BALANCE SHEET ACCOUNTS ARE match_2____

$match_2[] = array('101','Cash','cash','%');

$match_2[] = array('103','Marketable securities','market','securities');
$match_2[] = array('103','Marketable securities','market','security');
$match_2[] = array('103','Marketable securities','held','sale');

$match_2[] = array('105','Accounts receivable','receivable','%');
$match_2[] = array('105','Accounts receivable','allowance','credit');
$match_2[] = array('105','Accounts receivable','provision','credit');

$match_2[] = array('107','Inventories','inventor','%');

$match_2[] = array('109','Prepaid expenses','prepaid','%');

$match_2[] = array('111','Prepaid expenses','tax','asset');

$match_2[] = array('113','Fixed assets','property','%');
$match_2[] = array('113','Fixed assets','land','%');
$match_2[] = array('113','Fixed assets','building','%');
$match_2[] = array('113','Fixed assets','plant','%');
$match_2[] = array('113','Fixed assets','equipment','%');
$match_2[] = array('113','Fixed assets','machinery','%');
$match_2[] = array('113','Fixed assets','depreciation','%');
$match_2[] = array('113','Fixed assets','capitalized','%');

$match_2[] = array('115','Long-term investments','long','investment');

$match_2[] = array('117','Goodwill','goodwill','%'); 
$match_2[] = array('117','Goodwill','intangible','%');
$match_2[] = array('117','Goodwill','amortiz','%');

$match_2[] = array('203','Notes payable','current','note');   //hierarchy before 205 & 201
$match_2[] = array('203','Notes payable','current','debt');
$match_2[] = array('203','Notes payable','current','loan');

$match_2[] = array('201','Accounts payable','account','payable');
$match_2[] = array('201','Accounts payable','tax','payable');
$match_2[] = array('201','Accounts payable','current','tax');
$match_2[] = array('201','Accounts payable','current','pensison');
$match_2[] = array('201','Accounts payable','accrued','%');
$match_2[] = array('201','Accounts payable','current','liability');  //sweep position

$match_2[] = array('205','Long-term debt','note','%');
$match_2[] = array('205','Long-term debt','debt','%');
$match_2[] = array('205','Long-term debt','loan','%');

$match_2[] = array('207','Deferred tax liabilities','deferred','tax');
$match_2[] = array('207','Deferred tax liabilities','tax','liabilit');

$match_2[] = array('209','Pension liabilities','pension','%');
$match_2[] = array('209','Pension liabilities','retirement','%');


$match_2[] = array('301','Preferred stock','preferred','stock');
$match_2[] = array('301','Preferred stock','preferred','share');

$match_2[] = array('303','Common stock','common','stock');
$match_2[] = array('303','Common stock','common','share');

$match_2[] = array('305','Additional paid-in capital','paid','capital');
$match_2[] = array('307','Retained earnings','retained','earning');
$match_2[] = array('309','Treasury stock','treasury','stock');

$match_2[] = array('401','Non-controlling interests','minority','interest');



//-------------------------------------------------------------------------


//____INCOME STMT ACCOUNTS ARE match_1____

$match_1[] = array('503','Other income','other','sales');	//hierarchy before 501
$match_1[] = array('503','Other income','other','income');
$match_1[] = array('503','Other income','other','revenue');
$match_1[] = array('503','Other income','misc','sales');	
$match_1[] = array('503','Other income','misc','income');
$match_1[] = array('503','Other income','misc','revenue');

$match_1[] = array('501','Net sales','gross','sales');
$match_1[] = array('501','Net sales','gross','revenue');

$match_1[] = array('505','Non-recurring income','gain','%');

$match_1[] = array('701','Cost of sales','cost','sales');
$match_1[] = array('701','Cost of sales','cost','sold');
$match_1[] = array('701','Cost of sales','cost','goods');

$match_1[] = array('703','SGA expenses','sga','%');
$match_1[] = array('703','SGA expenses','sg&a','%');
$match_1[] = array('703','SGA expenses','general','admin');
$match_1[] = array('703','SGA expenses','selling','general');
$match_1[] = array('703','SGA expenses','selling','admin');

$match_1[] = array('705','Other expenses','other','expense');

$match_1[] = array('707','Non-recurring expenses','loss','%');
$match_1[] = array('707','Non-recurring expenses','write','off');

$match_1[] = array('709','Depreciation','depreciation','%');

$match_1[] = array('711','Amortization','amortization','%');
$match_1[] = array('711','Amortization','depletion','%');

$match_1[] = array('713','Interest expense','interest','%');

$match_1[] = array('715','Income tax expense','tax','%');

?>