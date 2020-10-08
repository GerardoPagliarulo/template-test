require('./bootstrap');

import $ from 'jquery';

$(document).ready(function () {
    // MENU MOBILE
    // Hambutger Menu 
    let menuIcon = $('.menu-mobile-icon');
    let slideMenu = $('.menu-mobile-options');

    menuIcon.click( () => {
        slideMenu.slideToggle();

        if (menuIcon.hasClass("fa-bars") ) {
            menuIcon.removeClass("fa-bars").addClass("fa-times");
        } else { 
            menuIcon.removeClass("fa-times").addClass("fa-bars"); 
        }
    });    
});// <- END READY

