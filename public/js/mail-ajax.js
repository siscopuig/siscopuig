$(document).ready(function() {
    // process the form
    $('form').submit(function(event) {
        $('.contact-form').removeClass('feedback-box'); // Removes error class
        $('.feedback-negative').remove(); // Removes error text

        // Get the form data. There are many ways to get this data using jQuery 
        // (you can use the class or id also)
        var data_form = {
            'name' 		    : $('input[name=name]').val(),
            'email' 	    : $('input[name=email]').val(),
            'message' 	    : $('#message').val()
        };

        console.log(data_form);

        // Process the form
        $.ajax({
            type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url 		: 'http://localhost:3000/config/mail.php', // the url where we want to POST
            data 		: data_form, // our data object
            dataType 	: 'json', // what type of data do we expect back from the server
            encode 		: true
        })

        // Using the done promise callback
        .done(function(data) {

            // Log data to the console for debugging purposes
            console.log(data);

            // Handle errors and validation messages
            if ( ! data.success) {

                if (data.errors.name)
                     // Append error message under the input tag
                    $('#name-group').append('<div class="feedback-negative">' + 
                    data.errors.name + '</div>');

                if (data.errors.email)
                    $('#email-group').append('<div class="feedback-negative">' + 
                    data.errors.email + '</div>');

                if (data.errors.message)
                    $('#message-group').append('<div class="feedback-negative">' + 
                    data.errors.message + '</div>');

            } else {
                // ALL GOOD! just show the success message!
                $('.contact-form').find('#feedback_box').append(
                    '<p class="feedback-positive">Thank you for use my contact form, <strong>' + data.name + '</strong>' +
                    '. Your email was successfully sent and I&rsquo;ll be in touch with you soon.</p>');

                // Usually after form submission, you'll want to redirect
                // window.location = '/thank-you'; // redirect a user to another page

                // Reset form after submitting.
                $('form').each(function() {
                    this.reset();
                });
            }
        })

        // Using the fail promise callback
        .fail(function(data) {
            // Show any errors, best to remove for production.
            console.log(data);
        });
        // Stop the form from submitting the normal way and refreshing the page.
        event.preventDefault();
    });
});