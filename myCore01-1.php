<?php

if ($continue == "false" && $passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'myCore00-1.php');							//to process html tables (rows && columns)
    if ($continue == "false") {  	
	include($php.'myJoin02.php');	 						//process std label: ratios, etc.
    	include ($php.'mySQL01.php');	  						//upload txt files to mysql 
	include($php.'myData00-6.php'); 							//update hyperlinks dataset
    } //end if
} //end if

?>