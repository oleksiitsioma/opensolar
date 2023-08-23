import $ from 'jquery';

const products = $('.partnersQuery__item');

const productsDropdown = $('#partners-products-select');

$(productsDropdown).on( 'input' , () => {
        
    products.show();

    const val = $(productsDropdown).val();

    if( val !== 'all'){

        for (let i = 0; i < products.length; i++) {
    
            if( $(products[i]).data('products').indexOf( val ) < 0 ){
                $(products[i]).hide();
            }
            
        }
        
    }

})