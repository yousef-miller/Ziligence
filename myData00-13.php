
<?php							//to lead class array

unset($class);
$class[] = array('501','Net sales','_', '1-01');
$class[] = array('503','Other income','_', '1-02');
$class[] = array('505','Non-recurring income','_', '1-03');
$class[] = array('506','Gross sales','$', '1-04');

$class[] = array('701','Cost of sales','_', '1-05');
$class[] = array('702','Gross profit','$', '1-06');

$class[] = array('703','SGA expenses','_', '1-07');
$class[] = array('705','Other expenses','_', '1-08');
$class[] = array('708','EBITDA','$', '1-10');

$class[] = array('709','Depreciation','_', '1-11');
$class[] = array('711','Amortization','_', '1-12');
$class[] = array('712','EBIT','$', '1-13');

$class[] = array('713','Interest expense','_', '1-14');
$class[] = array('715','Income tax expense','_', '1-15');
$class[] = array('717','Non-recurring expenses','_', '1-16');

$class[] = array('718','Net income','$', '1-17'); 

$class[] = array('101','Cash','_', '2-01');
$class[] = array('103','Marketable securities','_', '2-02');
$class[] = array('105','Accounts receivable','_', '2-03');
$class[] = array('107','Inventories','_', '2-04');
$class[] = array('109','Prepaid expenses','_', '2-05');
$class[] = array('110','Current assets','$', '2-06');

$class[] = array('111','Deferred tax asset','_', '2-07');
$class[] = array('113','Fixed assets','_', '2-08');
$class[] = array('115','Long-term investments','_', '2-09');
$class[] = array('117','Goodwill','_', '2-10'); 
$class[] = array('118','Total assets','$', '2-11');

$class[] = array('201','Accounts payable','_', '2-12');
$class[] = array('203','Notes payable','_', '2-13');
$class[] = array('204','Current liabilities','$', '2-14');

$class[] = array('205','Long-term debt','_', '2-15');
$class[] = array('207','Deferred tax liabilities','_', '2-16');
$class[] = array('209','Pension liabilities','_', '2-17');
$class[] = array('211','Other non-current liabilities','_', '2-18');
$class[] = array('212','Total liabilities','$','2-19');

$class[] = array('301','Preferred stock','_', '2-20');
$class[] = array('303','Common stock','_', '2-21');
$class[] = array('305','Additional paid-in capital','_', '2-22');
$class[] = array('307','Retained earnings','_', '2-23');
$class[] = array('309','Treasury stock','_', '2-24');
$class[] = array('310','Total liabilites & capital','$', '2-25');

$class[] = array('401','Non-controlling interests','_', '2-26');

$class[] = array('999','YTD Net income','_', '3-01');
$class[] = array('801','Non-cash adjustments','_', '3-02');
$class[] = array('803','Change in accounts receivable','_', '3-03');
$class[] = array('805','Change in inventories','_', '3-04');
$class[] = array('807','Change in accounts payable','_', '3-05');
$class[] = array('809','Change in income taxes','_', '3-06');
$class[] = array('811','Other operating activities','_', '3-07');
$class[] = array('812','Cash flow from operating activities','$', '3-078');
$class[] = array('813','Net change in PP&E','_', '3-09');
$class[] = array('815','Net change in intangible assets','_', '3-10');
$class[] = array('817','Net acquisitions / divestitures','_', '3-11');
$class[] = array('819','Net change in investments','_', '3-12');
$class[] = array('821','Investing activities - other','_', '3-13');
$class[] = array('822','Cash flow from investing activities','$', '3-14');
$class[] = array('823','Debt issuance (retirement) - net','_', '3-15');
$class[] = array('825','Equity issued (repurchased) - net','_', '3-16');
$class[] = array('827','Common & preferred dividends paid','_', '3-17');
$class[] = array('829','Financing activities - other','_', '3-18');
$class[] = array('830','Cash flow from financing activities','$', '3-19');
$class[] = array('831','Miscellaneous adjustments','_', '3-20');
$class[] = array('832','YTD Increase (decrease) in cash','$', '3-21');
$class[] = array('834','Ending cash balance','_', '3-22');

unset($ratio);
$ratio[] = array('901', 'Gross margin','%','0-01');
$ratio[] = array('902', 'Operating margin','%','0-02');
$ratio[] = array('903', 'Profit margin','%','0-03');
$ratio[] = array('904', 'Return on investment','%','0-04');
$ratio[] = array('905', 'Return on assets','%','0-05');
$ratio[] = array('906', 'Return on equity','%','0-06');
$ratio[] = array('907', 'Return on net assets','%','0-07');
$ratio[] = array('908', 'Return on common equity','%','0-08');
$ratio[] = array('909', 'Cash flow return on investment','%','0-09');
$ratio[] = array('910', 'Efficiency ratio','%','0-10');

$ratio[] = array('911', 'Current ratio','X','0-11');
$ratio[] = array('912', 'Acid test ratio','X','0-12');
$ratio[] = array('913', 'Cash ratio','X','0-13');
$ratio[] = array('914', 'Operation ratio','X','0-14');

$ratio[] = array('915', 'Average collection period','#','0-15');
$ratio[] = array('916', 'Degree of operating leverage','X','0-16');
$ratio[] = array('917', 'Days sales outstanding','#','0-17');

$ratio[] = array('918', 'Pretax interest coverage','x','0-18');
$ratio[] = array('919', 'FCF / debt','x','0-19');
$ratio[] = array('920', 'FFO / debt','x','0-20');

$ratio[] = array('951', 'Wtd avg shares outst','#','0-51');				//valuation metrics
$ratio[] = array('952', 'Earnings per share','$','0-52');
$ratio[] = array('953', 'Price / sales','X','0-53');
$ratio[] = array('954', 'EV / Ebitda','X','0-54');
$ratio[] = array('955', 'EV / sales','X','0-55');
$ratio[] = array('956', 'P/E','X','0-56');
$ratio[] = array('957', 'PEG','X','0-57');
$ratio[] = array('958', 'P/CF','X','0-58');
$ratio[] = array('959', 'P/Bk','X','0-59');


?>