<?
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Dreamfields Pasta, Sign up for offers and recipes by email</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta http-equiv="title" content="Dreamfields Pasta, Sign up for offers and recipes by email ">
<meta name="description" content="Get coupons, recipes, and more via email from Dreamfields Pasta">
<meta name="keywords" content="dreamfields, pasta, low carb, carbs, healthy, recipes, diet, diabetes, glycemic, high fiber, receipe, dreamfeild, coupon, offers, barilla">
<meta name="keyphrases" content="dreamfields low carb pasta, free pasta recipes, healthy living, diabetic info, buy dreamfields pasta online, dreamfields pasta coupon, free dreamfields pasta email, free recipes, free grocery coupons, dreamfields offers, dreamfields privacy policy, family nutrition, healthier cooking, healthy living info, dieting, low carb dieting, low carb diet, brad Schoenfeld, minneapolis diabetes expo">
<style type="text/css">
#email_thumb{
float:right;
width:250px;
}
</style>
<!-- psata -->
<script language="JavaScript" type="text/JavaScript" src="jscripts/checkform.js"></script>
<script language="javascript" type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
function NewWindow(mypage, myname, w, h, scroll) {
var winl = (screen.width - w) / 2;
var wint = (screen.height - h) / 2;
winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scroll+',noresize'
win = window.open(mypage, myname, winprops)
if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
}

function checkOptIn() {
	document.getElementById("rec").value = String(document.getElementById("unsubChk").checked);
	return true;
}
</script>
</head>
<body>
<div align="center">
  <table width="765" cellpadding="1" cellspacing="0" border="0" bgcolor="#000000">
    <tr>
      <td><?include("inc_header02.html")?></td>
    </tr>
    <tr>
      <td><table width="763" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff">
          <tr>
            <?include("inc_mainNav.html")?>
          </tr>
          <tr>
            <td><table width="763" cellpadding="0" cellspacing="0" border="0">
                <tr>
                  <td width="189" align="left" valign="top" class="sideBarBG"><table width="189" cellpadding="0" cellspacing="0" border="0">
                      <?include("inc_sideLeft.html")?>
                    </table></td>
                  <td width="574" align="left" valign="top"><table width="574" cellpadding="0" cellspacing="0" border="0">
                      <tr>
                        <td><div class="marg_10px">
                            <h1>Tell us about yourself...</h1>
                            <div id="email_thumb"><a href="low-carb-email.html" target="_blank" onclick="NewWindow(this.href,'NewsletterExample','640','550','yes');return false;"><img src="images/email_example04.jpg" alt="View a sample newsletter" border="0" align="middle"></a>
<!-- a href="low-carb-email.html" onclick="NewWindow(this.href,'NewsletterExample','640','550','yes');return false;">Click to read a sample newsletter</a -->
<div style="margin-top:25px;margin-left:50px;"><p><form name="unsub" id="unsub"><input type="checkbox" name="unsubChk" id="unsubChk" value="false"><span style="font-size:smaller">I would rather not receive email<br> with savings, recipes, and offers <br>(you can unsubscribe at any time).</span></form>
</p></div>								  <br>
                              </div>
                            <form action="lander_proxy.php" name="optionsForm" id="optionsForm" method="post" onSubmit="return checkOptIn();">
								<input type="hidden" name="rec" id="rec" value="">
                              <p>
                                <strong>What customer group is most like you?</strong><br>
                                <br>
                                <input name="group" type="radio" value="Low Carb Diet">
                                <span class="content_11px">Low Carb Diet</span>&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                <input name="group" type="radio" value="Managing Diabetes">
                                <span class="content_11px">Managing Diabetes</span>&nbsp;&nbsp;<br>
                                <input name="group" type="radio" value="Eat Healthier">
                                <span class="content_11px">Eat Healthier</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                <!-- input name="group" type="radio" value="false">
                                <span class="content_11px">I do not want an email newsletter</span><br -->
                                <br>
                                <!-- strong>How would you like to receive your coupon?</strong><br>
                                <br>
                                <input name="coupon" type="radio" value="print" checked>
                                <span class="content_11px">Download and print now</span>&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                <input name="coupon" type="radio" value="mail">
                                <span class="content_11px">Regular mail</span>&nbsp;&nbsp;<br>
                                <br -->
								<strong>What is your zip code?</strong><br>
                                <input name="zipcode" type="text" class="txtBoxStyle1" ID="zipcode" size="9">
								
								<p>
								<input name="submit" type="image" src="images/btn_ContinueWhiteBG.gif" value="SUBMIT" />
								</p>
                              </p>
                            </form>
                          </div></td>
                      </tr>
                      <tr>
                        <td colspan="2"><table width="574" cellpadding="5" cellspacing="0" border="0">
                            <tr>
                              <?include("inc_footerNav.html")?>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td colspan="2"><img src="images/corner_white.gif" alt="" width="574" height="17" border="0"></td>
                      </tr>
                    </table></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
  </table>
  <div id="footerBar"> </div>
</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2425619-1";
urchinTracker();
</script>
</body>
</html>