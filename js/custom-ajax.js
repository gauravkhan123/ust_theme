jQuery(document).ready(function($) {
    $('#submit-form').on('click', function(e) {
        e.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();

        $.ajax({
            url: custom_ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'insert_custom_data',
                name: name,
                email: email,
            },
            success: function(response) {
                console.log('Data inserted successfully.');
                $('#success-message').html('Data inserted successfully.').show();

                // You can add further actions here like showing a success message or reloading the page.
            },
            error: function(xhr, status, error) {
                console.error(error);
            },
        });
    });
});
