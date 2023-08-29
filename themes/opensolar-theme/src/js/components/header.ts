import $ from 'jquery';

const header = $('.header');
const menu = $(header).find('.headerWidget__menu');
const menuToggle = $('.header__menuToggle');
console.log(menuToggle)
const menuMobileOpenClass = 'menu_open';
const menuToggleOpenClass = 'header__menuToggle_open';
$(menuToggle).remove();
$('.header__container').append(menuToggle);

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

$('.menu-item_open').on( 'click' , () => {
    $('.menu-item_open').removeClass('.menu-item_open');
})



const headerUtility = $('.header__utility');

const headerReplacer = () => {

    if( $(window).width() < 2200 && $(window).width() > 768){

        headerUtility.remove();
        $('.header__menuArea').append( headerUtility );

    } else {

        headerUtility.remove();
        $('.header__container').append( headerUtility );

    }

}

headerReplacer();

$(window).on( 'resize' , headerReplacer );


const headerSearchToggle = $('.header__searchToggle_mobile');
$(headerSearchToggle).remove();
$('.header__container').append(headerSearchToggle);
$(headerSearchToggle).on('click', () => {
    console.log( 'search' );
})


const languageSwitcher = $('.languageSwitcher');

// $(menu).prepend(languageSwitcher);