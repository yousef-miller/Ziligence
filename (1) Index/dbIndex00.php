<?php						//standard html blocks

if ($_GET[user] == 'admin') {header("Location: $_aws/myLogin.php?logout=1");} 

$sp2 = '&nbsp;&nbsp;';
$sp6 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$vsp = "<font color='white' size='2'>$sp6|$sp6</font>";
$hdr_style = "style='background-color:#000066;height:2px;'";
$bdr = "style='border-top:1px solid'"; $bdr_2 = "style='border-bottom:1px solid'";
$div_padding = "<div style='padding-left:75px;'>";
$div_padding2 = "<div style='padding-left:300px;'>";
$_mission = 'Enable you to make better decisions by providing useful and reliable information as quickly as possible.';

$_url = $_SERVER['REQUEST_URI']; 
$_hdr_link_2 = (strpos($_url, '?') !== false) ? substr($_url, strpos($_url, '?') + 1) : "user=$_GET[user]&tkr=$_GET[tkr]";
if (empty($_GET[tkr])) {
    $x1 = $today_y - 1; 
    $x2 = "&period%5B%5D=$today_y&period%5B%5D=$x1&qtr%5B%5D=FY";
    $_hdr_link_2 = "user=$_GET[user]&tkr=MMM%09&stmt%5B%5D=1&type=1".$x2."&optionr%5B%5D=1&view=$_GET[view]";
} //end if
if (!empty($_hdr_link_2)) {$_url = str_replace($_hdr_link_2, '', $_url);}

if (++$_qcount == 1 && strpos($_url, 'ACQquery') === false && strpos($_url, 'ESTquery') === false) {
    if (!empty($_POST[qtkr])) {$_qticker = trim($_POST[qtkr]); include($php.'dbIndex04.php');}				//search box query for ticker
    elseif (!empty($_POST[qkword])) {$_qkword = trim($_POST[qkword]); include($php.'mySICquery.php');}	//keyword
} //end if	

$learnMore = "<a href=$_aws/ziligence2.php>Learn More</a>$sp6";
$readMore_1 = "<a href=$_aws/ziligence4.php>Read More</a>";
$readFAQ = "<a href=$_aws/myFAQ.php>Read FAQ</a>$sp6";
$requestTrial = "$sp6<a href=$_aws/ziligence3.php>Get Started Now</a>";
$createAcct = "<a href=$_aws/ziligence3.php>Create New Account</a>";
$aboutZiligence = "<a href=$_aws/ziligence5.php>About</a>";
$aboutMiller = "<a href=$_aws/miller.php>Read more about Joe</a>";
$videoZiligence = "<a href=$_aws/ziligence.php?video=true>Demo Video</a>";
$homeZiligence = "<a href=$_aws/ziligence.php>Home</a>";
$homeZiligence_2 = "<a href=$_aws/ziligence.php><font color='white' size='2'>Home</font></a>";				//for FAQ page
$contactZiligence = "<a href=$_aws/ziligence6.php>Contact</a>";
$pressZiligence = "<a href=$_aws/myPress.php>Press</a>";
$blogZiligence = "<a href=http://ziligence.wordpress.com target=_blank>Blog</a>";
$slideDeck1 = "<a href=$_s3bucket/ZiligenceSlideDeck.pdf target=_blank>Download Slide Deck</a>";
$slideDeck1a = "<a href=$_s3bucket/ZiligenceSlideDeck.pdf target=_blank>slide deck</a>";
$collateral1 = "<a href=$_s3bucket/MarketingCollateral.pdf target=_blank>View PDF Brochure</a>$sp6";
$collateral1a = "<a href=$_s3bucket/MarketingCollateral.pdf target=_blank>product brochure</a>";
$gitHub = "<a href=https://github.com/yousef-miller target=_blank>GitHub</a>";

$_linkedin1 = 'http://www.linkedin.com/company/ziligence';
$_crunchbase1 = 'http://www.crunchbase.com/company/ziligence';
$_linkedin2 = 'http://www.linkedin.com/pub/joseph-miller/1a/470/b6b';
$_crunchbase2 = 'http://www.crunchbase.com/person/joe-miller-2';
$_joe_cv = "$_s3bucket/Joe_Miller_CV.pdf";
$_twitter = "http://twitter.com/yousef_miller";

if (strpos($_url, 'manual') !== false) {																//for manual upload pages
    $pos1 = (!empty($pos)) ? $pos - 1 : $_GET[pos] - 1; $pos2 = (!empty($pos)) ? $pos + 1 : $_GET[pos] + 1;
    $_prev = "<a href=$_aws/ziligence_manual0.php?user=$_GET[user]&tkr=$_tkr&pos=$pos1><font color='white' size='2'>Previous</font></a>";
    $_next = "<a href=$_aws/ziligence_manual4.php?user=$_GET[user]&tkr=$_tkr&pos=$pos2><font color='white' size='2'>Next</font></a>";
    $_zLink = $_prev.$vsp.$_next;
} //end if
else {
    $_logout = "<a href=$_aws/ziligence.php?logout=1><font color=white size='2'>Logout</font></a>";
    $_login = "<a href=$_aws/myLogin.php><font color=white size='2'>Login</font></a>";
    $_summary = "<a href=$_aws/mySite_home.php?$_hdr_link_2><font color='white' size='2'>Summary</font></a>";
    $_detail = "<a href=$_aws/mySQLquery.php?$_hdr_link_2><font color='white' size='2'>Detail</font></a>";

    $_home = "<a href=$_aws/mySICquery.php?$_hdr_link_2><font color='white' size='2'>Home</font></a>";
    $illegal = array('&view=', '&view=1', '&view=2'); 
    $_x1 = str_replace($illegal, '', $_hdr_link_2); $_x2 = (!empty($_GET[view])) ? $_GET[view] : '3';
    $_home_1 = ($_x2 == '1') ? '<b>All Tickers</b>' : "<a href=$_aws/mySICquery.php?$_x1&view=1>All Tickers</a>";		//all ticker view
    $_home_2 = ($_x2 == '2') ? '<b>S&P500</b>' : "<a href=$_aws/mySICquery.php?$_x1&view=2>S&P 500</a>";			//s&p 500 view
    $_home_3 = ($_x2 == '3') ? '<b>Demo List</b>' : "<a href=$_aws/mySICquery.php?$_x1&view=3>Demo List</a>";		//demo list view
    $_home_4 = ($_x2 == '4') ? '<b>Search History</b>' : "<a href=$_aws/mySICquery.php?$_x1&view=4>Search History</a>";	//custom list view

    $_x =(!empty($_GET[user])) ? "myFAQ.php?$_hdr_link_2" : "myFAQ.php";
    $_faq = "<a href=$_aws/$_x><font color='white' size='2'>FAQ</font></a>$vsp";
    $_faq = (strpos($_url, 'faq') !== false) ? '' : $_faq;

    $_acq = "<a href=$_aws/myACQquery.php?$_hdr_link_2><font color='white' size='2'>M&A</font></a>$vsp";
    $_acq_show_all = "<a href=$_aws/myACQquery.php?$_hdr_link_2><font size='1.50'>Show All</font></a>";

    $_zLink = (strpos($_url, 'SICquery') !== false) ? $_acq.$_faq.$_logout : '';									//for SICquery page
    $_zLink = (strpos($_url, 'ACQquery') !== false) ? $_home.$vsp.$_faq.$_logout : $_zLink;						//for ACQquery page
    $_zLink = (strpos($_url, 'ESTquery') !== false) ? $_home.$vsp.$_acq.$_logout : $_zLink;						//for ESTquery page
    $_zLink = (strpos($_url, 'myFAQ') !== false && !empty($_GET[user])) ? $_home.$vsp.$_logout : $_zLink;		//for myFAQ page (private)
    $_zLink = (strpos($_url, 'myFAQ') !== false && empty($_GET[user])) ? $homeZiligence_2.$vsp.$_login : $_zLink;	//for myFAQ page (public)
    $_zLink = (strpos($_url, 'SQLquery') !== false) ? $_home.$vsp.$_summary.$vsp.$_acq.$_logout : $_zLink;			//for SQLquery page
    $_zLink = (strpos($_url, 'ziligence') !== false) ? $_faq.$_login : $_zLink;										//for ziligence (public) pages)
    $_zLink = (strpos($_url, 'editor') !== false) ? $_home.$vsp.$_faq.$_logout : $_zLink;							//for after editor is processed
    $_zLink = (strpos($_url, 'home') !== false) ? $_home.$vsp.$_detail.$vsp.$_acq.$_logout : $_zLink;				//for summary page
    $_zLink = (empty($_zLink)) ? $_faq.$_login : $_zLink;													//for ziligence (public) pages)

    $x = "
	<script type='text/javascript'>
	    window.onload = function(){var text_input = document.getElementById ('myTextInput'); text_input.focus (); text_input.select ();}
	</script>	
	<style type='text/css'>form {display : inline;}</style>
	<form id='qtkr' action='' method='post' accept-charset='UTF-8'>
	    <input type='text' name='qtkr' id='qtkr' maxlength='4' size='6' value='Ticker' onClick='this.select()' />
	</form>$vsp
	<form id='qkword' action='' method='post' accept-charset='UTF-8'>
	    <input type='text' name='qkword' id='qkword' maxlength='40' size='20' value='Keyword Search' onClick='this.select()' />
	</form>
	";
    //ticker search box & keyword search box
    $_zLink = (stripos($_url, 'query') !== false) ? $x.$vsp.$_zLink : (stripos($_url, 'home') !== false) ? $x.$vsp.$_zLink : $_zLink;
} //end else

$_GOOGLE = "
<script type='text/javascript'>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31379163-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
";

$_SOCIAL = "
<!-- LinkedIn button -->
<script src='//platform.linkedin.com/in.js' type='text/javascript'></script>
<script type='IN/CompanyProfile' data-id='2636710' data-format='hover' data-related='false' data-text=''></script>
</br><!-- Twitter button -->
<a href='https://twitter.com/ziligence' class='twitter-follow-button' data-show-count='false'>Follow @ziligence</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
</br><!-- Facebook button -->
<fb:like href='http://www.ziligence.com' send='false' width='50' show_faces='false'></fb:like>
";

$_w1 = "20"; 
$_w1 = (strpos($_url, 'query') !== false) ? "5" : $_w1; 	
$_w1 = (strpos($_url, 'editor') !== false) ? "5" : $_w1; 	
$_w1 = (strpos($_url, 'home') !== false) ? "5" : $_w1; 	
$_w2 = (100 - ($_w1 * 2)) / 2;
$_route = (strpos($_url, '?') !== false) ? "mySICquery.php?$_hdr_link_2" : 'ziligence.php';

$ziligence_header = "
<style type='text/css'>
    body {margin:0; padding:0; font-family: times;}
</style>
$_GOOGLE
<div align=center>
    <table width=100% cellspacing=0>
    	<tr $hdr_style>
	    <td nowrap width=$_w1%></td>
	    <td nowrap align='left' valign='middle' width=$_w2%>
		<a href=$_aws/$_route><font color='white' size='5.75'>ziligence</font></a>
	    </td>
	    <td nowrap align='right' valign='middle' width=$_w2%>$_zLink</td>
	    <td nowrap width=$_w1%></td>
	</tr>
    </table>
</div><br>
";

$eform = "
    <form id='register' action='$_aws/ziligence_newsletter.php' method='post' accept-charset='UTF-8'>
    <input type='submit' name='submit' id='submit' value='Newsletter'/>
    <input type='text' name='eform' id='eform' maxlength='50' size='20' value='Email Address' />
    </form>
";

$ziligence_footer = "
<!-- Facebook JS -->
<div id='fb-root'></div>
    <script>(function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = '//connect.facebook.net/en_US/all.js#xfbml=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook JS -->

<div align=left>
    <style type='text/css'>form {display:inline;}</style>
    <table width=100% cellspacing=0>
	<tr>
	    <td nowrap align='right' width=$_w1%>&nbsp;</td>
	    <td nowrap align = 'right' colspan='1'>
		<font size='2.50' color='707070'>
		    <br>$homeZiligence $sp2 | $sp2 $aboutZiligence $sp2 | $sp2 $contactZiligence $sp2 
		    | $sp2 $blogZiligence $sp2 | $sp2 $pressZiligence $sp2 | $sp2 $eform $sp2 | $sp2<br>
	    	</font>
	    </td>
	    <td nowrap align='left' colspan='1'>$_SOCIAL</td>
	    <td nowrap align='left' width=$_w1%>&nbsp;</td>
 	</tr>
    </table>
</div><br><br><br><br><br>
";

$css_hyperlink = "
<style> 
    <!-- 
	a:link {text-decoration: none; color: #0000ff} 
	a:visited {text-decoration: none; color: #0000ff} 
	a:hover {text-decoration: none; color: #ff0000} 
/    /--> 
</style>
";

$form_1 = "
<div align=center>
    <table width=100% cellspacing=0>
    <form id='register' action='$_path' method='post' accept-charset='UTF-8'>
";

$form_2 = "
<tr>
    <td nowrap colspan=1 width=5% align=left>&nbsp;</td>
    <td colspan=2 align=left width=95%><input type='submit' name='submitforms' id='submitforms' value='Submit Forms'/>
</tr>
</form>
</table>
</div>
";

?>