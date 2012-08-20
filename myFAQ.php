

<?php 

$php='/mnt/data/myuser/'; include($php.'dbIndex.php');

$_wh = "width='250' height='150'";
$_w2 = 10;
$_w3 = 100 - ($_w1 * 2) - $_w2;
$_blank_row = "<tr><td width=$_w1%></td><td colspan=2 $bdr></td><td width=$_w1%></td></tr>";
$_pad1 = 'style="padding-top: 12px;"';
$blogZiligence = strtolower($blogZiligence);
$learnMore = trim($learnMore);

$nav_links = "
     <tr>
        <td width=$_w1% $_pad1></td>
    	<td nowrap colspan=2 align=center $_pad1><font size=4.25>$collateral1|$sp6$learnMore</font></td>
    	<td width=$_w1% $_pad1></td>
    </tr>
";
$nav_links = (strpos($_url, '?') !== false) ? '' : $nav_links;						//to differentiate if user is logged in

$q1 = "What exactly is Ziligence offering?";
$a1 = "We provide detailed historical fundamental analysis.  Our focus is on making accurate, reliable, and timely data highly accessible to our users.";

$q2 = "Who is the targeted user for Ziligence?";
$a2 = "We are currently targeting professionals that need detailed fundamental analysis, but don't easily rationalize the cost of FactSet, Bloomberg, CapitalIQ, or Thomson Reuters.  Our audience is currently amongst boutique to mid-sized investment banks, private equity, venture capital, and management consulting firms.";

$q3 = "How does Ziligence differentiate itself from the likes of FactSet?";
$a3 = "Nobody else is in the market competing against the major providers like FactSet at the lower end of the market.  We are passionate about democratizing financial data, thus our site is free, and always will be.  Our goal is to build the highest quality data platform in the marketplace, built by the people for the people.";

$q4 = "What additional content and features does Ziligence plan to offer in the future?";
$a4 = "Our core platform can accommodate a great deal of customization and additional features.  Please let us know what you would like to see, and we will work hard to incorporate your recommendations.  Our commitment is to develop a platform and strong community that is focused on meeting your needs! ";

$q5 = "How will Ziligence remain a competitive force in the long term?";
$a5 = "Our objective is to build a vast user community, who will tell us what their needs are, and allow us the opportunity to build exciting solutions.  To continue meeting your needs, our plan is to deploy a development community giving third-party developers the opportunity to create products with our data.";

$q6= "How does Ziligence maintain a low cost structure?";
$a6 = "We are striving to remain as nimble and innovative possible.  Furthermore, we are 100% committed to open source software and automation.";

$q7 = "How much are you going to charge for subscriptions to Ziligence?";
$a7 = "Ziligence is a free website and always will be.  We are passionate about democratizing financial data.";



//NEXT SECTION
$q8 = "How does 'crowd sourcing' work on Ziligence?";
$a8 = "End users have the ability to override existing standardized labels.  As more users have done so, the reliability of the data grows.  Essentially, we are storing the mapping overrides in a table,  When you query a company's financial results, the results that are retrieved are based upon the most popular mapping selections made amongst the community.";

$q9 = "What are the benefits of customization?";
$a9 = "First and foremost, we believe that the user community is best equipped to handle the standard account mapping.  As a site operator, we strive to provide accurate, reliable, and timely data to our subscribers.  Enabling the community to make mapping edits allows us to focus exclusively on validating the raw data, and making sure that the automated process is picking up new data in a timely fashion.";  

$q10 = "As a user of Ziligence, will I always have to make mapping edits?";
$a10 = "No.  The concept we are implementing is based upon 'crowd sourcing'.  As the user community grows, so will the accuracy and reliability of the standardized financial data.";

$q11 = "Is mapping a hassle for the end user?";
$a11 = "We don't think so.  We believe that our interface makes this process as simple and painless as possible.  By giving you ability to make mapping edits, we are giving you something that doesn't exist on other financial data sites.";

$q11 = "How exactly do I edit the mapping?";
$a11 = "From the home screen: (1) click on a ticker symbol (2) click on <i>Edit Results</i> (3) make changes that you see fit using the drop down boxes (4) click <i>Submit Changes</i>.";

$q12 = "How exactly do I export the content of my screen to a spreadsheet like Excel?";
$a12 = "From the home screen: (1) click on a ticker symbol (2) select the parameters you wish to query (3) click <i>Submit</i> (3) click <i>Export CSV.</i> ";

$q13 = "How do I navigate to the summary screen?";
$a13 = "From the home screen, click on a <i>company name</i> instead of a ticker symbol.";


//NEXT SECTION
$q14 = "Why aren't the ratios and variances fully populated on the summary screen?";
$a14 = "The financial statements must be fully mapped for these values to be calculated correctly.  Follow the instructions (above) to edit the mapping.";

$q15 = "Why does the data on the site go back only as far as 2007?";
$a15 = "We want your feedback about the scope of our historical data.  A few of our resources felt that five years of historical data is adequate.  We are capable of quickly loading financial statmements dating back as far as 1997.  If you want more historical content, we are happy to get it loaded up for you ASAP.";


$body_1 = $css_hyperlink."
<div align=center>
<table width=100% cellspacing=0>

<tr>
    <td width=$_w1%></td>
    <td nowrap colspan=2 align=center><font size=5.50 color='707070'><b>Frequently Asked Questions</b></font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='000000'><b>About Our Company:</b></font></td>
    <td width=$_w1%></td>
</tr>$_blank_row$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q1</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a1</font></td>
    <td width=$_w1%></td>
</tr>

$_blank_row
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q2</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a2</font></td>
    <td width=$_w1%></td>
</tr>

$_blank_row
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q3</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a3</font></td>
    <td width=$_w1%></td>
</tr>

$_blank_row
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q4</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a4</font></td>
    <td width=$_w1%></td>
</tr>

$_blank_row
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q5</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a5</font></td>
    <td width=$_w1%></td>
</tr>

$_blank_row
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q6</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a6</font></td>
    <td width=$_w1%></td>
</tr>

$_blank_row
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q7</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a7</font></td>
    <td width=$_w1%></td>
</tr>$_blank_row$_blank_row



<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='000000'><b><br>About Our User Interface:</b></font></td>
    <td width=$_w1%></td>
</tr>$_blank_row$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q8</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a8</font></td>
    <td width=$_w1%></td>
</tr>
$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q9</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a9</font></td>
    <td width=$_w1%></td>
</tr>
$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q10</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a10</font></td>
    <td width=$_w1%></td>
</tr>
$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q11</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a11</font></td>
    <td width=$_w1%></td>
</tr>
$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q12</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a12</font></td>
    <td width=$_w1%></td>
</tr>
$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q13</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a13</font></td>
    <td width=$_w1%></td>
</tr>
$_blank_row$_blank_row



<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='000000'><b><br>Common Troubleshooting Tips:</b></font></td>
    <td width=$_w1%></td>
</tr>$_blank_row$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q14</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a14</font></td>
    <td width=$_w1%></td>
</tr>$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'><b>$q15</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='707070'>$a15</font></td>
    <td width=$_w1%></td>
</tr>$_blank_row$_blank_row

<tr>
    <td width=$_w1% $_pad1></td>
    <td colspan=2 align=left $_pad1><font size=3>View our $blogZiligence or $collateral1a or $slideDeck1a to see the latest product updates, get a closer look at our features, and learn more about our company.</font></td>
    <td width=$_w1% $_pad1></td>
</tr>$nav_links

</table>
</div>
";

$product_screen = '<html>'.$ziligence_header.$body_1.$ziligence_footer.'</html>';
sleep(1); echo $product_screen;

?>


