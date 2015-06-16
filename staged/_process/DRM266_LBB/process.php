<?php
ini_set('display_errors', '1');

// These 2 lines are mandatory
require('sdk/ET_Client.php');
$myclient = new ET_Client();


	/**- - - - - - - - - - - - - - - - - - - - *
	 * Vars
	 * - - - - - - - - - - - - - - - - - - - - */
	$SubscriberEmail = "brians+test111@hyperdrivei.com";
	$FullName = "Brian ZoroTest1";
	$ZipCode = "11111";
	$PinterestURL = "https://www.pinterest.com/dreamfields/dreamfields-elbows-recipes/";
	
	
	$FolderID = 331125; // HDi_lists, get folder id by rolling over folder link in ET interface
	$theListID = 18633454; // My Lists > 2010_Landing_Pages > TryDrm_Landing_Pages > LittleBlackBox
	
	// Newsletter = Yes/No
	$unsubChk = ( isset($_POST['unsubChk']) ) ? $_POST['unsubChk'] : "No" ;
	$newsletter = $unsubChk;
	$newsletter = "Yes";


	/**- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - *
	 *
	 *  Retrieve Subscriber - see if it exists in ET
	 *
	 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
		print "\n\n\n";
		print "Retrieve Subscriber on List \n";
		print "- - - - - - - - - - - - - - - - - - - - \n";
		$subscriber = new ET_Subscriber();
		$subscriber->authStub = $myclient;
		//$subscriber->props = array("EmailAddress" => $SubscriberEmail, "Lists" => array("ID" => $theListID));
		$subscriber->props = array("EmailAddress", "Status");
		$subscriber->filter = array(
			'Property' => 'EmailAddress',
			'SimpleOperator' => 'equals',
			'Value' => $SubscriberEmail);
		$response = $subscriber->get();
		print_r($response); 
		
		$subscriberExists = $response->results[0]->EmailAddress;
		print "The subscriber is: " . $subscriberExists;
 


// If the subscriber does not exist yet
if ($subscriberExists == ""){
		 	
	/**- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - *
	 *
	 *  Create Subscriber on a specific Subscriber List
	 *
	 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
		print "\n\n\n";
		print "Create Subscriber on List \n";
		print "- - - - - - - - - - - - - - - - - - - - \n";
		$subCreate = new ET_Subscriber();
		$subCreate->authStub = $myclient;
		$subCreate->props = array(
				"EmailAddress" => $SubscriberEmail, 
				"Lists" => array(
					"ID" => $theListID)
			);
		$subscriber->props['Attributes'] = array(
				array(
					'Name' => 'Full Name', 
					'Value' => $FullName
					),
				array(
					'Name' => 'Zip Code', 
					'Value' => $ZipCode
					),
				array(
					'Name' => 'Newsletter', 
					'Value' => $newsletter
					)
			);
		$results = $subCreate->post();
		print_r($results);
//		print_r('Post Status: '.($postResult->status ? 'true' : 'false')."\n");
//		print 'Code: '.$postResult->code."\n";
//		print 'Message: '.$postResult->message."\n";	
//		print 'Results Length: '. count($postResult->results)."\n";
//		print 'Results: '."\n";
//		print_r($postResult->results);
//		print "\n---------------\n";
		
} else {

	/**- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - *
	 *
	 *  Update Subscriber on a specific Subscriber List
	 *
	 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
		print "\n\n\n";
		print "Update Subscriber on List \n";
		print "- - - - - - - - - - - - - - - - - - - - \n";
		$subscriber = new ET_Subscriber();
		$subscriber->authStub = $myclient;
		$subscriber->props = array(
				"EmailAddress" => $SubscriberEmail,
				"Lists" => array(
					"ID" => $theListID),
				"Status" => "Active"
			);
		$subscriber->props['Attributes'] = array(
				array(
					'Name' => 'Full Name', 
					'Value' => $FullName
					),
				array(
					'Name' => 'Zip Code', 
					'Value' => $ZipCode
					),
				array(
					'Name' => 'Newsletter', 
					'Value' => $newsletter
					)
			);
		$results = $subscriber->patch();
		print_r($results);

}//endif

	
	
	/**- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - *
	 *
	 *  asdf
	 *
	 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
		
	
	




	
	/**- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - *
	 *
	 *  asdf
	 *
	 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */






?>