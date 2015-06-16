<?php 
	//setcookie('count', 'true', strtotime('+90 days'),'/','.trydreamfields.com');
	
	$cookie = 1;
	
    if (!isset($HTTP_COOKIE_VARS['count']))
    {
        $message = "Welcome! This is the first time you have viewed this page.";

        setcookie('count', $cookie, strtotime('+90 days'),'/','.trydreamfields.com');
    }
    else
    {
        $cookie = ++$_COOKIE['count'];
        setcookie('count', $cookie, strtotime('+90 days'),'/','.trydreamfields.com');
        
		$message = "You have viewed this page " . $_COOKIE['count'] . " times.";
		
		if ($_COOKIE['count'] <= 3) {
			$message .= "<br><br>You've viewed the page less than three times";
		} else {
			$message .= "<br><br>You've viewed the page more than three times";
		}
		
	}// end else  
	
	
	
	
?>

<html> 
    <head> 
        <title>Count Page Access</title> 
   </head> 
  <body> 
<?php echo($message); ?> 
<br>
<br>
<?php print_r($_COOKIE); ?>
   </body> 
</html>