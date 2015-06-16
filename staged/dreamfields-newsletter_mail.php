<?
session_start();

include("addSub.php");

$str = addSub($_POST['lid'], $_POST['user']);

function collectGeneral() {
	$body = "<h4>Please send a $1.00 coupon to:</h4>";
	$body .= "<table border='1' cellpadding='5' cellspacing='0'>\r\n";
	$body .= "<tr><td><strong>Name: </strong></td><td>{$_POST['fn']}</td></tr>\r\n";
	$body .= "<tr><td><strong>Address: </strong></td><td>{$_POST['ad']}</td></tr>\r\n";
	$body .= "<tr><td><strong>City: </strong></td><td>{$_POST['cy']}</td></tr>\r\n";
	$body .= "<tr><td><strong>State: </strong></td><td>{$_POST['st']}</td></tr>\r\n";
	$body .= "<tr><td><strong>Zip Code: </strong></td><td>{$_POST['zp']}</td></tr>\r\n";
	$body .= "</table>";
	
	return $body;
}

//	$to = "sales@dreamfieldsfoods.com";
	$to = "taylor@hyperdrivei.com";
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "Content-Transfer-Encoding: 7bit\r\n";
	$headers .= "From: {$_POST['user']}\r\n";
	$html = collectGeneral();
	mail($to, "New Consumer Coupon", $html, $headers);

header("Location: coupon-thanks.html");
?>