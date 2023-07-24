import $ from 'jquery';

import './style.scss';

import './js/components/header.ts';

const blogpostShareButton = $('#blogpost-share');

$(blogpostShareButton).on('click' , () => {
    console.log( 'share post' );
})