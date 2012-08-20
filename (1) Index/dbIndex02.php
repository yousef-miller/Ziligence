
<?php							//to recreate tables if needed (i.e. prevent sql error <missing tbl> messages accross board)

include($php.'dbConnect.php'); 
    $_users = "login varchar(50), password varchar(10), user_id varchar(5)";				//for user identification
    $sql = "create table if not exists _myUsers ($_users)";								//user database
    $result = mysql_query($sql, $connection) or die(mysql_error());

    $x = "email varchar(50)";
    $sql = "create table if not exists _myNewsletter ($x)";								//newsletter database
    $result = mysql_query($sql, $connection) or die(mysql_error());

    $_contact = "date varchar(12), first_name varchar(50), last_name varchar(50), email varchar(50), message text(1000)";
    $sql = "create table if not exists _myContactForm ($_contact)";							//contact form
    $result = mysql_query($sql, $connection) or die(mysql_error());

    $f1 ="date varchar(12), first_name varchar(50), last_name varchar(50), job_title varchar(50), company varchar(50), function varchar(50),";
    $f2 = "street_1 varchar(50), street_2 varchar(50), city varchar(50), state varchar(50), zip varchar(10), country varchar(50),";
    $f3 = "email varchar(50), phone varchar(11), preference varchar(5),referral varchar(50)";
    $_fields = $f1.chr(32).$f2.chr(32).$f3; 
    $sql = "create table if not exists _myTrialRequests ($_fields)"; 							//trial requests
    mysql_query($sql, $connection) or die(mysql_error());
mysql_close($connection);

?>