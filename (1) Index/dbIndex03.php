

<?php							//to recreate tables if needed (i.e. prevent sql error <missing tbl> messages accross board)

if ($_access == 'true' || $_access_override == 'true') {
    include($php.'dbConnect.php'); 											//CREATE SQL CONNECTION

    $x = "ticker varchar(5), cik int, fye int, user_id varchar(5), pid varchar(10), primary key (ticker, user_id, pid)";
    $sql = "create table if not exists _myRecalcs ($x)"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $x = "class_1 varchar(150), class_2 varchar(150), primary key (class_1, class_2)";
    $sql = "create table if not exists _myClasses ($x)"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $_oData = "ticker varchar(5), cik int, owner varchar (75), type varchar (10), title varchar (50), primary key (ticker, owner, title)";
    $sql = "create table if not exists _myOwnership ($_oData)"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $fields_mergers = "ticker varchar(5), cik int, type varchar(10), date_1 int, acc1 varchar(25), 
	href varchar(100), type_2 varchar(5), href_2 varchar(100),  type_3 varchar(5), href_3 varchar(100), primary key (ticker, date_1)"; 
    $sql = "create table if not exists _myMergers ($fields_mergers)"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $fields_hLinks = "ticker varchar(5), cik int, rYq varchar(7), jPeriod int, date_1 int, 
	date_2 int, acc1 varchar(25), url_s1 varchar(100), href varchar(100), primary key (ticker, jPeriod, acc1)"; 
    $sql = "create table if not exists _myHLinks ($fields_hLinks)"; 
    mysql_query($sql, $connection) or die(mysql_error());


    $_hFails = "pos int, ticker varchar(5), cik int, fye varchar(5), rYq varchar(7), 
	jPeriod int, acc1 varchar(25), k10link varchar(100), k8link varchar(100), primary key (ticker, jPeriod, acc1)"; 			
    $sql = "create table if not exists _myFails ($_hFails)"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $_hFails_2 = "ticker varchar(5), cik int, jPeriod int, user_id varchar(5), date_1	int, primary key (ticker, jPeriod, user_id)";	
    $sql = "create table if not exists _myFails_2 ($_hFails_2)"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $_universeFields = 
	"ticker varchar(5), suggest varchar(50), exchange varchar(6), cik varchar(10), 
	fye varchar(5), sic varchar(75), mail varchar(50), website varchar(50), overview text (3000), primary key (ticker)";
    $sql = "create table if not exists _myCompanies ($_universeFields)"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $_completesFields = "ticker varchar(5), suggest varchar(50), exchange varchar(6), sic varchar(75), primary key (ticker)";
    $sql = "create table if not exists _myCompanies_2 ($_completesFields)"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $_sp500Fields = "ticker varchar(5), suggest varchar(50), exchange varchar(6), cik varchar(10), sic varchar(75), primary key (ticker)";
    $sql = "create table if not exists _mySP500 ($_sp500Fields)"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $_searchFields = "ticker varchar(5), date_1 int, user_id varchar(5), primary key (ticker, user_id)";
    $sql = "create table if not exists _mySearches ($_searchFields)"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $_stockDailyPricing = "ticker varchar (5), date varchar (8), open float, high float, 
	low float, close float, volume int, adj_close float, dividend float, yield float, market_time text (200), primary key (ticker, date)";
    $sql = "create table if not exists _myStockPrices ($_stockDailyPricing)"; 
    mysql_query($sql, $connection) or die(mysql_error());

    $_rData = 
	"ticker varchar(5), data_type varchar (30), query_date float, r1 float, r2 float, r3 float, r4 float, r5 float, 
	r6 float, r7 float, r8 float, r9 float, r10 float, r11 float, r12 float, r13 float, r14 float, r15 float, r16 float,
	r17 float, r18 float, r19 float, r20 float, r21 float, r22 float, r23 float, r24 float, r25 float, 
	primary key (ticker, data_type, query_date)";		//for ratings (Zack's)
   $sql = "create table if not exists _myRatings ($_rData)"; 
   mysql_query($sql, $connection) or die(mysql_error());

   $_Periods =
       "1980q1 float, 1980q2 float, 1980q3 float, 1980q4 float, 1980fy float,
   	1981q1 float, 1981q2 float, 1981q3 float, 1981q4 float, 1981fy float,
  	1982q1 float, 1982q2 float, 1982q3 float, 1982q4 float, 1982fy float,
  	1983q1 float, 1983q2 float, 1983q3 float, 1983q4 float, 1983fy float,
  	1984q1 float, 1984q2 float, 1984q3 float, 1984q4 float, 1984fy float,
  	1985q1 float, 1985q2 float, 1985q3 float, 1985q4 float, 1985fy float,
  	1986q1 float, 1986q2 float, 1986q3 float, 1986q4 float, 1986fy float,
  	1987q1 float, 1987q2 float, 1987q3 float, 1987q4 float, 1987fy float,
  	1988q1 float, 1988q2 float, 1988q3 float, 1988q4 float, 1988fy float,
  	1989q1 float, 1989q2 float, 1989q3 float, 1989q4 float, 1989fy float,
	1990q1 float, 1990q2 float, 1990q3 float, 1990q4 float, 1990fy float,
   	1991q1 float, 1991q2 float, 1991q3 float, 1991q4 float, 1991fy float,
  	1992q1 float, 1992q2 float, 1992q3 float, 1992q4 float, 1992fy float,
  	1993q1 float, 1993q2 float, 1993q3 float, 1993q4 float, 1993fy float,
  	1994q1 float, 1994q2 float, 1994q3 float, 1994q4 float, 1994fy float,
  	1995q1 float, 1995q2 float, 1995q3 float, 1995q4 float, 1995fy float,
  	1996q1 float, 1996q2 float, 1996q3 float, 1996q4 float, 1996fy float,
  	1997q1 float, 1997q2 float, 1997q3 float, 1997q4 float, 1997fy float,
  	1998q1 float, 1998q2 float, 1998q3 float, 1998q4 float, 1998fy float,
  	1999q1 float, 1999q2 float, 1999q3 float, 1999q4 float, 1999fy float,
	2000q1 float, 2000q2 float, 2000q3 float, 2000q4 float, 2000fy float,
   	2001q1 float, 2001q2 float, 2001q3 float, 2001q4 float, 2001fy float,
  	2002q1 float, 2002q2 float, 2002q3 float, 2002q4 float, 2002fy float,
  	2003q1 float, 2003q2 float, 2003q3 float, 2003q4 float, 2003fy float,
  	2004q1 float, 2004q2 float, 2004q3 float, 2004q4 float, 2004fy float,
  	2005q1 float, 2005q2 float, 2005q3 float, 2005q4 float, 2005fy float,
  	2006q1 float, 2006q2 float, 2006q3 float, 2006q4 float, 2006fy float,
  	2007q1 float, 2007q2 float, 2007q3 float, 2007q4 float, 2007fy float,
  	2008q1 float, 2008q2 float, 2008q3 float, 2008q4 float, 2008fy float,
  	2009q1 float, 2009q2 float, 2009q3 float, 2009q4 float, 2009fy float,
	2010q1 float, 2010q2 float, 2010q3 float, 2010q4 float, 2010fy float,
   	2011q1 float, 2011q2 float, 2011q3 float, 2011q4 float, 2011fy float,
  	2012q1 float, 2012q2 float, 2012q3 float, 2012q4 float, 2012fy float,
  	2013q1 float, 2013q2 float, 2013q3 float, 2013q4 float, 2013fy float,
  	2014q1 float, 2014q2 float, 2014q3 float, 2014q4 float, 2014fy float,
  	2015q1 float, 2015q2 float, 2015q3 float, 2015q4 float, 2015fy float,
  	2016q1 float, 2016q2 float, 2016q3 float, 2016q4 float, 2016fy float,
  	2017q1 float, 2017q2 float, 2017q3 float, 2017q4 float, 2017fy float,
  	2018q1 float, 2018q2 float, 2018q3 float, 2018q4 float, 2018fy float,
  	2019q1 float, 2019q2 float, 2019q3 float, 2019q4 float, 2019fy float,
	2020q1 float, 2020q2 float, 2020q3 float, 2020q4 float, 2020fy float,
   	2021q1 float, 2021q2 float, 2021q3 float, 2021q4 float, 2021fy float,
  	2022q1 float, 2022q2 float, 2022q3 float, 2022q4 float, 2022fy float,
  	2023q1 float, 2023q2 float, 2023q3 float, 2023q4 float, 2023fy float,
  	2024q1 float, 2024q2 float, 2024q3 float, 2024q4 float, 2024fy float,
  	2025q1 float, 2025q2 float, 2025q3 float, 2025q4 float, 2025fy float,
  	2026q1 float, 2026q2 float, 2026q3 float, 2026q4 float, 2026fy float,
  	2027q1 float, 2027q2 float, 2027q3 float, 2027q4 float, 2027fy float,
  	2028q1 float, 2028q2 float, 2028q3 float, 2028q4 float, 2028fy float,
  	2029q1 float, 2029q2 float, 2029q3 float, 2029q4 float, 2029fy float,
	2030q1 float, 2030q2 float, 2030q3 float, 2030q4 float, 2030fy float,
   	2031q1 float, 2031q2 float, 2031q3 float, 2031q4 float, 2031fy float,
  	2032q1 float, 2032q2 float, 2032q3 float, 2032q4 float, 2032fy float,
  	2033q1 float, 2033q2 float, 2033q3 float, 2033q4 float, 2033fy float,
  	2034q1 float, 2034q2 float, 2034q3 float, 2034q4 float, 2034fy float,
  	2035q1 float, 2035q2 float, 2035q3 float, 2035q4 float, 2035fy float,
  	2036q1 float, 2036q2 float, 2036q3 float, 2036q4 float, 2036fy float,
  	2037q1 float, 2037q2 float, 2037q3 float, 2037q4 float, 2037fy float,
  	2038q1 float, 2038q2 float, 2038q3 float, 2038q4 float, 2038fy float,
  	2039q1 float, 2039q2 float, 2039q3 float, 2039q4 float, 2039fy float";
   $_fPeriods = "ticker varchar(5), tbl varchar(5), bdr varchar(2), label_a varchar(150), class varchar(15), label_b varchar(150)";
   $_fPeriods = "$_fPeriods, $_Periods, user_id varchar(5), primary key (ticker, tbl, label_b, user_id)";						
    $sql = "create table if not exists _myJData ($_fPeriods)"; 						//CREATE ALL PRIMARY DATA TABLES
    mysql_query($sql, $connection) or die(mysql_error());	
    $sql = "create table if not exists _myMData ($_fPeriods)"; 
    mysql_query($sql, $connection) or die(mysql_error());
    $sql = "create table if not exists _myCData ($_fPeriods)"; 				
    mysql_query($sql, $connection) or die(mysql_error());
    $sql = "create table if not exists _myRData ($_fPeriods)"; 			
    mysql_query($sql, $connection) or die(mysql_error());
    $sql = "create table if not exists _myMxData ($_fPeriods)"; 					
    mysql_query($sql, $connection) or die(mysql_error());
    $sql = "create table if not exists _myCxData ($_fPeriods)"; 
    mysql_query($sql, $connection) or die(mysql_error());
    $sql = "create table if not exists _myRxData ($_fPeriods)"; 	
    mysql_query($sql, $connection) or die(mysql_error());

    mysql_close($connection);												//CLOSE SQL CONNECTION

 } //end if

?>