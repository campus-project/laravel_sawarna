$(document).ready(function() {
    $(window).on('load', function () {
        $('.status').fadeOut();
        $('.preloader').delay(350).fadeOut('slow');
    });
});

$body = $("body");

$(document).on({
    ajaxStart: function() {
        $body.addClass("loading");
    },
    ajaxStop: function() {
        $body.removeClass("loading");
    }
});

$('#subscribe-form').on('submit',function(e) {
    e.preventDefault();

    var formData = {
        name: $('#name').val(),
        email: $('#email').val()
    };

    $.ajax({
        type: "POST",
        url: "api/contact",
        data: formData,
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                alert(response.message)
            }

            $('#contact-form').trigger('reset');
        },
        error: function (response) {
            alert(response.errors)
        }
    });
});