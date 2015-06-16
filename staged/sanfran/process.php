<?php require('includes/exacttarget_soap_client.php'); ?>
<?php
ini_set('display_errors', '1');

//require('../_includes/exacttarget_soap_client.php');

$wsdl = 'https://webservice.exacttarget.com/etframework.wsdl';

try{
	
	echo "got here";
	
    /* Create the Soap Client */
    $client = new ExactTargetSoapClient($wsdl, array('trace'=>1));


    /* Set username and password here */
    $client->username = 'hdi-drm';
    $client->password = 'campbuzz@1';

    $subscriber = new ExactTarget_Subscriber();      
                //$subscriber->SubscriberKey = "012345";  // don't know the SubscriberKey
				$subscriber->EmailAddress = "brians@hyperdrivei.com";
    $subscriber->Lists = array(); 
                $attrib1 = new ExactTarget_Attribute();
                $attrib1->Name = "Full Name";
                $attrib1->Value = "ZoroTestAPI";

                $attrib2 = new ExactTarget_Attribute();
                $attrib2->Name = "Address";
                $attrib2->Value = "123 Testing Dr.";

                $subscriber->Attributes=array($attrib1,$attrib2);    
    
    $list = new ExactTarget_SubscriberList(); 
    $list->ID = "17504984";  // my lists > 2010_Landing_Pages > 2010_TryDrm_Landing_Pages > San Fran Giveaway
    $subscriber->Lists[] = $list;

	// Could update a second subscriber list as well
//    $list = new ExactTarget_SubscriberList();
//    $list->ID = "12345";
//    $subscriber->Lists[] = $list;

    $object = new SoapVar($subscriber, SOAP_ENC_OBJECT, 'Subscriber', "http://exacttarget.com/wsdl/partnerAPI");

    $request = new ExactTarget_UpdateRequest();
    $request->Options = NULL;
    $request->Objects = array($object);

    $results = $client->Update($request);


    var_dump($results);

} catch (SoapFault $e) {
	echo "oops";
    var_dump($e);
}
?>