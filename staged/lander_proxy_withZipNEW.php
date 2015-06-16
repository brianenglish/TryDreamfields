<?
session_start();
ini_set('display_errors', '1');

include('lander_addSub_withZipNEW.php');

// Get POST vars
$email = htmlentities($_POST['email']);
$lid = $_POST['lid'];

// Get profile attribute values from ET, based on email address
$attribs = getSub($_POST['email']);
$str = addSub($lid, $attribs);  // lid for 2007 Magazine Landers list is 1809873


//print_r($str);


// If trigger does not equal "no", send a triggered email
// When trigger is "no", it likely means that an auto-email is 
// already set up in ExactTarget on the subscriber list itself.
if($_POST['trigger'] != "no") {
	triggerWelcome();
}

// Get the thanks page URL, apply query string with email address
$thx = (!empty($_POST['thx'])) ? $_POST['thx'] : "http://www.trydreamfields.com/coupon-thanks.php";
$thx = $thx . "?p=" . urlencode($email) . "&cc=" . md5($email);

// Session Vars no long work for this domain
//$_SESSION['email'] = $_POST['email'];

// Redirect to thanks/coupon page
header("Location: $thx");
?>