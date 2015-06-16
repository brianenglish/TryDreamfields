<?php include('lander_addSub_withZip_optin.php'); ?>
<?php
//session_start();
ini_set('display_errors', '1');
ini_set('memory_limit', '256M');
ini_set('max_execution_time', 0);

// Get POST vars
$email = htmlentities($_POST['email']);
$lid = $_POST['lid'];
$zip = $_POST['zip'];
$source = $_POST['source'];
$revtrax_source = ( isset($_POST['revtrax_source']) ) ? $_POST['revtrax_source'] : "" ;
$group = $_POST['group'];
$campaign = ( isset($_POST['campaign']) ) ? $_POST['campaign'] : "" ;
$trigKey = ( isset($_POST['trigKey']) ) ? $_POST['trigKey'] : "" ;
$adgroup = (!empty($_POST['adgroup']) ) ? $_POST['adgroup'] : "";
$matchtype = (!empty($_POST['matchtype']) ) ? $_POST['matchtype'] : "";
$keyword = (!empty($_POST['keyword']) ) ? $_POST['keyword'] : "";
$bannersize = (!empty($_POST['bannersize']) ) ? $_POST['bannersize'] : "";
$site = (!empty($_POST['site']) ) ? $_POST['site'] : "";
$placementid = (!empty($_POST['placementid']) ) ? $_POST['placementid'] : "";
$segmentid = (!empty($_POST['segmentid']) ) ? $_POST['segmentid'] : "";
//$newsletter = ($_POST['optin'] == "true") ? "Yes" : "No";


$unsubChk = ( isset($_POST['unsubChk']) ) ? $_POST['unsubChk'] : "No" ;
$newsletter = $unsubChk;


//exit( "stuff: " . $email . "<br>" .  $zip . "<br>" . $source . "<br>" . $group . "<br>" . $lid . "<br>" . $newsletter);

$str = addSignup_ET($email, $zip, $source, $group, $newsletter, $lid);
//print_r($str);
$str2 = updateSignup_ET($email, $zip, $source, $group, $newsletter, $lid);
//print_r($str2);


// If trigger does not equal "no", send a triggered email
// When trigger is "no", it likely means that an auto-email is 
// already set up in ExactTarget on the subscriber list itself.
if($_POST['trigger'] != "no") {
	
	if ($trigKey == ""){
		// trigger default TryDrm welcome email
		dream_triggersend($email, $group, $zip);
	} else {
		// trigger welcome email passed from landing page form code
		dream_triggersend($email, $group, $zip, $trigKey);
	}//endif
	
}

// Get the thanks page URL, apply query string with email address
$thx = (!empty($_POST['thx'])) ? $_POST['thx'] : "http://www.trydreamfields.com/coupon-thanks.php";
$thx = $thx . "?uid=" . urlencode($email) . "&cc=" . md5($email);
$thx .= "&source=". urlencode($revtrax_source);
$thx .= "&campaign=". urlencode($campaign);


if($adgroup != "") {
	$thx .= "&adgroup=". urlencode($adgroup);
}//endif

if($matchtype != "") {
	$thx .= "&matchtype=". urlencode($matchtype);
}//endif

if($keyword != "") {
	$thx .= "&keyword=". urlencode($keyword);
}//endif


if($bannersize != "") {
	$thx .= "&bannersize=". urlencode($bannersize);
}//endif

if($site != "") {
	$thx .= "&site=". urlencode($site);
}//endif

if($placementid != "") {
	$thx .= "&placementid=". urlencode($placementid);
}//endif

if($segmentid != "") {
	$thx .= "&segmentid=". urlencode($segmentid);
}//endif

// Redirect to thanks/coupon page
header("Location: $thx");
?>