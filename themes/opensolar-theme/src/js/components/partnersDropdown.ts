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

        if( $(products[i]).attr('id').indexOf( liveSearchVal.toLowerCase() ) < 0 ){
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