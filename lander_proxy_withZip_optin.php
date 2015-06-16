<?php require_once('lander_addSub_withZip_optin.php'); ?>
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
$group = $_POST['group'];
$newsletter = ($_POST['optin'] == "true") ? "Yes" : "No";

echo "stuff: " . $email . "<br>" .  $zip . "<br>" . $group . "<br>" . $lid;

$str = addSignup_ET($email, $zip, $source, $group, $newsletter, $lid);
//print_r($str);
$str2 = updateSignup_ET($email, $zip, $source, $group, $newsletter, $lid);
//print_r($str2);


// If trigger does not equal "no", send a triggered email
// When trigger is "no", it likely means that an auto-email is 
// already set up in ExactTarget on the subscriber list itself.
if(  ($_POST['trigger'] != "no")  &&  ($newsletter != "No")  ) {
	//triggerWelcome();
	dream_triggersend($email, $group, $zip);
}

// Get the thanks page URL, apply query string with email address
$thx = (!empty($_POST['thx'])) ? $_POST['thx'] : "http://www.trydreamfields.com/coupon-thanks.php";
$thx = $thx . "?uid=" . urlencode($email) . "&cc=" . md5($email);

// Redirect to thanks/coupon page
header("Location: $thx");
?>