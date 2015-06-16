<?
require('parser_php4.php');

function formatAttribs($subData) {
	$xml = new XMLParser($subData);
	$xml->Parse();
	
	$xmldat = array();
	
	foreach($xml->document->system[0]->subscriber[0]->tagChildren as $attrib) {
		$xmldat[]= array('name' => $attrib->tagName, 'value' =>$attrib->tagData);
	}

	return $xmldat;
}		

function getSub($email) {
		$data_string = "<exacttarget><authorization><username>hdi_drm</username><password>exact@123</password></authorization><system><system_name>subscriber</system_name><action>retrieve</action><search_type>listid</search_type><search_value></search_value><search_value2>{$email}</search_value2><showChannelID></showChannelID></system></exacttarget>";
	
		$curl_handle = curl_init();
	
		curl_setopt ($curl_handle, CURLOPT_URL, 'https://api.dc1.exacttarget.com/integrate.aspx');
		curl_setopt ($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt ($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt ($curl_handle, CURLOPT_POST, TRUE);
		curl_setopt ($curl_handle, CURLOPT_POSTFIELDS, "qf=xml&xml=".urlencode($data_string));

		$str = curl_exec($curl_handle) or die ('error');

		curl_close($curl_handle);
		
//		echo "getting subs";
		
		if(strstr($str, "listid") === FALSE) {
			$attribXML = array();
		} else {
			$attribXML = formatAttribs($str);
		}			
		return $attribXML;
}

function addSub($lid, $attribs) {	
	$data_string = "MID=13846&SubAction=sub_add_update&thx=http://www.dreamfieldsfoods.com/&err=http://www.dreamfieldsfoods.com/error.html";
	$data_string .= "&lid=".$lid;
	$data_string .= "&Email Address=".$_POST['email'];
	$data_string .= "&Source=".stripslashes($_POST['source']);	
	$data_string .= "&group=".stripslashes($_POST['group']);
	$data_string .= "&Zip Code=".$_POST['zip'];

/*
echo "[att[";
print_r($attribs);
echo "]]";
*/
	foreach($attribs as $attrib) {
		switch($attrib['name']) {
			case "subid" :
			case "listid" :
			case "list_name" :
			case "email__address" :
			case "status" :
			case "email__type" :
			case "source" :
			case "group" :
			case "newsletter" :
			case "zip__code" :
				break;
			default: 
				$data_string .= "&" . ucwords(str_replace('__', ' ', $attrib['name'])) . "=" . urlencode($attrib['value']);
				break;
		}
	}
	
	$data_string .= ($_POST['optout'] == "false") ? "&Newsletter=Yes" : "&Newsletter=No";
	
	$curl_handle = curl_init();
	
	curl_setopt ($curl_handle, CURLOPT_URL, 'http://cl.exct.net/subscribe.aspx');
	curl_setopt ($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt ($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt ($curl_handle, CURLOPT_POST, TRUE);
	curl_setopt ($curl_handle, CURLOPT_POSTFIELDS, $data_string);
	
//	echo "[data_string_addSub[" . $data_string . "]]";


	$str = curl_exec($curl_handle) or die ('trying...error');
	curl_close($curl_handle);
	
//	echo "[str[" . $str . "]]";
	
	return $str;
}

function triggerWelcome() {
	$cust_key = "";
	switch($_POST['group']) {
		CASE 'Low Carb Diet':
			$cust_key = "Welcome_LowCarb";
			break;
		CASE 'Managing Diabetes':
			$cust_key = "Welcome_Diabetes";
			break;
		CASE 'Eat Healthier':
			$cust_key = "Welcome_HealthyEaters";
			break;
		CASE 'Unknown':
			$cust_key = "Welcome_HealthyEaters";
			break;
	}
		
		$data_string = "<exacttarget><authorization><username>hdi_drm</username><password>exact@123</password></authorization><system><system_name>triggeredsend</system_name><action>add</action><TriggeredSend xmlns:xsi='http://www.w3.org/2001/XMLSchemainstance' xmlns:xsd='http://www.w3.org/2001/XMLSchema' xmlns='http://exacttarget.com/wsdl/partnerAPI'><TriggeredSendDefinition><CustomerKey>{$cust_key}</CustomerKey></TriggeredSendDefinition><Subscribers><SubscriberKey>{$_POST['email']}</SubscriberKey><EmailAddress>{$_POST['email']}</EmailAddress></Subscribers></TriggeredSend></system></exacttarget>";
	
		$curl_handle = curl_init();
	
		curl_setopt ($curl_handle, CURLOPT_URL, 'https://api.dc1.exacttarget.com/integrate.aspx');
		curl_setopt ($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt ($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt ($curl_handle, CURLOPT_POST, TRUE);
		curl_setopt ($curl_handle, CURLOPT_POSTFIELDS, "qf=xml&xml=".urlencode($data_string));
/*
	echo "[data_string[" . $data_string . "]]";
	
	echo "[str[" . $str . "]]";
*/


		$str = curl_exec($curl_handle) or die ('error');

		curl_close($curl_handle);
	
		if(strstr($str, "success") === FALSE)
			die("call error");
}

?>