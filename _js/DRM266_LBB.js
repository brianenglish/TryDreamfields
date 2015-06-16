/*!
 * HyperDrive
 */


/**
 * For testing the layout of the Thank You message/button
 */
$(document).ready(function () {
//	// Get the form.
//	var form = $('#subscribeForm');
//	
//	// Get the messages div.
//	var formMessages = $('#form-messages');
//	
//	// Hide the form.
//	$(form).hide();
//	$('.form_disclaimer').hide();
//	
//	// Show Thank You message
//	$('p.intro').text('Thank you for submitting your Pinterest Board! Good Luck!');
//	//.append('Now, enjoy a coupon from Dreamfields.');
//	
//	var theResponse = "http://www.trydreamfields.com/coupon-thanks-LBB.php?uid=brians%2Btest111%40hyperdrivei.com&cc=2629e33d771fbe4b0296a73d8762ae10&source=TryDreamfields-LLB&campaign=PinterestLBB";
//	
//	var msg = '<p>Now, enjoy a coupon from Dreamfields.</p><a href="' + theResponse + '" class="btn-white">Get Coupon<span class="arrow"></span></a>';
//	
//	$(formMessages).html(msg);
});





/**
 * AJAX form submittal
 * RE:  http://blog.teamtreehouse.com/create-ajax-contact-form
 */
$(document).ready(function() {

	// Get the form.
	var form = $('#subscribeForm');

	// Get the messages div.
	var formMessages = $('#form-messages');
	
	
	// Submitting the form with AJAX
	function ajaxSubmit() {
		// Get the form.
		var form = $('#subscribeForm');
		
		// Get the messages div.
		var formMessages = $('#form-messages');
	
		// Set up an event listener for the contact form.
		//$(form).submit(function(e) {
			// Stop the browser from submitting the form.
			//e.preventDefault();
			
			// Serialize the form data.
			var formData = $(form).serialize();
			//alert(formData); //see if the formdata is serialized properly
			
			// Submit the form using AJAX.
			$.ajax({
				type: 'POST',
				url: $(form).attr('action'),
				data: formData
			})
			.done(function(response) {
				
				// Hide the form.
				$(form).hide();
				$('.form_disclaimer').hide();
				
				// Show Thank You message
				$('p.intro').text('Thank you for submitting your Pinterest Board! Good Luck!');
				//.append('Now, enjoy a coupon from Dreamfields.');
		
				var theResponse = response;
		
				var msg = '<p>Now, enjoy a coupon from Dreamfields.</p><a href="' + theResponse + '" class="btn-white">Get Coupon<span class="arrow"></span></a>';
		
				$(formMessages).html(msg);
				
			})
			.fail(function(data) {
				// Make sure that the formMessages div has the 'error' class.
				//$(formMessages).removeClass('success');
				//$(formMessages).addClass('error');
	
				// Set the message text.
				if (data.responseText !== '') {
					$(formMessages).text(data.responseText);
				} else {
					$(formMessages).text('Oops! An error occurred.');
				}
			});
	
		//});	
	}
	
	
	
	/**
	 * jQuery Validate plugin, custom method
	 */
	jQuery.validator.addMethod("contains", function(value, element, param) { 
		//var v = element.val();
		//var p = param;
		//alert( value.indexOf(element) !== -1 );
		//alert( p );
		return this.optional(element) || value.indexOf(param) !== -1; 
	}, jQuery.format("Your URL should contain {0}"));
	
	
	/**
	 * Signup Form validation
	 */
	$(form).validate({
		
		rules: {
			fullname: {
				required: true,
			},
			email: {
				required: true,
				email: true
			},
			pinterestURL: {
				required: true,
				url: true,
				contains: "pinterest.com"
			},
			zip: {
				required: true
			}
		},
		messages: {
			fullname: {
				required: "Full Name is Required"
			},
			email: {
				required: "Email Address is required",
				email: "Email Address is not valid"
			},
			pinterestURL: {
				required: "A Pinterest Board URL is Required"
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
			
			//alert("going to submit");
			//return false;
		},
		submitHandler: function(form) {
			
			// call ajaxSubmit() function
			ajaxSubmit();
			
		}
		
	});
	/* END Signup Form validation */
			
	
	

});




	






