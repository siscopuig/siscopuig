$(document).ready(function() {
    // Animated text on aboutme section
    setTimeout(function() {
            $(".impressions.first").removeClass("hidden").animate({
                opacity: "1"
            }, 2000) // duration of the action
            setTimeout(function () { // Fades out
                $(".impressions.first").animate({
                    opacity: "0"            
                }, 2000)
            }, 5000)
        }, 0);
        setTimeout(function() {
            $(".impressions.second").removeClass("hidden").animate({
                opacity: "1"
            }, 2000) // duration of the action
            setTimeout(function () {
                $(".impressions.second").animate({
                    opacity: "0"            
                }, 2000)
            }, 5000)
        }, 10000);
        setTimeout(function() {
            $(".impressions.third").removeClass("hidden").animate({
                opacity: "1"
            }, 2000) // duration of the action
            setTimeout(function () {
                $(".impressions.third").animate({
                    opacity: "0"            
                }, 2000)
            }, 5000)
        }, 20000);
        setTimeout(function() {
            $(".impressions.last").removeClass("hidden").addClass("active").animate({
                opacity: "1"
            }, 2000) // duration of the action
            setTimeout(function () {
                $(".impressions.last").animate({
                    opacity: "1"            
                }, 2000)
            }, 5000)
        }, 30000);
    // Mobile header
    $(".mobile-menu-button").click(function() {
        $("body").addClass("menu-open"),
        $(".mobile-menu").fadeIn(300).addClass("in")
    })
    $(".mobile-menu-close").click(function() {
        $("body").removeClass("menu-open"),
        $(".mobile-menu").fadeOut(300).removeClass("in")
    })
    $("[data-expand]").click(function() {
        var t = $(this).attr("data-expand");
        $(this).toggleClass("collapsed"),
        $(t).slideToggle(300).toggleClass("expand")
    })
    // headroom (header appears when scrolling up)
    $(".header").clone().appendTo("#headroom"),
    $("#headroom").headroom({
        offset: 600,
        tolerance: {
            up: 20,
            down: 0
        }
    })
    // Mail functionality
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