require('./bootstrap');
require('jquery-validation');

import $ from 'jquery';

// FORM
$(document).ready(function () {
    // Vars
    var myInput = $('input');
    var pw = $('#password');
    var firstName_input = $('#first-name');
    var lastName_input = $('#last-name');
    var numbers_regex = /[0-9]/g;
    var specialChar_regex = /[!"#$%&'()*+,-./:;<=>?@[\]^_`{|}~]/g;
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
                address_validation: true
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
    // Address validation
    $.validator.addMethod("address_validation", function (value) {
        if (value.length == 0) {
            return true;
        }
        else if (/^(?=.{10,})([a-zA-Z0-9\s]+)([0-9]{5}\s+)([a-zA-Z0-9\s]+)$/.test(value)) {
            return true;
        }
        else {
            return false;
        } 
    });     
    // Password validation
    $.validator.addMethod("pw_validation", function (value) {
        if ( /^(?=.*[0-9])(?=.*[!"#$%&'()*+,-./:;<=>?@[\]^_`{|}~]{3,})(?!.* ).{10,}$/.test(value)) {
            if (!(value.toLowerCase().includes(firstName_input)) && !(value.toLowerCase().includes(lastName_input))) {
                return true;
            }
            else {
                return false;
            }    
        }
        else {
            return false;
        }    
    });        
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
        if (pw.val().match(numbers_regex)) {
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
        if ((pw.val().match(specialChar_regex) || []).length >= 3) {
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
        if (!(pw.val().toLowerCase().includes(firstName_input.val().toLowerCase())) && !(pw.val().toLowerCase().includes(lastName_input.val().toLowerCase())) && !(pw.val().length == 0)) {
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
