<?php require_once('_includes/mail/class.phpmailer.php'); ?>
<?php
//session_start();
ini_set('display_errors', '1');






//	/* * * * * * * * * * * * * * * * * * * * * * * * *
//	*  PHP Mail
//	* * * * * * * * * * * * * * * * * * * * * * * * */

	
	
function mailHDi(){
	
	//echo "mailHDi called.";
	
	$html = "ALERT: The Dreamfields ET API User may need to be unlocked.";
	
	//$to = "charles.boyle@viterra.com"; /* OLD: cboyle@dakotagrowers.com */
	$to = "brians@hyperdrivei.com";
	//$to2 = "brianszo@hotmail.com";
	//$toTom = "tom@hyperdrivei.com";
	//$to = $email;
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "Content-Transfer-Encoding: 7bit\r\n";
//	$headers .= "From: cheryl@hyperdrivei.com\r\n";
//	$headers .= "From: " . $email . "\r\n";
	$headers .= "From: noreply@dreamfieldsfoods.com\r\n";
	
	$subj = 'ALERT: Dreamfields API User Locked Out';
	

	$Mail = new PHPMailer();
	
	$Mail->SMTPDebug = 1;
	$Mail->IsSMTP();
	$Mail->SMTPAuth = true; // turn on SMTP authentication
	//$Mail->Host = "localhost";
	$Mail->Host = "mail.dreamfields.hyperdrivei.biz";
	$Mail->Username = 'noreply@dreamfields.hyperdrivei.biz';
	$Mail->Password = '!drmaccess!';
	//$Mail->Host = "mail.hyperdrivei.biz";  // Dreamhost mail server
	//$Mail->From = $email;
	$Mail->From = "noreply@dreamfieldsfoods.com";
	//$Mail->From = "noreply@dreamfields.hyperdrivei.biz";
	//$Mail->FromName = $fullname;
	$Mail->FromName = "Dreamfields Pasta";
	$Mail->AddAddress($to);
	$Mail->AddAddress($toTom);
	//$Mail->AddAddress($to2);
	//$Mail->AddAddress("brians@hyperdrivei.com");
	//$Mail->AddReplyTo("brians@hyperdrivei.com");
	$Mail->Subject = $subj;
	$Mail->IsHTML(true);
	$Mail->Body = $html;
	
	

		
		if($Mail->Send())
		{
			// If no thank you page is provided, assign one.
			$thx = (!empty($_POST['thx'])) ? $_POST['thx'] : "http://www.dreamfieldsfoods.com/thankyou.html";
			
			//echo "mailed it";
			
			// redirect to thank you page
			//header("Location: $thx");
		}
		else
		{
			echo "An error occurred sending your message. Error: $Mail->ErrorInfo. Please resubmit your message. If you continue to experience this error, please <a href=\"http://www.dreamfieldsfoods.com/dreamfields-pasta-contact.html\">contact us</a> directly and paste this error message into the body of the message.";
		}



}//end mailHDi function





		


?>