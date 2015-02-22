$(function() {
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitSuccess: function($form, event) {
            // prevent default submit behaviour
            event.preventDefault();

            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var count = $("select#count").val();
            var message = $("textarea#message").val();
            var password = $('input[name="password"]').val();

            $.ajax({
                url: "subscribe.php",
                type: "POST",
                data: {
                    name: name,
                    count: count,
                    email: email,
                    message: message,
                    password: password
                },
                cache: false
            })
            .done(function() {// Success message
                $('#submitMessage').html("<div class='alert alert-success'>");
                $('#submitMessage > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                $('#submitMessage > .alert-success')
                    .append("<strong>Deine Anmeldung wurde versendet. </strong>");
                $('#submitMessage > .alert-success')
                    .append('</div>');
            })
            .fail(function() {
                // Fail message
                $('#submitMessage').html("<div class='alert alert-danger'>");
                $('#submitMessage > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                $('#submitMessage > .alert-danger').append("<strong>Hmm, da hat etwas nicht funktioniert. Versuchs doch noch einmal!");
                $('#submitMessage > .alert-danger').append('</div>');
            })
            .always(function() {
                //clear all fields
                $('#contactForm').trigger("reset");
            });
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
