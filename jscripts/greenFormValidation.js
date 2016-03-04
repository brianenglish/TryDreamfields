$(function () {
    //Set the plugin to Validate the form on the page. Not an ID or Class but an html element of form
    $('form').validate();
    // Add a custom class to your name mangled input and add rules like this
    $('#email').rules('add', {
        required: true,
        messages: {
            required: 'Full Name is required'
        }
    });

    $('#Zip').rules('add', {
        required: true,
        email: true,
        messages: {
            required: 'Email is required'
        }
    });
});
