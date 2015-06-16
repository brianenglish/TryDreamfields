<?
session_start();
ini_set('display_errors', '1');

include('lander_addSub2.php');

$attribs = getSub($_POST['email']);
triggerWelcome();
$str = addSub('1809873', $attribs);


print_r($str);

if(isset($_POST['email'])) {
	$_SESSION['email'] = $_POST['email'];
//	header("Location: http://www.trydreamfields.com/coupon-thanks_print.html");
}
?>
