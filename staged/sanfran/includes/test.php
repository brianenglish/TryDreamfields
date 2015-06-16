<?php 
require('includes/exacttarget_soap_client.php');
$wsdl = 'https://webservice.exacttarget.com/etframework.wsdl';


/* Create the Soap Client */
$client = new ExactTargetSoapClient($wsdl, array('trace'=>1));
    /* Set username and password here */
    $client->username = 'hdi-drm';
    $client->password = 'campbuzz@1';
var_dump($client);
?>