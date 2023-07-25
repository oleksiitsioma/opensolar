import $ from 'jquery';

import './style.scss';

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