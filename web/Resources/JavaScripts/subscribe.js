$(function() {
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var count = $("select#count").val();
            var message = $("textarea#message").val();
            $.ajax({
                url: "subscribe.php",
                type: "POST",
                data: {
                    name: name,
                    count: count,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#submitMessage').html("<div class='alert alert-success'>");
                    $('#submitMessage > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#submitMessage > .alert-success')
                        .append("<strong>Deine Anmeldung wurde versendet. </strong>");
                    $('#submitMessage > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#submitMessage').html("<div class='alert alert-danger'>");
                    $('#submitMessage > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#submitMessage > .alert-danger').append("<strong>Hmm, da hat etwas nicht funktioniert. Versuchs doch noch einmal!");
                    $('#submitMessage > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                }
            })
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
});

/* When focusing in any form field hide submit message boxes */
$('#name, #email, #count, #message').focus(function() {
    $('#submitMessage').html('');
});
