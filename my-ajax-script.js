jQuery(document).ready(function($) {
    $('#my-form').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        var form_data = $(this).serialize(); // Serialize the form data

        $.ajax({
            url: my_ajax_object.ajax_url, // Use the AJAX URL from wp_localize_script()
            type: 'POST',
            data: {
                action: 'my_ajax_form_handler', // The AJAX action name
                nonce: my_ajax_object.nonce, // The nonce value
                form_data: form_data // The serialized form data
            },
            success: function(response) {
                // Handle the successful response
                console.log(response.message);
                // Additional actions, such as resetting the form
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log(error);
            }
        });
    });
});