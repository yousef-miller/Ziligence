
<?php 

$php = '/mnt/data/myuser/'; include($php.'myLogin_2.php');					//to look up user id

if ($_access == 'true') {
    include($php.'dbConnect.php'); 
    $keycode_1 = '}cca9NqC+c!E6xL6H<*{q(}Y"MGLu-g8njA1n3x}FT2b.3!qpN`I>MDpG4D\HWo';
    $keycode_2 = 'S@:x=2mR?|8u}qx;+&`O?7/v+,fr+qQs^7iz&0?J0*e7j;v_$8EB.G+K{!`y#{^';
    include($php.'mySite_home00-2.php');								//to parse url
    include($php.'mySite_home00.php');									//to query company records

    include ($php.'mySite_search_box_1.php');							//to get last control settings
    include($php.'myData00-12.php');									//to map qtr ends to actual dates
    include($php.'mySQLquery_2.php');									//to query results
    echo $css_hyperlink.$ziligence_header;
    include ($php.'mySite_search_box_3.php');							//to establish controls

    echo $form_control.$query_results."<br><br><br><br><br><br><br><br>";			//to print results	
    $file_w = fopen($php.'/'.$_user_id.'.csv', "w"); fwrite($file_w, $csv_results); fclose($file_w);		
    mysql_close($connection);
} //end if

?>
