<?php

 // __non-restricied parameters_______________________________________________
set_time_limit(0); ignore_user_abort(true);														//allow script to run forever
$config = "/mnt/data/myconfig/";
$_aws = "http://www.ziligence.com";															//aws ip address
$myTrialRequest = $config."myTrialRequest.txt";													//for free trail request form upload;
$myUsers = $config."myUsers.txt"; 															//for new logins
$myNewsletter = $config."myNewsletter.txt"; 													//for newslettter signup
$myContact = $config."myContact.txt"; 															//for contact form
$_s3bucket = "http://s3.amazonaws.com/ziligence";

$x = getdate(); 																			//determine && config current date
$today_y = $x[year]; 
$today_m = ($x[mon] <= 9) ? '0'.$x[mon] : $x[mon]; 
$today_d = ($x[mday] <= 9) ? '0'.$x[mday] : $x[mday];
$_current_date = $today_y.$today_m.$today_d; 

include($php.'dbIndex00.php');																//standard html blocks
include($php.'dbIndex02.php');					 											//define mySQL data tables		

if ($_GET[user] == 'admin') {header("Location: $_aws/myLogin.php?logout=1");} 						//security redirect to login screen
elseif ($_access == 'true' || $_access_override == 'true') {
    $passcode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
    $passcode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';

    include($php.'dbIndex03.php');					 											//define mySQL data tables
   
    if ($user_name== 'joseph.miller422@gmail.com') {include($php.'dbIndex01.php');}					//load user array for univeral updates
    $_user_id = ($user_name == 'joseph.miller422@gmail.com') ? 'admin' : $_GET[user];					//for mySite_home && SQLquery
    $_user_id = ($_access_override == 'true') ? 'admin' : $_user_id;									//for core processes
 
    // __index of text files________________________________________________________    
   $admin_path = '/mnt/data2/mydata/';
   $dPath = ($_user_id == 'admin') ? $admin_path : '/mnt/data2/mydata/'.$_user_id.'_';
   $myClasses = $config."myClasses.txt";
   $myCompanies = $config."myCompanies.txt";
   $myCompanies_2 = $config."myCompanies_2.txt";
   $myCompletes = $config."myCompletes.txt";
   $myHyperlinks = $config."myHyperlinks.txt";  
   $myMergers = $config."myMergers.txt"; 
   $myMergers_1 = $config."myMergers_1.txt";  
   $myOwnership = $config."myOwnership.txt"; 
   $myRatings = $config."myRatings.txt";
   $mySIC = $config."mySIC.txt"; 
   $myTickers = $config."myTickers.txt";   
   $myUniverse = $config."myUniverse.txt";  
   $mySP500 = $config."mySP500.txt";  
   $myFails = $config."myFails.txt"; 
   $myFails_2 = $config."myFails_2.txt"; 
   $myPHPcore = $config."myPHPcore.txt"; 
   $myPHPstocks = $config."myPHPstocks.txt"; 
   $url_base = "http://www.sec.gov/Archives/edgar/data/";

    $_zack_base = 'http://svc.webservius.com/sdbv1/zacks/data/';
    $_zack_key = 'nGCsM7wVj4co9dsu2atk24hKKTn1-Eb5';					//zack's api access key

    $url_sec1a = 'http://www.sec.gov/cgi-bin/browse-edgar?action=getcompany&CIK=';
    $sec10 = '&type=10-';													//quarterly / annual results
    $sec08 = '&type=8-';													//press release results
    $url_sec1b = '&dateb=&owner=exclude';
    if (isset($results_page) !== true) {
    	$results_page[0] = array('&start=0&count=100');
    	$results_page[1] = array('&start=100&count=100');
    	$results_page[2] = array('&start=200&count=100');
    	$results_page[3] = array('&start=300&count=100');
    	$results_page[4] = array('&start=400&count=100');
    	$results_page[5] = array('&start=500&count=100');
    	$results_page[6] = array('&start=600&count=100');
    	$results_page[7] = array('&start=700&count=100');
    	$results_page[8] = array('&start=800&count=100');
    	$results_page[9] = array('&start=900&count=100');
    } //end if
  	
    //__inputs______________________________________________________________________   
   $_vFirst = 6;				//set first field
   $_fCount = 300;			//set # of periods  
   $max_bytes_txt3 = 50000000;					//max file length for file_get_contents
   $xvLen = 45;      								//set length of xv Labels w/o spaces
   $tbl_row_min = 12;							//minimum number of rows
   $srch_n = 23;   								//set period to iterate to 
   $zeta = 1;									//stop period
   $sCorp = 1;									//corporation start index #
   $nCorp = 5540; 								//number of tickers to iterate   
}//end if

?>