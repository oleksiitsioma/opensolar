import $ from 'jquery';

const header = $('.header');
const menu = $(header).find('.headerWidget__menu_main');
const menuToggle = $(header).find('.header__menuToggle');
const menuMobileOpenClass = 'menu_open';
const menuToggleOpenClass = 'header__menuToggle_open';

const menuOpener = ( ) => {

    if( $(window).width() <= 768 ){
        $(menuToggle).toggleClass(menuToggleOpenClass)
        $(menu).toggleClass(menuMobileOpenClass);
    }
}

$(menuToggle).on('click' , menuOpener );