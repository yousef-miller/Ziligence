
<?php 

$php='/mnt/data/myuser/'; include($php.'dbIndex.php');

$_wh = "width='250' height='150'";
$_w2 = 15;
$_w3 = 100 - ($_w1 * 2) - $_w2;
$_pad1 = 'style="padding-top: 12px;"'; $_pad2 = 'style="padding-top: 9px;"'; $_pad3 = 'style="padding-top: 20px;"';
$_blank_row = "<tr><td width=$_w1%></td><td colspan=2 $bdr></td><td width=$_w1%></td></tr>";
$blogZiligence = strtolower($blogZiligence);
$closer_look = "<a href=http://ziligence.wordpress.com/2012/06/28/a-closer-look-at-how-ziligence-works/ target=_blank>Take a closer look</a>";
$_algorithm = "<a href=http://ziligence.wordpress.com/2012/06/28/a-closer-look-at-how-ziligence-works/ target=_blank>proprietary algorithm</a>";
$_faq = "<a href=$_aws/myFAQ.php>FAQ page</a>";

$reports_metrics = "<a href=$_aws/ziligence4.php>reports and metrics</a>";
$_professionals = "<a href=$_aws/ziligence4.php>professionals</a>";

$body_1 = $css_hyperlink."
<div align=center>
<br>
<table width=100% cellspacing=0>
<tr>
<td nowrap colspan=4 align=center valign=top>
    <img style='$bdr' src=$_s3bucket/main_1.jpg $_wh />
    <img style='$bdr' src=$_s3bucket/main_2.jpg $_wh />
    <img style='$bdr' src=$_s3bucket/main_3.jpg $_wh />
</td>
</tr>

<tr>
    <td width=$_w1% $_pad3></td>
    <td colspan=2 align=left $_pad3><font size=3 color='707070'><i>Ziligence</i> is a free & open source site for financial research, providing detailed earnings and valuation data for all U.S. public companies.</font></td>
    <td width=$_w1% $_pad3></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td nowrap width=$_w2% valign=bottom $_pad1><font size=4><b>Our Solutions for</br>Financial Research:&nbsp;&nbsp;&nbsp;&nbsp;</b></font></td>
    <td width=$_w3% align=left valign=center $_pad1><font size=3 color='707070'>$_mission</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

$_blank_row

<tr>
    <td width=$_w1% $_pad2></td>
    <td width=$_w2% valign=top $_pad2><font size=3 color='707070'><b>Who We Serve</b></font></td>
    <td width=$_w3% align=left valign=top $_pad2><font size=3>Our site is built for highly demanding professionals like bankers, brokers, lawysers, consultants, accountants, and academics.  We also offer our data sets to third-party developers for integration into their websites and apps.  Read more for $_professionals and developers.</font></td>
    <td width=$_w1% $_pad2></td>
</tr>



<tr>
    <td width=$_w1% $_pad2></td>
    <td width=$_w2% valign=top $_pad2><font size=3 color='707070'><b>Data Updates</b></font></td>
    <td width=$_w3% align=left valign=top $_pad2><font size=3>We run a $_algorithm to locate and rapidly aggregate data from newly filed SEC documents.  We believe our $reports_metrics are updated at the industry's fastest speed (less than 20 seconds).</font></td>
    <td width=$_w1% $_pad2></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Data Quality</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>Accuracy and reliability are top priorities.  We want to earn your trust and we take great measures internally to ensure that our data is accurate.  Further, our reports are conveniently linked to their original source documents, enabling click through access.</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Site Technology</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>We built and operate a reliable platform, optimizing the cost benefits of open-source software and cloud hosting. $closer_look to see how our site works.</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Site Design</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>We developed our site entirely with the end user in mind. Our belief is that minimalist aesthetics are the easiest on the human eye to process.  Further, we believe that navigating a site with ease provides enjoyment.  </font></td>
    <td width=$_w1% $_pad1></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Site Customization</b></font></td>
    <td width=$_w3% align=left valign=top $_pad1><font size=3>Tell us what you need to see and how you want to see it.  We offer customizable screens and reports at your request.  Further, the analytics within our site can be fully modified to your specifications.  Getting you what you need is what we strive for.</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Open Source</b></font></td>
    <td width=$_w3% align=left valign=bottom $_pad1><font size=3>Ziligence is committed to creating a more open and transparent world.  Our platform will continue evolving with contibutions from a global ecosystem.  We are proud our entire platform is open sourced on $gitHub. </font></td>
    <td width=$_w1% $_pad1></td>
</tr>


<tr>
    <td width=$_w1% $_pad1></td>
    <td width=$_w2% valign=top $_pad1><font size=3 color='707070'><b>Learn More</b></font></td>
    <td width=$_w3% align=left valign=bottom $_pad1><font size=3>View our $blogZiligence or $collateral1a or $slideDeck1a to see the latest product updates, get a closer look at our features, and learn more about our company.  Also, our $_faq answers basic questions about our company and product.  $readMore_1.</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

$_blank_row

<tr>
    <td width=$_w1% $_pad1></td>
    <td nowrap colspan=2 align=center $_pad1><font size=4.25>$readMore_1$sp6|$sp6$collateral1|$requestTrial</font></td>
    <td width=$_w1% $_pad1></td>
</tr>

</table>
</div>
";

$product_screen = '<html><title>Product Overview</title>'.$ziligence_header.$body_1.$ziligence_footer.'</html>';
sleep(1); echo $product_screen;

?>
