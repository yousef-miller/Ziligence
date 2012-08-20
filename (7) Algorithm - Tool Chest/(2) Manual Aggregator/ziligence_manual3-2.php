<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'myData01-4.php');												 //to create files if neeeded
    include($php.'ziligence_manual3-4.php');											//to determine jPeriod &&/or jPeriod2
    if (empty($tArray)) {include($php.'myData00-0.php');}
    if (!empty($jPeriod) && !empty($jPeriod2)) {
        $xPeriod2 = $jPeriod2; while (++$jPeriod <= $xPeriod2) {							//run up & down the periods +/- jPeriod
	    $rYq = $tArray[$jPeriod][0];												//to determine rYq
	    if (!empty($rYq)) {
	        include($php.'ziligence_manual3-3.php');									//to determine rY
                include($php.'myData03-6.php');											//to determine jFields
		$continue = "false"; include($php.'myData01.php'); 							//to load ary label	
		include($php.'ziligence_mapper2-2.php');									//to process std labels / upload to mySQL / etc.
	    } //end if
        } //loop
    } //end if
} //end if

?>