// JavaScript Document
<!--
// non-empty Contact Person
function isEmptyFullName(strng) {
var error = "";
  if (strng.length == 0) {
     error = "Please fill in your Full Name.\n"
  }
return error;	  
}
// email
function checkEmail (strng) {
var error="";
  if (strng == "") {
     error = "You didn't enter an Email Address.\n";
  } else { 
    var emailFilter=/^.+@.+\..{2,3}$/;
    if (!(emailFilter.test(strng))) { 
       error = "Please enter a valid Email Address.\n";
    } else {
      //test email for illegal characters
      var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/
      if (strng.match(illegalChars)) {
         error = "The Email Address contains illegal characters.\n";
      }
    }
  }	
return error;    
}
// Checkbox checker
function checkLID(checkvalue) {
var error = "";
   if (checkvalue<=0) {
       error = "Please let us know what information is most important to you by checking all that apply.\n";
    }
return error;    
}

function checkWholeForm() {
    var why = "";
	why += isEmptyFullName(document.subscribeForm.elements['Full Name'].value);
	why += checkEmail(document.subscribeForm.elements['Email Address'].value);
	var checkvalue = 0;
	for (i=0, n=document.subscribeForm.lid.length; i<n; i++) {
      if (document.subscribeForm.lid[i].checked) {
        checkvalue++;
        break;
      }
    }
	why += checkLID(checkvalue);

	if (why != "") {
       alert(why);
       return false;
    }
return true;
}
//-->
