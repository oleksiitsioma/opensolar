import $ from 'jquery';

const header = $('.header');
const menu = $(header).find('.headerWidget__menu');
const menuToggle = $(header).find('.header__menuToggle');
const menuMobileOpenClass = 'menu_open';
const menuToggleOpenClass = 'header__menuToggle_open';

const bodyClassOpenMenu = 'menu-open';

const menuOpener = ( ) => {

    if( $(window).width() <= 768 ){

        if( $('body').hasClass(bodyClassOpenMenu) ){

            $(menuToggle).removeClass(menuToggleOpenClass)
            $(menu).removeClass(menuMobileOpenClass);
            $('body').removeClass(bodyClassOpenMenu);
    
        } else {

            $(menuToggle).addClass(menuToggleOpenClass)
            $(menu).addClass(menuMobileOpenClass);
            $('body').addClass(bodyClassOpenMenu);
            
        }
    }
}

$(menuToggle).on('click' , menuOpener );

const menuAnchors = $('.headerWidget__menu .menu-item > a[href="#"]');

menuAnchors.removeAttr('href');

const menuItemsWithChildren = $('.headerWidget__menu .menu-item-has-children');

$(menuItemsWithChildren).on('click' , function() {

    $(menuItemsWithChildren).removeClass('menu-item_open');
    $(this).addClass('menu-item_open');

})


const headerSearchToggle = $('.header__searchToggle');

$(headerSearchToggle).on('click' , () =>{
    console.log( 'header search' );
})

