<?php 
	//setcookie('count', 'true', strtotime('+90 days'),'/','.trydreamfields.com');
	
	$cookie = 1;
	$showSignup = 1;
	
    if (!isset($HTTP_COOKIE_VARS['count']))
    {
        //$message = "Welcome! This is the first time you have viewed this page.";

        setcookie('count', $cookie, strtotime('+90 days'),'/','.trydreamfields.com');
    }
    else
    {
        $cookie = ++$_COOKIE['count'];
        setcookie('count', $cookie, strtotime('+90 days'),'/','.trydreamfields.com');
        
		//$message = "You have viewed this page " . $_COOKIE['count'] . " times.";
		
		if ($_COOKIE['count'] <= 3) {
			$showSignup = 1;
		} else {
			$showSignup = 0;
		}
		
	}// end else  
	
	
	
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Sign Up for Email from Deliciously Healthy Dreamfields Pasta</title>
<link href="../css/main_drm232.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../jscripts/swfobject.js"></script>
<script src="../jscripts/jquery-1.2.6.min.js" type="text/javascript"></script>
<script src="../jscripts/popup.js" type="text/javascript"></script>
<script language="Javascript" type="text/javascript">
<!--

function clearText(thefield){
if (thefield.value=="Enter Your Email Address")
thefield.value = ""
}

function redoText(thefield){
if ((thefield.value=="Enter Your Email Address") || (thefield.value == ""))
thefield.value = "Enter Your Email Address"
}

function clearZip(thefield){
if (thefield.value=="Enter Your Zip Code")
thefield.value = ""
}

function redoZip(thefield){
if ((thefield.value=="Enter Your Zip Code") || (thefield.value == ""))
thefield.value = "Enter Your Zip Code"
} 

// select "group" radio button
function whichGroup() {
  
  if (document.forms[0].group_LowCarb.checked) {
	theGroup = "Low Carb Diet";
  }	else if (document.forms[0].group_ManagingDiabetes.checked) {
	theGroup = "Managing Diabetes";  
  } else if (document.forms[0].group_EatHealthier.checked) {
	theGroup = "Eat Healthier";
  }
  document.getElementsByName('group').value = theGroup;
  valGroup = document.getElementsByName('group').value;
  //alert(valGroup);
  //alert(theGroup);
  
}

// non-empty Full Name
function isEmptyFullName(strng) {
var error = "";
  if (strng.length == 0) {
     error = "Please fill in your Full Name.\n"
  }
return error;
}

// Zip Code
function checkZip (strng) {
var error="";
  if (strng == "" || strng == "Enter Your Zip Code") {
     error = "You didn't enter a Zip Code.\n";
  } 
return error;
}

// email
function checkEmail (strng) {
var error="";
  if (strng == "") {
     error = "You didn't enter an Email Address.\n";
  } else {
    var emailFilter=/^.+@.+\..{2,3}$/;
    if (!(emailFilter.test(strng))) {
       error = "Please enter a valid Email Address.\n";
    } else {
      //test email for illegal characters
      var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/
      if (strng.match(illegalChars)) {
         error = "The Email Address contains illegal characters.\n";
      }
    }
  }
return error;
}

function checkWholeForm() {
    var why = "";
	//why += isEmptyFullName(document.subscribeForm.elements['Full Name'].value);
	why += checkEmail(document.subscribeForm.elements['email'].value);
	why += checkZip(document.subscribeForm.elements['zip'].value);
	
	if (document.forms[0].group_LowCarb.checked) {
	  //good
    } else if (document.forms[0].group_ManagingDiabetes.checked) {
      //good 
    } else if (document.forms[0].group_EatHealthier.checked) {
	  //good
    } else {
	  why += "Please select a customer group.\n";	
	}
	
	if (why != "") {
       alert(why);
       return false;
    } else {
		document.getElementById("optout").value = String(document.getElementById("unsubChk").checked);
		return true;
	}
	return false;
}

				$(document).ready(function() {
					fadeLevel = 1.0;
					fadeLevelB = 0.3;
					$("#recipe1wrap").bind("mouseenter",function() {
											if(typeof(recipe_timer1) !== 'undefined') {
												clearTimeout(recipe_timer1);
												clearTimeout(recipe_timer1b);
												recipe_timer1 = undefined;
												recipe_timer1b = undefined;
											} else {
												$("#recipe1 > #bg").css("opacity",0).css("visibility","visible").fadeTo("normal", fadeLevelB);	
												$("#recipe1 > #text").css("opacity",0).css("visibility","visible").fadeTo("normal", fadeLevel);	
											}
										}).bind("mouseleave",function() {
												recipe_timer1b = setTimeout("$('#recipe1 > #bg').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer1b); recipe_timer1b = undefined;", 300);
												recipe_timer1 = setTimeout("$('#recipe1 > #text').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer1); recipe_timer1 = undefined;", 300);
										});
					$("#recipe1").bind("mouseenter", function(){
											clearTimeout(recipe_timer1);
											clearTimeout(recipe_timer1b);
											recipe_timer1 = undefined;
											recipe_timer1b = undefined;
											$("#recipe1wrap").unbind("mouseleave");
									}).bind("mouseleave", function() {
										recipe_timer1b = setTimeout("$('#recipe1 > #bg').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer1b); recipe_timer1b = undefined;", 300);
										recipe_timer1 = setTimeout("$('#recipe1 > #text').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer1); recipe_timer1 = undefined;", 300);
										$("#recipe1wrap").bind("mouseleave", function() {
												recipe_timer1b = setTimeout("$('#recipe1 > #bg').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer1b); recipe_timer1b = undefined;", 300);
												recipe_timer1 = setTimeout("$('#recipe1 > #text').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer1); recipe_timer1 = undefined;", 300);
										});
					});
					
					$("#recipe2wrap").bind("mouseenter",function() {
											if(typeof(recipe_timer2) !== 'undefined') {
												clearTimeout(recipe_timer2);
												clearTimeout(recipe_timer2b);
												recipe_timer2 = undefined;
												recipe_timer2b = undefined;
											} else {
												$("#recipe2 > #bg").css("opacity",0).css("visibility","visible").fadeTo("normal", fadeLevelB);	
												$("#recipe2 > #text").css("opacity",0).css("visibility","visible").fadeTo("normal", fadeLevel);	
											}
										}).bind("mouseleave",function() {
												recipe_timer2b = setTimeout("$('#recipe2 > #bg').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer2b); recipe_timer2b = undefined;", 300);
												recipe_timer2 = setTimeout("$('#recipe2 > #text').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer2); recipe_timer2 = undefined;", 300);
										});
					$("#recipe2").bind("mouseenter", function(){
											clearTimeout(recipe_timer2);
											clearTimeout(recipe_timer2b);
											recipe_timer2 = undefined;
											recipe_timer2b = undefined;
											$("#recipe2wrap").unbind("mouseleave");
									}).bind("mouseleave", function() {
										recipe_timer2b = setTimeout("$('#recipe2 > #bg').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer2b); recipe_timer2b = undefined;", 300);
										recipe_timer2 = setTimeout("$('#recipe2 > #text').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer2); recipe_timer2 = undefined;", 300);
										$("#recipe2wrap").bind("mouseleave", function() {
												recipe_timer2b = setTimeout("$('#recipe2 > #bg').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer2b); recipe_timer2b = undefined;", 300);
												recipe_timer2 = setTimeout("$('#recipe2 > #text').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer2); recipe_timer2 = undefined;", 300);
										});
					});
					
					$("#recipe3wrap").bind("mouseenter",function() {
											if(typeof(recipe_timer3) !== 'undefined') {
												clearTimeout(recipe_timer3);
												clearTimeout(recipe_timer3b);
												recipe_timer3 = undefined;
												recipe_timer3b = undefined;
											} else {
												$("#recipe3 > #bg").css("opacity",0).css("visibility","visible").fadeTo("normal", fadeLevelB);	
												$("#recipe3 > #text").css("opacity",0).css("visibility","visible").fadeTo("normal", fadeLevel);	
											}
										}).bind("mouseleave",function() {
												recipe_timer3b = setTimeout("$('#recipe3 > #bg').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer3b); recipe_timer3b = undefined;", 300);
												recipe_timer3 = setTimeout("$('#recipe3 > #text').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer3); recipe_timer3 = undefined;", 300);
										});
					$("#recipe3").bind("mouseenter", function(){
											clearTimeout(recipe_timer3);
											clearTimeout(recipe_timer3b);
											recipe_timer3 = undefined;
											recipe_timer3b = undefined;
											$("#recipe3wrap").unbind("mouseleave");
									}).bind("mouseleave", function() {
										recipe_timer3b = setTimeout("$('#recipe3 > #bg').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer3b); recipe_timer3b = undefined;", 300);
										recipe_timer3 = setTimeout("$('#recipe3 > #text').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer3); recipe_timer3 = undefined;", 300);
										$("#recipe3wrap").bind("mouseleave", function() {
												recipe_timer3b = setTimeout("$('#recipe3 > #bg').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer3b); recipe_timer3b = undefined;", 300);
												recipe_timer3 = setTimeout("$('#recipe3 > #text').fadeTo('normal', 0).css('visibility', 'hidden'); clearTimeout(recipe_timer3); recipe_timer3 = undefined;", 300);
										});
					});
});	
//-->
</script>

<script src="../jscripts/prettyphoto/js/jquery-1.6.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../jscripts/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="../jscripts/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
<a name="toTheTop"></a>
<div id="backgroundPopup"></div>
<div id="popupContact"><a id="popupContactClose">x</a> <img src="../images/chart_servingSize_v01.gif" width="267" height="249" border="0"></div>
<div id="wrap">
  <div id="header">
    <div id="row01"><img src="../images/DRM188/drm188_2013_hd_BringPastaBack.jpg" alt="Bring Pasta Back Into Your Life" width="766" height="106"></div>
    <div id="row02">
      <div id="left"><img src="../images/DRM188/drm188_2013_largeImageA.jpg" alt="Bring Pasta Back Into Your Life" width="383" height="481"></div>
      <div id="right"><img src="../images/DRM188/drm188_2013_hd_Enjoy.gif" alt="Enjoy a Taste of Summer with the Dreamfields 3rd Annual Pastapalooza Pasta Salad Contest" width="383" height="132" border="0"><br>
        <img src="../images/DRM188/drm188_2013_creamBG.jpg" alt="- Dreamfields is working with America's top bloggers to create the tastiest ways to celebrate Summer with pasta salad. - Check in with Dreamfields every Friday at noon on Facebook or Twitter to get the latest pasta salad creation. This could be the hit at your next gathering or weekday lunch!" width="383" height="349"></div>
      <div class="clear"> 
        <!-- clear --> 
      </div>
    </div>
    
  </div>
  <div id="bodyArea">
    
    
    <?php
	if ($showSignup) {
    ?>
    <div style="width:726px; margin:0 auto 0px auto;">
      
      <div><img src="../images/drm188_2013_hd_GetCoupon.gif" alt="Get a Dreamfields coupon to get started on your pasta salad today!" width="638" height="23"></div>
      
      <div style="margin:18px 0 0 0;">
        <div style="width:406px; float:left;">
        
          
          <form action="../lander_proxy_withZipNEW2.php" name="subscribeForm" id="subscribeForm" method="POST" onSubmit="return checkWholeForm();" style="margin:0; padding:0;">
          <!-- (2013/05/02 ... My Lists > 2010_Landing_Pages > TryDrm_Landing_Pages > Pasta Salad -->
          <input type="hidden" name="MID" value="13846" />
          <input type="hidden" name="lid" value="17347872" />
          <!-- Use the correct Thanks and Error pages below (use absolute URLs, with the domain name) -->
          <input type="hidden" name="thx" value="http://www.trydreamfields.com/coupon-thanks-1D.php" />
          <input type="hidden" name="err" value="http://www.dreamfieldsfoods.com/error.html" />
          <!-- Source / Group-->
          <input type="hidden" name="source" value="PastaSalad">
          <input type="hidden" name="group" value="Eat Healthier">
          <!-- do not send triggered email -->
          <input type="hidden" name="trigger" value="yes">
          <input type="hidden" name="optout" id="optout" value="false">
          
          <div id="form" style="">
            <input name="email" type="text" id="email" size="30" class="txtBoxStyle1" value="Enter Your Email Address" style="width:180px; margin:0px 0 14px 0;" onFocus="clearText(this)" onBlur="redoText(this)"><br>


            Please select the customer group 
            that is most like you. <br>
            <input type="radio" name="group" id="group_LowCarb" value="Low Carb Diet" class="radioBtnAlpha" onChange="whichGroup();" style="margin:4px 0 0px 0px; padding:0px 0 0 0;" />
            <label for="group_LowCarb" class="radio" style="margin:0px 0 0px 0px;">Low Carb Diet</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="group" id="group_ManagingDiabetes" value="Managing Diabetes" class="radioBtn" onChange="whichGroup();" style="margin:0px 0 0px 0px;" />
            <label for="group_ManagingDiabetes" class="radio" style="margin:0px 0 0px 0px;">Managing
              Diabetes</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="group" id="group_EatHealthier" value="Eat Healthier" class="radioBtn" onChange="whichGroup();" style="margin:0px 0 0px 0px;" />
            <label for="group_EatHealthier" class="radio" style="margin:0px 0 0px 0px;">Eat Healthier</label>
            <br>
            <input name="zip" type="text" id="zip" size="30" class="txtBoxStyle1" value="Enter Your Zip Code" style="width:180px; margin:14px 0 0 0;" onFocus="clearZip(this)" onBlur="redoZip(this)">
            <div id="unsub" style="margin:14px 0 14px 0;">
              <div id="checkbox" style="width:20px; float:left;">
                <input type="checkbox" name="unsubChk" id="unsubChk" value="false" style="margin:0px 0 0 0; padding:0;">
              </div>
              <div id="text" style="width:250px; float:left;">
                <label for="unsubChk">Opt-out of future emails from Dreamfields</label>
              </div>
              <div class="clear">
                <!-- clear -->
              </div>
            </div>
            
            <input name="submit" type="image" style="margin:0 0 2px 0; outline:none; float:left;" value="SUBMIT" src="../images/DRM188/drm188_2013_btn_PrintMyCoupon.gif" alt="Print My Coupon!">
            
            <div id="privacyPolicy" style="width:90px; float:left; margin:14px 0 0 10px;"><a href="http://www.dreamfieldsfoods.com/privacy-policy.html" target="_blank"><strong>Privacy Policy</strong></a></div>
            
          </div>
        </form>
          
        
        </div>
        <div style="width:320px; float:left;"><img src="../images/DRM188/drm188_2013_Get1Off.jpg" alt="Get $1.00 Off Any Box of Dreamfields Pasta" width="324" height="206"></div>
        <div class="clear"> 
        <!-- clear --> 
      </div>
      </div>
      
    </div>
    
    <?php
	} // endif
    ?>
    
    
    <div id="row01">
      <div id="hd01"><img src="../images/DRM232/drm232_hd_01.gif" width="256" height="63" alt="5g of Fiber"></div>
      <div id="hd02"><img src="../images/DRM232/drm232_hd_02.gif" width="244" height="63" alt="7g of Protein"></div>
      <div id="hd03"><img src="../images/DRM232/drm232_hd_03.gif" width="264" height="63" alt="Taste and Texture of Traditional Pasta"></div>
    </div>
    <div id="row02">
      <div id="rec01">
        <div id="recipe1wrap"><a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2010/11/butternut-squash-linguine.html"><img src="../images/DRM232/drm232_pho_1.jpg" alt="Butternut Squash &amp; Linguine" width="236" height="156" border="0"></a></div>
        <div id="recipe1">
          <div id="text" class="recipe_layerText">
            <div align="center"><a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2010/11/butternut-squash-linguine.html">Butternut Squash &amp; Linguine&nbsp;</a></div>
          </div>
          <div id="bg" class="recipe_layer"></div>
        </div>
      </div>
      <!-- end recipe 1 -->
      <div id="rec02">
        <div id="recipe2wrap"><a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2011/04/asian-pork-pasta.html"><img src="../images/DRM232/drm232_pho_2.jpg" alt="Asian Pork &amp; Pasta" width="236" height="156" border="0"></a></div>
        <div id="recipe2">
          <div id="text" class="recipe_layerText">
            <div align="center"><a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2011/04/asian-pork-pasta.html">Asian Pork &amp; Pasta&nbsp;</a></div>
          </div>
          <div id="bg" class="recipe_layer"></div>
        </div>
      </div>
      <!-- end recipe 2 -->
      <div id="rec03">
        <div id="recipe3wrap"><a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2013/03/spicy-hoisin-glazed-salmon-spaghetti.html"><img src="../images/DRM232/drm232_pho_3.jpg" alt="Spicy Hoisin Glazed Salmon" width="236" height="156" border="0"></a></div>
        <div id="recipe3">
          <div id="text" class="recipe_layerText">
            <div align="center"><a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes/2013/03/spicy-hoisin-glazed-salmon-spaghetti.html">Spicy Hoisin Glazed Salmon&nbsp;</a></div>
          </div>
          <div id="bg" class="recipe_layer"></div>
        </div>
      </div>
      <!-- end recipe 3 -->
      <div class="clear"> 
        <!-- clear --> 
      </div>
    </div>
    <div id="row03">
      <div id="bar01" style="text-align:center;">Dreamfields has <a href="http://www.dreamfieldsfoods.com/high-fiber.html">5 grams of fiber</a>, <br>
        an 
      excellent source.</div>
      <div id="bar02" style="text-align:center;">Dreamfields <a href="http://www.dreamfieldsfoods.com/low-carb-pasta.html">tastes like traditional pasta</a> &ndash; <br>
      your family will love it!</div>
      <div id="bar03" style="text-align:center;"><a href="http://vimeo.com/48368862?width=700" rel="prettyPhoto" title="Dreamfields Pasta: Healthy by Design">Watch our video</a> on 
      How <br>
      Dreamfields 
      Pasta Works.</div>
      <div class="clear"> 
        <!-- clear --> 
      </div>
    </div>
    <div id="row04">
      <div id="btn01" style="width:230px; margin:0 14px 0 143px;"><a href="http://www.dreamfieldsfoods.com/recipes-results-salads.html"><img src="../images/DRM188/drm188b_2013_btn_PastaRecipes.gif" alt="Pasta Salad Recipes" width="230" height="37" border="0"></a></div>
      <div id="btn02" style="width:230px; margin:0 14px 0 0;"><a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes.html"><img src="../images/DRM188/drm188b_2013_btn_AllDrmRecipes.gif" alt="All Dreamfields Recipes" width="230" height="37" border="0"></a></div>
      
      <div class="clear"> 
        <!-- clear --> 
      </div>
    </div>
    <div id="row05">
      <div id="disclaimer"> Whether enjoying Dreamfields pasta or other foods, consumers with diabetes
        must carefully monitor blood glucose and have frequent contact with their physician to maintain
        good health. </div>
      <div id="servingSizeLink">
        <div id="button"><a href="#">View serving size information</a></div>
      </div>
      <div class="clear"> 
        <!-- clear --> 
      </div>
    </div>
  </div>
  <div id="footer">
    <div id="row01"><img src="../images/DRM232/drm232_ftr_WhereWould.gif" alt="Where Would You Like To Go Next?" width="766" height="31"></div>
    <div id="row02">
      <div id="btn01"><a href="http://www.dreamfieldsfoods.com/healthy-pasta-recipes.html"><img src="../images/drm170_ftr_btn_Recipes.gif" alt="Recipes" width="199" height="72" border="0"></a></div>
      <div id="btn02"><a href="http://www.dreamfieldsfoods.com/find-dreamfields-pasta.html"><img src="../images/drm144_ftr_btn_FindAStore.gif" alt="Find A Store" width="185" height="72" border="0"></a></div>
      <div id="btn03"><a href="http://www.buydreamfields.com/"><img src="../images/drm144_ftr_btn_BuyOnline.gif" alt="Buy Online" width="185" height="72" border="0"></a></div>
      <div id="btn04"><a href="http://www.dreamfieldsfoods.com/faq-search.php"><img src="../images/drm144_ftr_btn_LearnMore.gif" alt="Learn More" width="197" height="72" border="0"></a></div>
      <div class="clear"> 
        <!-- clear --> 
      </div>
    </div>
    <div id="row03">
      <div id="bar01"><a href="#"><img src="../images/DRM232/drm232_ftr_bar_FindDrm.gif" alt="Find Dreamfields Pasta on" width="270" height="61" border="0"></a></div>
      <div id="bar02"><a href="http://www.facebook.com/dreamfields" target="_blank"><img src="../images/DRM232/drm232_ftr_bar_FB.gif" alt="Facebook" width="58" height="61" border="0"></a></div>
      <div id="bar03"><a href="http://twitter.com/HealthyPasta" target="_blank"><img src="../images/DRM232/drm232_ftr_bar_Tw.gif" alt="Twitter" width="54" height="61" border="0"></a></div>
      <div id="bar04"><a href="http://www.youtube.com/user/DreamfieldsPasta" target="_blank"><img src="../images/DRM232/drm232_ftr_bar_YouTube.gif" alt="YouTube" width="54" height="61" border="0"></a></div>
      <div id="bar05"> 
        <!--<a href="#"><img src="../images/DRM232/drm232_ftr_bar_ST.gif" alt="Share Us With Your Friends!" width="238" height="61" border="0"></a>--> 
        <script type="text/javascript" src="http://w.sharethis.com/button/sharethis.js#publisher=f4078d11-0af1-4091-b34f-110f481e6e75&amp;type=website&amp;post_services=facebook%2Ctwitter%2Cdigg%2Cdelicious%2Cgoogle_bmarks%2Cblogger%2Clinkedin%2Cwindows_live%2Cybuzz%2Cnewsvine%2Cstumbleupon&amp;headerbg=%23002685&amp;linkfg=%23451210&amp;headerTitle=Share%20this%20page%20with%20a%20friend%3A&button=false&embeds=true"></script> 
        <script language="javascript" type="text/javascript">
//Create your sharelet with desired properties and set button element to false
var object = SHARETHIS.addEntry({
title:'share',
summary: 'Sharing is good for the soul.'},
{offsetLeft: -20, offsetTop: -290},
{embeds:true},
{button:false});
//Output your customized button
document.write('<span id="share"><a href="javascript:void(0);"><img src="../images/DRM232/drm232_ftr_bar_ST.gif" alt="Share Us With Your Friends!" width="238" height="61" border="0"></a></span>');
//Tie customized button to ShareThis button functionality.
var element = document.getElementById("share");
object.attachButton(element);
</script> 
      </div>
      <div id="bar06"><a href="#"><img src="../images/DRM232/drm232_ftr_bar_right.gif" alt="" width="92" height="61" border="0"></a></div>
      <div class="clear"> 
        <!-- clear --> 
      </div>
    </div>
  </div>
</div>
<!-- PrettyPhoto start --> 
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script> 
<!-- PrettyPhoto end --> 
<?php include("../inc_GoogAna_v01.shtml");?>
</body>
</html>