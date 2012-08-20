
<?php

$php = '/mnt/data/myuser/'; $_admin_page = '?admin=MGLu-g8nj'; include($php.'myLogin_2.php');				//to look up user id

if ($_access == 'true') {
    include($php.'dbIndex.php');													//to format page header, etc.

    $x = "<a href=$_aws?logout=1>logout</a>"."<br>";
    $x = $x."<br>";
    $x = $x."<a href=$_aws/myRatings00.php>[ZACK'S API: ESTIMATES & WASO]</a><br>";
    $x = $x."<br>";
    $x = $x."<a href=$_aws/ziligence_builder00.php>[GET ALL INFO / proc1]</a><br>";
    $x = $x."<br>";
    $x = $x."<a href=$_aws/ziligence_manual0.php>[MANUAL parse / proc3]</a><br>";
    $x = $x."<br>";
    $x = $x."<br>";
    echo $x."<br>";

    ////$x = $x."<a href=$_aws/myStockPrices.php>[RETRIEVE STOCK PRICES]</a><br>";
    ////$x = $x."<a href=$_aws/myMergers99.php>[SEC MERGERS & ACQUISITIONS]</a><br>";
    ////$x = $x."<a href=$_aws/myCore99.php>[PARSE data / proc2]</a><br>";
    ////$x = $x."<a href=$_aws/myAdmin_Overwrite.php>[OVERWRITE]</a><br>";

     include($php.'dbConnect.php'); 
     $sql = "select * from _myUsers";												//create list of existing suers
     $result = mysql_query($sql, $connection) or die(mysql_error());
     while($row = mysql_fetch_row($result)) {$ary_emails[] = array($row[0]);}

    $sql = "select * from _myTrialRequests order by date, last_name";
    $result = mysql_query($sql, $connection) or die(mysql_error());
    while($row = mysql_fetch_row($result)) {
	unset($_match); $a = -1; while (++$a < count($ary_emails)) {if ($ary_emails[$a][0] == $row[12]) {$_match = 'true'; break;}}
	$x1 = 'record'.++$count; $x2 = "email$count";
	$_select = ($_match != 'true') ? "<input type='checkbox' name='$x1' value='true' />" : '';
	$_email = "<input type='hidden' name='email$count' id='$x2' maxlength='50' size='10' value='$row[12]' />";
	$_body = $_body.$_select.implode(',', $row).$_email."<br>";
    } //loop
    mysql_close($connection);

    $_path = $aws.'mySite_admin_1.php';
    $form_1 = "
        <form id='register' action='$_path' method='post' accept-charset='UTF-8'>
	$_body
        <input type='submit' name='submitforms' id='submitforms' value='     Approve Requests     '/>
        </form>
    ";
    echo $form_1;
} //end if

?>