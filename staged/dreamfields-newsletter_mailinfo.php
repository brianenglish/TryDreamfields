<?
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
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

function checkForm(){
if (document.subscribeForm.elements['Email Address'].value.length > 0){
 return true;
 }
else{
 alert('Please enter your email address.');
 document.subscribeForm.elements['Email Address'].focus();
 return false;
 }
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
<span class="content12px"><h1>Recieve your Dreamfields Pasta coupon by regular mail</h1></span>
 (Continential USA only)
 <p>One request per household please.  Allow up to 10 business days<br>to recieve you coupon by regular U.S. mail.</p>
 <p>If you want to download and print your coupon with your printer now, <a href="coupon-thanks_print.html">please go here.</a>
<form name="mailinfo" id="mailinfo" method="post" action="dreamfields-newsletter_mail.php">
<table border="0" cellpadding="5" cellspacing="5">
<tr><td><strong>Full name:</strong></td><td><input type="text" name="fn" id="fn" size="20" value=""></td></tr>
<tr><td><strong>Address:
</strong></td>
<td><input type="text" name="ad" id="fn" size="20" value=""></td></tr>
<tr><td><strong>City:</strong></td><td><input type="text" name="cy" id="fn" size="20" value=""></td></tr>
<tr><td><strong>State:</strong></td><td><select name="st" size="1">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">Dist of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select></td></tr>
<tr><td><strong>Zip Code:</strong></td><td><input type="text" name="zp" id="fn" size="10" value=""></td></tr>
</table>
<br>
<input name="submit" type="image" src="images/btn_sendCoupon_v01.gif" value="SUBMIT" />
<input type="hidden" name="user" value="<?=$_GET['user']?>">
<input type="hidden" name="lid" value="<?=$_GET['lid']?>">
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
</body>
</html>
