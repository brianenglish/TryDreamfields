<?
//session_start();
//ini_set('display_errors', '1');

include('lander_addSub_withZip.php');

$attribs = getSub($_POST['email']);

triggerWelcome();
$str = addSub('1809873', $attribs);

//print_r($str);

$thx = (!empty($_POST['thx'])) ? $_POST['thx'] : "http://www.trydreamfields.com/coupon-thanks_print.html";

//if(!empty($_POST['email']))
//$_SESSION['email'] = $_POST['email'];

header("Location: $thx");

//echo "<br>\r\nDone.\r\n<br>";
/*
session_start();
ini_set('display_errors', '1');

include('lander_addSub_withZip.php');

$str = addSub('1809873');

if(!isset($_POST['thx'])) {
	$thx = "http://www.trydreamfields.com/coupon-thanks_print.html";
}

if(isset($_POST['email'])) {
	$_SESSION['email'] = $_POST['email'];
	header("Location: $thx");
}
*/
?>