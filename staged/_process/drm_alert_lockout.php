<?php
function mailHDi(){
	/* * * * * * * * * * * * * * * * * * * * * * * * *
	*  cURL code
	* * * * * * * * * * * * * * * * * * * * * * * * */
	//set POST variables
	$url = "http://dreamfields.hyperdrivei.biz/drm-forms/trydrm_alert/drm_alert_lockout.php";
//	$fields = array(
//				'support'=>urlencode($support),
//				'fname'=>urlencode($fname),
//				'lname'=>urlencode($lname),
//			);
//	
//	//url-ify the data for the POST
//	$fields_string = "";
//	foreach($fields as $key => $value) { 
//		$fields_string .= $key.'='.$value.'&';
//	}
//	rtrim($fields_string,'&');
	
	//open connection
	$ch = curl_init();
	
	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL,$url);
//	curl_setopt($ch,CURLOPT_POST,count($fields));
//	curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
	
	//execute post
	$result = curl_exec($ch);
	
	//close connection
	curl_close($ch);
	
}//end mailHDi function

//mailHDI(); //test
?>