import $ from 'jquery';

import './style.scss';

import './js/vendor/slick.ts';

import './js/settings/vars.ts';

import './js/components/header.ts';

import './js/components/languageSwitcher.ts';

const blogpostShareButton = $('#blogpost-share');

$(blogpostShareButton).on('click' , () => {
    console.log( 'share post' );
})

const postLikes = $('.postLikes');

$(postLikes).on('click', function(){
    $(this).toggleClass('liked')
})

$(document).ready(function(){
    $('.carousel').slick({
        arrows: false,
        dots: false
    });
    $('.carouselArrows').slick({
        arrows: true
    });
    $('.carouselDots').slick({
        arrows: true
    });
    $('.carouselArrowsDots').slick({
        arrows: true
    });
  });