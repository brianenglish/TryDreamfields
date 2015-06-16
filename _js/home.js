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
	
	
	/* Signup Form validation */
	$("#subscribeForm").validate({
		
		rules: {
			email: {
				required: true,
				email: true
			},
			zip: {
				required: true
			}
		},
		messages: {
			email: {
				required: "Email Address is required",
				email: "Email Address is not valid"
			},
			zip: {
				required: "Zip Code is Required"
			}
		},
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
				? 'Please correct the following error:\n'
				: 'Please correct the following ' + errors + ' errors.\n';
				var errors = "";
				if (validator.errorList.length > 0) {
					for (x=0;x<validator.errorList.length;x++) {
						errors += "\n\u25CF " + validator.errorList[x].message;
					}
				}
				alert(message + errors);
			}
			validator.focusInvalid();
		}
		
	});
	/* END Signup Form validation */
	


});


