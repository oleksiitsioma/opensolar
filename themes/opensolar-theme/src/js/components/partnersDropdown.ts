import $ from 'jquery';

const products = $('.partnersQuery__item');

const productsDropdown = $('#partners-products-select');

$(productsDropdown).on( 'input' , () => {
        
    products.show();
    $(products).removeAttr('showinproductfilter');

    const val = $(productsDropdown).val();

    if( val !== 'all'){

        for (let i = 0; i < products.length; i++) {
    
            if( $(products[i]).data('products').indexOf( val ) < 0 && $(products[i]).is(":visible")){
                $(products[i]).hide();
                $(products[i]).attr('showinproductfilter' , 'false')
            } else {

                $(products[i]).attr('showinproductfilter' , 'true')
            }

            if( $(products[i]).attr('showinlivesearch') === 'false' ){
                $(products[i]).hide();
            }
            
        }
        
    }

})

const partnersLiveSearch = $('#live-partner-search');

$(partnersLiveSearch).on( 'input' , () => {

    $(products).show();
    $(products).removeAttr('showinlivesearch');

    const liveSearchVal = $(partnersLiveSearch).val();

    for (let i = 0; i < products.length; i++) {

        const title = $(products[i]).find('h3')[0].textContent.toLowerCase();


        if( title.indexOf( liveSearchVal.toLowerCase() ) < 0 ){
            $(products[i]).hide();
            $(products[i]).attr('showinlivesearch' , 'false')
        } else {
            $(products[i]).attr('showinlivesearch' , 'true')
        }

        if( $(products[i]).attr('showinproductfilter') === 'false' ){
            $(products[i]).hide();
        }
        
    }

})

const partnerfilterreset = $('#partner-filter-reset');

$(partnerfilterreset).on( 'click' , () => {

    $(products).show();

    $(products).removeAttr('showinproductfilter');
    $(products).removeAttr('showinlivesearch');

    $(productsDropdown).val('all');
    $(partnersLiveSearch).val('')

})


// partners pagination

const partnersperpage = 10;

let showedPosts = partnersperpage;

console.log( products.length );

for (let i = showedPosts; i < products.length; i++) {
    $(products[i]).hide();
    
}

const scrollPartners = () => {

    $(products).show();

    for (let i = showedPosts; i < products.length; i++) {
        $(products[i]).hide();   
    }

}

$(window).on( 'scroll' , () => {

    if( $(window).scrollTop() > $(products[showedPosts - 1]).offset().top - $(window).height() ){

        showedPosts < $(products).length - partnersperpage
            ? showedPosts += partnersperpage
            : showedPosts = $(products).length;

        scrollPartners();


    }

})

// partners anchoring

const partnerLinks = $('.partnersClickableBoard__logoWrapper');

$(partnerLinks).on( 'click' , function(){

    const target = '#' + $(this).data('target');

    if( $(target).is(':hidden') ){
        
        showedPosts = $(products).index( $(target) ) + 3;
        scrollPartners();

    }

    window.scrollTo( 0, $(target).offset().top )
})