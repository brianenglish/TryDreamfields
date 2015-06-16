<?php require_once('_includes/exacttarget_soap_client.php'); ?>
<?php require_once('drm_alert_lockout.php'); ?>
<?php
ini_set('display_errors', '1');
//echo "loaded lander_addSub_withZipNEW2.php";

//ini_set('display_errors', '1');
//error_reporting(E_ALL);

//$email = "brians@hyperdrivei.com";
//$zip = "trydrm_staged_1_test";
//$lid = "17069832";
//$source = "AllRecipes.com";
//$group = "Low Carb Diet";
//$newsletter = "Yes";


$tries_addSignup = 0;
$tries_updateSignup = 0;

// Function to add a subscriber to the ET list
function addSignup_ET($email, $zip, $source, $group, $newsletter, $lid) {
	$wsdl = '_includes/etframework.wsdl';
	
	try{
		//echo "got here";
		
		/* Create the Soap Client */
		$client = new ExactTargetSoapClient($wsdl, array('trace'=>1));
	
		/* Set username and password here */
		$client->username = 'hdi_drm';  // was hdi-drm
		$client->password = 'exact@123'; // was campbuzz@1
	
		$subscriber = new ExactTarget_Subscriber();      
		$subscriber->EmailAddress = $email;
		$subscriber->Lists = array(); 

		$attr_zip = new ExactTarget_Attribute();
		$attr_zip->Name = "Zip Code";
		$attr_zip->Value = $zip;
		
		$attr_source = new ExactTarget_Attribute();
		$attr_source->Name = "Source";
		$attr_source->Value = $source;
		
		$attr_group = new ExactTarget_Attribute();
		$attr_group->Name = "group";
		$attr_group->Value = $group;
		
		$attr_newsletter = new ExactTarget_Attribute();
		$attr_newsletter->Name = "Newsletter";
		$attr_newsletter->Value = $newsletter;

		$subscriber->Attributes=array($attr_zip, $attr_source, $attr_group, $attr_newsletter); 
		
		$list = new ExactTarget_SubscriberList(); 
		$list->ID = $lid; 
		$subscriber->Lists[] = $list;
	
		$object = new SoapVar($subscriber, SOAP_ENC_OBJECT, 'Subscriber', "http://exacttarget.com/wsdl/partnerAPI");
	
		$request = new ExactTarget_UpdateRequest();
		$request->Options = NULL;
		$request->Objects = array($object);
	
		$results = $client->Update($request);
	
//		echo "<pre>";
//		//echo "what";
//		var_dump($results);
//		echo "</pre>";
		return $results;
	
	} catch (SoapFault $e) {
		
		// Add one to the counter
		$tries_addSignup++;
		
		// Referring Page
		$ref = $_SERVER['HTTP_REFERER'];
		
		// If the form has failed less than three times,
		if ($tries_addSignup <= 3) {
			
			// try again
			addSignup_ET($email, $zip, $source, $group, $newsletter, $lid);
			
		} else {
			// Alert brians@hyperdrivei.com to ET API User locked out
			mailHDi();
			
			// Error message
			echo "<strong>Oops! There was an error in submitting the form.</strong><br>
			Please <a href=\"javascript:history.go(-1);\">go back</a> to try signing up again.<br><br>
			If you've been having difficulty submitting this form, please <a href=\"http://www.dreamfieldsfoods.com/dreamfields-pasta-contact.html\">contact Dreamfields</a> to let us know which web page caused you any trouble.<br><br>
			You came from this page: {$ref}";
		}
		
//		echo "oops";
//		echo "<pre>";
//		//echo "what else";
//		var_dump($e);
//		echo "</pre>";
	}	

}

//$myTest = addSignup_ET($email, $zip, $source, $group, $newsletter, $lid);
//echo $myTest;


// Function to update a subscriber on a list
function updateSignup_ET($email, $zip, $source, $group, $newsletter, $lid) {
	$wsdl = '_includes/etframework.wsdl';
	
	try{
		//echo "got here";
		
		/* Create the Soap Client */
		$client = new ExactTargetSoapClient($wsdl, array('trace'=>1));
	
		/* Set username and password here */
		$client->username = 'hdi_drm';  // was hdi-drm
		$client->password = 'exact@123'; // was campbuzz@1
	
		$subscriber = new ExactTarget_Subscriber();      
		$subscriber->EmailAddress = $email;
		$subscriber->Lists = array(); 
					
		$attr_zip = new ExactTarget_Attribute();
		$attr_zip->Name = "Zip Code";
		$attr_zip->Value = $zip;
		
		$attr_source = new ExactTarget_Attribute();
		$attr_source->Name = "Source";
		$attr_source->Value = $source;
		
		$attr_group = new ExactTarget_Attribute();
		$attr_group->Name = "group";
		$attr_group->Value = $group;
		
		$attr_newsletter = new ExactTarget_Attribute();
		$attr_newsletter->Name = "Newsletter";
		$attr_newsletter->Value = $newsletter;

		$subscriber->Attributes=array($attr_zip, $attr_source, $attr_group, $attr_newsletter); 
		
		$list = new ExactTarget_SubscriberList(); 
		$list->ID = $lid;
		$subscriber->Lists[] = $list;
	
		$object = new SoapVar($subscriber, SOAP_ENC_OBJECT, 'Subscriber', "http://exacttarget.com/wsdl/partnerAPI");
	
		$request = new ExactTarget_UpdateRequest();
		$request->Options = NULL;
		$request->Objects = array($object);
	
		$results = $client->Update($request);
	
//		echo "<pre>";
//		//echo "what";
//		var_dump($results);
//		echo "</pre>";
		return $results;
	
	} catch (SoapFault $e) {
		
		// Add one to the counter
		$tries_updateSignup++;
		
		// Referring Page
		$ref = $_SERVER['HTTP_REFERER'];
		
		// If the form has failed less than three times,
		if ($tries_updateSignup <= 3) {
			
			// try again
			updateSignup_ET($email, $zip, $source, $group, $newsletter, $lid);
			
		} else {
			// Alert brians@hyperdrivei.com to ET API User locked out
			mailHDi();
			
			// Error message
			echo "<strong>Oops! There was an error in submitting the form.</strong><br>
			Please <a href=\"javascript:history.go(-1);\">go back</a> to try signing up again.<br><br>
			If you've been having difficulty submitting this form, please <a href=\"http://www.dreamfieldsfoods.com/dreamfields-pasta-contact.html\">contact Dreamfields</a> to let us know which web page caused you any trouble.<br><br>
			You came from this page: {$ref}";
		}
		
//		echo "oops";
//		echo "<pre>";
//		//echo "what else";
//		var_dump($e);
//		echo "</pre>";
	}	

}


	
// Function to send triggered welcome email
function dream_triggersend($email, $group, $zip) {
$wsdl = '_includes/etframework.wsdl';
	
	// Triggered Sends > Nurture_TriggeredSends > DRM220_WebsiteSignup_Welcome
	$cust_key = "DRM220_TryDrmSignup_Welcome";

	if (isset($email)) {
	
		/* Create the Soap Client */
		$client = new ExactTargetSoapClient($wsdl, array('trace'=>1));
	  
		/* Set username and password here */
		$client->username = 'hdi_drm';
		$client->password = 'exact@123';
		
		//Create Triggered Send Definition object
		$ts = new ExactTarget_TriggeredSend();
		$tsd = new ExactTarget_TriggeredSendDefinition();
		
		//Customer Key for triggered send
		$tsd->CustomerKey = $cust_key;	
	
		//Create subscriber object
		$subscriber = new ExactTarget_Subscriber();
		$subscriber->SubscriberKey = $email;
		$subscriber->EmailAddress = $email;
	
		$AttributesGroup = new ExactTarget_Attribute();
		$AttributesGroup->Name = 'group';
		$AttributesGroup->Value = $group;
		$AttributesZip = new ExactTarget_Attribute();
		$AttributesZip->Name = 'Zip Code';
		$AttributesZip->Value = $zip;
		$subscriber->Attributes = array($email, $AttributesGroup, $AttributesZip);
			
		$ts->Subscribers = array();
		$ts->Subscribers = $subscriber;    
		$ts->TriggeredSendDefinition = $tsd;
		
		$object = new SoapVar($ts, SOAP_ENC_OBJECT, 'TriggeredSend', "http://exacttarget.com/wsdl/partnerAPI");
		$request = new ExactTarget_CreateRequest();
		$request->Options = NULL;
		$request->Objects = array($object);
		$results = $client->Create($request);
   }	
   return $results;
} 

//$testSend = dream_triggersend($email, $group, $zip);

?>