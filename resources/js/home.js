require('./bootstrap');

import $ from 'jquery';

$(document).ready(function () {
    // HOME NAVBAR 
    // Scroll changement
    $('.main-nav').removeClass('black-nav');
    $('.stat-nav').removeClass('orange-badge-nav');
    $('.stat-nav').addClass('dark-badge-nav');

    $(window).scroll(function () {
        let height = $(window).scrollTop();
        
        $('.main-nav').addClass('black-nav');
        $('.stat-nav').addClass('orange-badge-nav');
        $('.stat-nav').removeClass('dark-badge-nav');

        if (height === 0) {
            $('.main-nav').removeClass('black-nav');
            $('.stat-nav').removeClass('orange-badge-nav');
            $('.stat-nav').addClass('dark-badge-nav');
        }
    });
});// <- END READY
