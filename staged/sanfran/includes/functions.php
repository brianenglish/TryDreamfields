<?php
	// This file is the place to store all basic functions
	

	
	// Function to determine if a valid MySQL result set was returned
	function confirm_query($result_set) {
		if(!$result_set) {
			die("Database query failed: " . mysql_error());	
		}	
	}

	// Function to get number of San Fran signups currently in the MySQL database
	function getNumSignups() {
		global $connection;
		$query = "SELECT COUNT(*)
			FROM sanfran_signups";
		$count = mysql_query($query, $connection);
		confirm_query($count);
		return $count;
	}

	// Function to add new San Fran signup to MySQL database.
	function addSignup($email, $fullname, $address, $city, $state, $zip, $timestamp) {
		global $connection;
		
		//$ip=$_SERVER['REMOTE_ADDR'];
		
		$query = "INSERT INTO sanfran_signups
			(email, fullname, address, city, state, zip, timestamp)
			VALUES ('$email', '$fullname', '$address', '$city', '$state', '$zip', '$timestamp')";
		$faq_set = mysql_query($query, $connection);
		confirm_query($faq_set);
	}






	
	// Function to update tblLog (views of FAQ answer page)
	function setTimestamp($lastVisit, $faqid){
		global $connection;
		
		$ip=$_SERVER['REMOTE_ADDR'];
		
		$query = "INSERT INTO faq_tbllog
			(faqid, viewdate, visitorIP)
			VALUES ('$faqid', '$lastVisit', '$ip')";
		$faq_set = mysql_query($query, $connection);
		confirm_query($faq_set);
	}
	



?>