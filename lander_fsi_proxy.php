<?
session_start();
ini_set('display_errors', '1');

include('lander_fsi_addSub.php');

$str = addSub('2141514');

if(isset($_POST['email'])) {
	$_SESSION['email'] = $_POST['email'];
	header("Location: http://www.dreamfieldsfoods.com/thanks_fsi.html");
}
?>
