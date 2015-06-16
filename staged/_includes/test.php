<?php require_once('exacttarget_soap_client.php'); ?>

<?php 
ini_set('display_errors', '1');

/* Set location of WSDL */
//$wsdl = 'https://webservice.exacttarget.com/etframework.wsdl';
$wsdl = 'etframework.wsdl';


    /* Create the Soap Client */
    $client = new ExactTargetSoapClient($wsdl, array('trace'=>1));
     
    /* Set username and password here */
    $client->username = 'hdi_drm';
	$client->password = 'exact@123';
       
	/* Other Code Here */
	$param = new ExactTarget_VersionInfoRequestMsg();
	$param->IncludeVersionHistory = true;
	$results = $client->VersionInfo($param);
	var_dump($results);


?>