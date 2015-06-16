<?
session_start();
ini_set('display_errors', '1');

include('lander_TryDrmCurves_addSub.php');

$str = addSub('1809873');

if(isset($_POST['email'])) {
	$_SESSION['email'] = $_POST['email'];
	header("Location: http://www.trydreamfields.com/coupon-thanks_print.html");
}
?>
