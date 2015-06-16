<?
function addSub($lid) {	
	$data_string = "MID=13846&SubAction=sub_add_update&thx=http://www.dreamfieldsfoods.com/&err=http://www.dreamfieldsfoods.com/error.html";
	$data_string .= "&lid=".$lid;
	$data_string .= "&Email Address=".$_POST['email'];	
	
	$data_string .= "&Full Name=".stripslashes($_POST['fname']);
	$data_string .= "&Address=".stripslashes($_POST['Address']);
	$data_string .= "&City=".stripslashes($_POST['City']);
	$data_string .= "&State_2=".stripslashes($_POST['State_2']);
	$data_string .= "&Zip Code=".stripslashes($_POST['zip']);
	$data_string .= "&Source=".stripslashes($_POST['source']);	
	$data_string .= "&group=".stripslashes($_POST['group']);
	
	$data_string .= ($_POST['optout'] == "false") ? "&Newsletter=Yes" : "&Newsletter=No";
	
	$curl_handle = curl_init();
	
	curl_setopt ($curl_handle, CURLOPT_URL, 'http://cl.exct.net/subscribe.aspx');
	curl_setopt ($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt ($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt ($curl_handle, CURLOPT_POST, TRUE);
	curl_setopt ($curl_handle, CURLOPT_POSTFIELDS, $data_string);
	
	$str = curl_exec($curl_handle) or die ('trying...error');

	curl_close($curl_handle);
}
?>