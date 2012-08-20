


<?php 

$php='/mnt/data/myuser/'; include($php.'dbIndex.php');

$_wh = "width='250' height='150'";
$_w2 = 10;
$_w3 = 100 - ($_w1 * 2) - $_w2;
$_blank_row = "<tr><td width=$_w1%></td><td colspan=2 $bdr></td><td width=$_w1%></td></tr>";
$blogZiligence = strtolower($blogZiligence);
$vsp = '&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;';
$faq = "<a href=$_aws/myFAQ.php>faq</a>";
$_linkedin1 = "<a href=$_linkedin1 target=_blank>LinkedIn</a>";
$_crunchbase1 = "<a href=$_crunchbase1 target=_blank>CrunchBase</a>";
$_linkedin2 = "<a href=$_linkedin2 target=_blank>LinkedIn</a>";
$_crunchbase2 = "<a href=$_crunchbase2 target=_blank>CrunchBase</a>";

$story_1 = "<a href=$_s3bucket/InsideMarketData0702.pdf target=_blank>Read Story</a>";

$wordpress = 'http://ziligence.wordpress.com';
$blog_1 = "<a href=$wordpress/2012/06/26/ziligence-launches-private-beta-on-may-1-2012/ target=_blank>Read Blog</a>";
$blog_2 = "<a href=$wordpress/2012/06/26/ziligence-is-the-affordable-solution-for-financial-research/ target=_blank>Read Blog</a>";
$blog_3 = "<a href=$wordpress/2012/06/27/ziligence-releases-beta-version-2-0-on-june-21-2012 target=_blank>Read Blog</a>";
$blog_4 = "<a href=$wordpress/2012/06/28/a-closer-look-at-how-ziligence-works/ target=_blank>Read Blog</a>";
$blog_6 = "<a href=$wordpress/2012/06/29/ziligence-is-diligence-with-a-z/ target=_blank>Read Blog</a>";
$blog_7 = "<a href=$wordpress/2012/07/03/ziligence-the-founding-story/ target=_blank>Read Blog</a>";
$blog_8 = "<a href=$wordpress/2012/07/04/ziligences-processing-speed-is-now-2x-faster/ target=_blank>Read Blog</a>";
$blog_9 = "<a href=$wordpress/2012/07/15/ziligence-is-ready-to-disrupt/ target=_blank>Read Blog</a>";
$blog_10 = "<a href=$wordpress/2012/07/15/ziligence-releases-a-demo-video/ target=_blank>Read Blog</a>";
$blog_11 = "<a href=$wordpress/2012/07/19/ziligence-at-a-glance/ target=_blank>Read Blog</a>";
$blog_12 = "<a href=$wordpress/2012/08/13/ziligence-concludes-beta-testing/ target=_blank>Read Blog</a>";
$blog_13 = "<a href=$wordpress/2012/08/17/ziligence-is-now-a-free-open-sourced-site/ target=_blank>Read Blog</a>";
////$blog_14 = "<a href=$wordpress/ target=_blank>Read Blog</a>";


$body_1 = $css_hyperlink."
<div align=center>
<br>
<table width=100% cellspacing=0>

<tr>
    <td width=$_w1%></td>
    <td nowrap colspan=2 align=center><font size=4.50 color='707070'><b>Press Coverage</b></font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td nowrap colspan=2 align=center><font size='2.75' color='707070'>Contact Joe Miller by <b>email:</b> miller@ziligence.com or <b>phone:</b> (415) 407-9779 with inquiries</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='000000'><b>News Articles:</b></font></td>
    <td width=$_w1%></td>
</tr>$_blank_row$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>Ziligence Releases Beta 2.0 of Fundamental Data Service</font></td>
    <td colspan=1 align=right><font size=2.50 color='707070'>July 02, 2012 $vsp <b>Inside Market Data</b> $vsp $story_1</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3 color='000000'><b><br><br><br>Press Releases (Blog Posts):</b></font></td>
    <td width=$_w1%></td>
</tr>$_blank_row$_blank_row

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>Ziligence is now a free open sourced site</font></td>
    <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>August 17, 2012 $vsp <b>Press Release</b> $vsp $blog_13</font></td>
    <td width=$_w1%></td>
</tr>


<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>Ziligence concludes beta testing</font></td>
    <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>August 12, 2012 $vsp <b>Press Release</b> $vsp $blog_12</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>Ziligence at a glance</font></td>
    <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>July 19, 2012 $vsp <b>Press Release</b> $vsp $blog_11</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>Ziligence releases a demo video</font></td>
    <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>July 14, 2012 $vsp <b>Press Release</b> $vsp $blog_10</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>Ziligence is ready to disrupt</font></td>
    <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>July 14, 2012 $vsp <b>Press Release</b> $vsp $blog_9</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>Ziligence's processing speed is now 3x faster</font></td>
    <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>July 03, 2012 $vsp <b>Press Release</b> $vsp $blog_8</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>The founding story of Ziligence</font></td>
    <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>July 03, 2012 $vsp <b>Press Release</b> $vsp $blog_7</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>Ziligence is diligence with a 'Z'</font></td>
    <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>June 29, 2012 $vsp <b>Press Release</b> $vsp $blog_6</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>A closer look at how Ziligence works</font></td>
    <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>June 28, 2012 $vsp <b>Press Release</b> $vsp $blog_4</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>Ziligence launches beta version 2.0 on June 21, 2012</font></td>
    <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>June 21, 2012 $vsp <b>Press Release</b> $vsp $blog_3</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>Ziligence is the affordable solution for financial research</font></td>
    <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>May 15, 2012 $vsp <b>Press Release</b> $vsp $blog_2</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=1 align=left><font size=3 color='707070'>Ziligence launches private beta on May 1, 2012</font></td>
     <td colspan=1 align=right valign=bottom><font size=2.50 color='707070'>May 01, 2012 $vsp <b>Press Release</b> $vsp $blog_1</font></td>
    <td width=$_w1%></td>
</tr>

<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=2.50><br><br>View our $blogZiligence or $collateral1a or $slideDeck1a or $faq page to see the latest product updates, get a closer look at our features, and learn more about our company.&nbsp;&nbsp;Also, read the company's profile on $_linkedin1 and $_crunchbase1, and our founder's profile on $_linkedin2 and $_crunchbase2.</font></td>
    <td width=$_w1%></td>
</tr>
<tr>
    <td width=$_w1%></td>
    <td colspan=2 align=left><font size=3></font></td>
    <td width=$_w1%></td>
</tr>

</table>
</div>
";

$product_screen = '<html><title>Press Coverage</title>'.$ziligence_header.$body_1.$ziligence_footer.'</html>';
sleep(1); echo $product_screen;

?>


