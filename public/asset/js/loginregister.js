$(document).ready(function () {
    $('#login-btn').click(function () {
        $('#login-form').css('display', 'flex').show();
        $('#register-form').hide();
    });

    $('#login').click(function () {
        $('#login-form').css('display', 'flex').show();
        $('#register-form').hide();
    });

    $('#cls-login').click(function () {
        $('#login-form').hide();
    });

    $('#register-btn').click(function () {
        $('#register-form').css('display', 'flex').show();
        $('#login-form').hide();
    });

    $('#cls-register').click(function () {
        $('#register-form').hide();
    });

});

