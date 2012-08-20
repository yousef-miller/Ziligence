
<?php

if ($passcode_1 == $keycode_1 && $passcode_2 == $keycode_2) {

    $form_control = "
        <body>
	<div style='width:2000px; padding-left:75px; font: 14px arial;'>
		<form method='get'>
			<input type='hidden' name='user' id='user' value='$_GET[user]' maxlength='5' size='5' />
			<input type='hidden' name='tkr' id='tkr' value='$_GET[tkr]' maxlength='5' size='5' />
    			<input type='submit' value='Submit' />

			<select multiple name='stmt[]' size='3'>
        			<option value = '1' $stmt_1>Income Statement</option>;
        			<option value = '2' $stmt_2>Balance Sheet</option>;
				<option value = '3' $stmt_3>Statement of Cash Flows</option>;
    			</select>

    			<select name='type' size='3'>
        			<option value = '1' $type_1>As Reported Statements</option>;
	  			<option value = '2' $type_2>Standardized Statements</option>;
	  			<option value = '3' $type_3>Common-Sized Statements</option>;       
	  			<option value = '4' $type_4>Ratios / Variances</option>;        
    			</select>

    			<select multiple name = 'period[]' size='3'> 
        			<option value = '2012' $_2012>2012</option>;
        			<option value = '2011' $_2011>2011</option>;
        			<option value = '2010' $_2010>2010</option>;
        			<option value = '2009' $_2009>2009</option>;
        			<option value = '2008' $_2008>2008</option>;
        			<option value = '2007' $_2007>2007</option>;
    			</select>   

    			<select multiple name='qtr[]' size='3'>
        			<option value = 'FY' '$Q_0>FY</option>;
        			<option value = 'Q1' $Q_1>Q1</option>;
				<option value = 'Q2' $Q_2>Q2</option>;
				<option value = 'Q3' $Q_3>Q3</option>; 
				<option value = 'Q4' $Q_4>Q4</option>;    
				<option value = 'YE' $Q_5>YE</option>;       
    			</select>   

			<select name='option' size='3'>
       				<option value = '1' $option_1>Default 1Q Basis</option>;
        			<option value = '2' $option_2>Rolling 4Q Basis</option>;
			</select>
			<input type='hidden' name='view' id='view' value='$_GET[view]' maxlength='1' size='1' />
		</form>
		$_alert_str
		$result_status
		$_recalc_msg
	</div>
        </body>
    ";
} //end if

?>