<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'ziligence_mapper2-3.php');	 			//to process subtotals for std labels
    include($php.'myJoin02.php');	 					//process std label: ratios, etc.	
    include ($php.'mySQL01.php');	  					//upload txt files to mysql
    include($php.'myData00-7.php');					//reset variables
} //end if

?>