require('./bootstrap');
require('jquery-validation');

import $ from 'jquery';

// FORM
$(document).ready(function () {
    // Vars
    var myInput = $('input');
    var pw = $('#password');
    var firstName = $('#first-name');
    var lastName = $('#last-name');
    var numbers = /[0-9]/g;
    var specialChar = /[!"#$%&'()*+,-./:;<=>?@[\]^_`{|}~]/g;
    // Backgroun color change
    $('body').addClass('bg-white');
    $('footer').addClass('bg-grey');
    // Form Validation
    // General validation
    $('#form').validate({
        rules: {
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            address: {
                required: false,
                minlength: 10
            },
            password: {
                required: true,
                pw_validation: true
            },
            confirm_password: {
                required: true,
                equalTo: '#password'
            }
        },
        // Labels messages (labels are disabled)
        messages: {
            address: "Please enter complete address",
            confirm_password: "Not same password"
        },
        // Validation error layout
        highlight: function(element) {
            if ($(element).addClass('error')) {
                $(element).next('.fa-exclamation-circle').removeClass('hidden');
                if ($(element).hasClass('valid')) {
                    $(element).removeClass('valid').next('.fa-exclamation-circle').removeClass('hidden');
                }
            }
        },
        unhighlight: function(element) {
            if ($(element).addClass('valid')) {
                if ($(element).hasClass('error')) {
                    $(element).removeClass('error').next('.fa-exclamation-circle').addClass('hidden');
                }
            }
        },       
        // No labels
        errorPlacement: function () {
            return false;
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    // Password validation
    $.validator.addMethod("pw_validation", function (value) {
        if ( /^(?=.*[0-9])(?=.*[!"#$%&'()*+,-./:;<=>?@[\]^_`{|}~]{3,})(?!.* ).{10,}$/.test(value)) {
            if (!(value.includes(firstName.val())) && !(value.includes(lastName.val()))) {
                return true;
            }
            else {
                return false;
            }    
        }
        else {
            return false;
        }    
    }, "Passwor uncorrect");        
    // Password checklist visibility and general usability feedbacks
    pw.focus(function () {
        $('.password-check').removeClass('visibility');
    });
    pw.blur(function () {
        $('.password-check').addClass('visibility');
    });    
    // On keyup
    myInput.on('keyup', function () {
        // At least one number
        if (pw.val().match(numbers)) {
            $('.num-exclamation').addClass('hidden');
            $('.num-check').removeClass('hidden');
            $('.num').removeClass('uncheck');
            $('.num').addClass('check');
        }
        else {
            $('.num-exclamation').removeClass('hidden');
            $('.num-check').addClass('hidden');
            $('.num').removeClass('check');
            $('.num').addClass('uncheck');
        }
        // At least three special characters
        if ((pw.val().match(specialChar) || []).length >= 3) {
            $('.special-char-exclamation').addClass('hidden');
            $('.special-char-check').removeClass('hidden');
            $('.special-char').removeClass('uncheck');
            $('.special-char').addClass('check');
        }
        else {
            $('.special-char-exclamation').removeClass('hidden');
            $('.special-char-check').addClass('hidden');
            $('.special-char').removeClass('check');
            $('.special-char').addClass('uncheck');
        }
        // No white space
        if (!(pw.val().includes(" ")) && !(pw.val().length == 0)) {
            $('.space-exclamation').addClass('hidden');
            $('.space-check').removeClass('hidden');
            $('.space').removeClass('uncheck');
            $('.space').addClass('check');
        }
        else {
            $('.space-exclamation').removeClass('hidden');
            $('.space-check').addClass('hidden');
            $('.space').removeClass('check');
            $('.space').addClass('uncheck');
        }
        // No First and Last name
        if (!(pw.val().includes(firstName.val())) && !(pw.val().includes(lastName.val())) && !(pw.val().length == 0)) {
            $('.no-name-exclamation').addClass('hidden');
            $('.no-name-check').removeClass('hidden');
            $('.no-name').removeClass('uncheck');
            $('.no-name').addClass('check');
        }
        else {
            $('.no-name-exclamation').removeClass('hidden');
            $('.no-name-check').addClass('hidden');
            $('.no-name').removeClass('check');
            $('.no-name').addClass('uncheck');
        }
        // Lenght password: 10 characters
        if (pw.val().length >= 10) {
            $('.min-char-exclamation').addClass('hidden');
            $('.min-char-check').removeClass('hidden');
            $('.char').removeClass('uncheck');
            $('.char').addClass('check');
        }
        else {
            $('.min-char-exclamation').removeClass('hidden');
            $('.min-char-check').addClass('hidden');
            $('.char').removeClass('check');
            $('.char').addClass('uncheck');
        }
    });
});// <- END READY
