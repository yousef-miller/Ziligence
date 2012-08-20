
<?php 

$php='/mnt/data/myuser/'; include($php.'dbIndex.php');
include($php.'ziligence5-0.php');
$_w2 = $_w2 * 2;
$_w3 = $_w2 - 15;
$_pad1 = 'style="padding-top: 12px;"';
$_pad2 = 'style="padding-top: 12px; border-top:1px solid"';

$_crunchbase2 = "<a href=$_crunchbase2 target=_blank><font size=2.75>[CrunchBase]</font></a>";
$_linkedin2 = "<a href=$_linkedin2 target=_blank><font size=2.75>[LinkedIn]</font></a>";
$_joe_cv2 = "<a href=$_joe_cv target=_blank><font size=2.75>[CV]</font></a>";
$_joe_cv3 = "<a href=$_joe_cv target=_blank>View Joe's CV</a>";
$_twitter2 = "<a href=$_twitter target=_blank><font size=2.75>[Twitter]</font></a>";

$_link_bar = (strpos($_url, 'miller.php') !== false) ? $_joe_cv3 : "$collateral1|$requestTrial";

$_block = "
    <b>Founder:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Joe Miller&nbsp;$_linkedin2$_crunchbase2$_twitter2$_joe_cv2</br>
    <b>Location:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;San Francisco, CA</br>
    <b>Beta Launch:</b>&nbsp;&nbsp;May 1, 2012</br>
    <b>Site Launch:</b>&nbsp;&nbsp;&nbsp;August 13, 2012</br>
";

$_founder_story1 = "
In early 2011, Joe Miller began developing Ziligence from coffee shops in San Francisco, eventually setting up shop in his garage.&nbsp;&nbsp;He began, like many tech entrepreneurs with enormous passion, a small amount of money, and a clear vision.&nbsp;&nbsp;After reading a quote by Larry Page about the importance of believing in audacious ideas, he was inspired to bring his idea to life.
<br /><br>
Throughout 2010, Joe was applying for financial analyst positions amidst the Great Recession.&nbsp;&nbsp;Many companies were looking for a financial model to be submitted in order to apply.&nbsp;&nbsp;To obtain data for his models, he manually transcribed values from SEC filings into Excel worksheets.&nbsp;&nbsp;Noting his frustration at the absence of an affordable data provider, he saw an opportunity.&nbsp;&nbsp;His passion for programming would merge with his accounting skill set to develop fully automated processing for SEC filings.&nbsp;&nbsp;Over the course of nineteen months he devoted thousands of hours to relentlessly develop his algorithm.&nbsp;&nbsp;Today his algorithm perpetually aggregates data for all U.S. publicly traded companies.  
<br /><br>
Joe's dream wouldn't have been possible without the encouragement and tech wisdom given by Max Ellerhorst, a friend and IT executive in Atlanta.&nbsp;&nbsp;Max has never turned away a phone call from Joe since the start.&nbsp;&nbsp;$aboutMiller.
";

$_founder_story2 = "
My programming skills began developing in 2004 at my first accounting job after college.  I was assigned to a functional team that administered an automated reporting process written in VB.  From the start, I was enthralled by code and determined to learn how to write it myself.  Before and after work each day, I intensely analyzed the scripts, breaking them apart until I could effectively emulate the logic.  Writing code seemed natural to me and quickly became my passion.  From 2003 onward, I avidly developed workplace solutions in VB.  A few projects were assigned by my managers, but mostly were on my own accord and outside of work hours.  My projects were always completed, often used by coworkers, and praised by managers.  It was natural for my peers to question why I wasn't pursuing a career change.  Simply put, my programming knowledge wasn't broad enough, as VB wasn't commonly used.
<br /><br>
Starting in February 2011, I devoted myself to learning new languages, exerting a full effort to make a career change.  I launched Ziligence in August, 2012, a free and open source site for financial research.  The site utilizes an algorithm, which I wrote in PHP, to perpetually dig through the SEC's Edgar website.  It parses financial statements, thus aggregating results into structured mySQL datasets, as quickly as they become available.  While building my site, I learned how to run LAMP (mySQL / PHP) configured instances on Amazon EC2.  Additionally, I spent thousands of hours writing code in PHP and HTML, and grasped the basis for CSS and Javascript.
</br>
<br>
";

$_about_journey = (strpos($_url, 'ziligence5.php') !== false) ? 'About Ziligence:' : 'About My Tech Journey';
$_founder_story = (strpos($_url, 'ziligence5.php') !== false) ? $_founder_story1 : $_founder_story2;
$body_1 = $css_hyperlink."
<div align=center>
<table width=100% cellspacing=0>

<tr>
<td nowrap colspan=1 width=$_w1%>&nbsp;</td>
<td colspan=2 width=$_w2% align=left $bdr_2><font size=4><b>Mission:</b>&nbsp;&nbsp;$_mission</td>
<td nowrap colspan=1 width=$_w1%>&nbsp;</td>
</tr>

<tr>
<td nowrap colspan=1 width=$_w1% $_pad1>&nbsp;</td>
<td colspan=1 width=$_w3% align=left $_pad1><font size=3>$_block</font></td>
<td colspan=1 width=15% align=left $_pad1>&nbsp;</td>
<td nowrap colspan=1 width=$_w1% $_pad1>&nbsp;</td>
</tr>

<tr>
<td nowrap colspan=1 width=$_w1% $_pad1>&nbsp;</td>
<td colspan=1 width=$_w3% align=left $_pad1><font size=3><b>$_about_journey</b></br></font></td>
<td colspan=1 width=15% align=left $_pad1>&nbsp;</td>
<td nowrap colspan=1 width=$_w1% $_pad1>&nbsp;</td>
</tr>

<tr>
<td nowrap colspan=1 width=$_w1%>&nbsp;</td>
<td colspan=1 width=$_w3% align=left valign=top><font size=3>$_founder_story</font></td>
<td colspan=1 width=15% align=left valign=top><img style='padding:10px;' src=$_s3bucket/jmiller2.jpg width='200' height='316' /></td>
<td nowrap colspan=1 width=$_w1%>&nbsp;</td>
</tr>

<tr>
<td nowrap colspan=1 width=$_w1% $_pad1>&nbsp;</td>
<td colspan=2 align=center width=$_w2% $_pad2><font size=4.25>$_link_bar</font></td>
<td colspan=1 width=$_w1 $_pad1>&nbsp;</td>
</tr>

</table>
</div>
";

$story_screen = '<html><title>About Ziligence</title>'.$ziligence_header.$body_1.$ziligence_footer.'</html>';
echo $story_screen;

?>