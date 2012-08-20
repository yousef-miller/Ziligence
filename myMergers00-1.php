
<?php																	//to extract merger proxy filing

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {
    include($php.'dbConnect.php'); $file_x = fopen($myMergers, "w"); 
	$bravo = -1; while (++$bravo < count($ary_ma_results)) {
	    $x = trim($ary_ma_results[$bravo][1]);														//accession #
            $sql = "select distinct * from _myMergers where acc1 = '$x'";
            $result = mysql_query($sql, $connection) or die(mysql_error());
	    $row = mysql_fetch_row($result);
	    if (empty($row[0])) {
		$accession1 = $ary_ma_results[$bravo][1]; $accession2 = $ary_ma_results[$bravo][2];
		include($php.'myData02-4.php');                                                            						 //to retrieve search page results
		$h1= strpos($txt2, $accession2, 0);
    		if ($h1 !== false) {$h2 = strpos($txt2, '>', $h1);}
     		if ($h1 !== false && $h2 !== false) {
        	    $href = trim(substr($txt2, $h1, $h2 - $h1));                                           						 //for mySQL query (hyperlink)
		    $acc1 = trim($ary_ma_results[$bravo][1]);												//accession_1
		    $doc = trim($ary_ma_results[$bravo][3]);												//document type
		 
		    $sub = trim($ary_ma_results[$bravo][0]); include($php.'myMergers00-2.php');				//to query link to actual report
	    	    $str = "$tkr,$cik,$doc,$sub,$acc1,$href,$type_2,$href_2,$type_3,$href_3"; 					//for upload to mySQL
		    echo $str."<br>";
		    fwrite($file_x, $str."\r\n");
		} //end if
	    } //end if
	} //loop
    mysql_close($connection); fclose($file_x);
} //end if

?>