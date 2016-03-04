/*!
 * HyperDrive
 */

$(document).ready(function () {

    

});


$(document).ready(function() {
	
	/* Make footer links clickable in IE7 */
	$('a')
        .click(function () {        
            window.location = $(this).attr('href');
        })
        .hover(function () {
            $(this).css('cursor', 'pointer');
        });
	
	jQuery.validator.addMethod("zipcode", function(value, element) {
	  return this.optional(element) || /^\d{5}(?:-\d{4})?$/.test(value);
	}, "");
	
	/* Signup Form validation */
	$("#subscribeForm").validate({
		
		rules: {
			email: {
				required: true,
				email: true
			},
			zip: {
				zipcode: true,

			}
		},
		messages: {
			email: {
				required: "",
				email: ""
			}
			
		}
		// invalidHandler: function(form, validator) {
		// 	var errors = validator.numberOfInvalids();
		// 	if (errors) {
		// 		var message = errors == 1
		// 		? 'Please correct the following error:\n'
		// 		: 'Please correct the following ' + errors + ' errors.\n';
		// 		var errors = "";
		// 		if (validator.errorList.length > 0) {
		// 			for (x=0;x<validator.errorList.length;x++) {
		// 				errors += "\n\u25CF " + validator.errorList[x].message;
		// 			}
		// 		}
		// 		alert(message + errors);
		// 	}
		// 	validator.focusInvalid();
		// }
		
	});
	/* END Signup Form validation */
	


});


