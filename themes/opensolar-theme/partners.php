<?php

// Template name: Partners

get_header(); ?>

<div class="postContent">

<?php if(have_posts()) : while( have_posts() ) : the_post(); 

the_content(); 

endwhile; endif;

?>

<div class="partnersQuery">

    <div class="partnersQuery__filter">

        <select name="partners-products" id="partners-products-select">

            <option value="all" selected>Show All</option>

            <?php 
            
            $productTerms = get_terms( 'partners-products');

            $productTermsStripped = [];

            foreach( $productTerms as $product ){
                $productTermsStripped[] = $product->name;
                echo '<option value="' . $product->name . '">' . $product->name . '</option>';
            }

            ?>

        </select>


    </div>

    <?php
    
    $partnersQueryArgs = array(
        'post_type'         => 'partners',
        'posts_per_page'    => -1
    );

    $partnersQuery = new WP_Query( $partnersQueryArgs );

    if( $partnersQuery->have_posts()) : while( $partnersQuery->have_posts()) : $partnersQuery->the_post();

    $regions = get_the_terms( get_the_ID() , 'partners-regions'); 
    $products = get_the_terms( get_the_ID() , 'partners-products');

    $regionsStripped = [];

    foreach( $regions as $region ){
        $regionsStripped[] = $region->name;
    }

    $productsStripped = [];

    foreach( $products as $product ){
        $productsStripped[] = $product->name;
    }
    
    ?>

        <div
            class="partnersQuery__item colGr"
            <?php
                if ( sizeof( $regionsStripped ) > 0  ) {
                    echo 'data-regions="' . implode( ', ' , $regionsStripped ) . '"' ; 
                } 
                if ( sizeof( $productsStripped ) > 0  ) {
                    echo 'data-products="' . implode( ', ' , $productsStripped ) . '"' ; 
                } 
            ?>
        >
            <div class="colGr__col_9 partnersQuery__itemContent">
                <h3 class="partnersQuery__itemText_big"><?php the_title(); ?></h3>
                <?php
                    the_content();
                    the_post_thumbnail(
                        array(360, 240),
                        array(
                            'alt'   => get_the_title( get_the_ID() )
                        )
                    );
                ?>
            </div>
            <div class="colGr__col_3 partnersQuery__itemMeta">
                <div class="partnersQuery__itemMetaBlock">
                    <?php if ( sizeof( $regionsStripped ) > 0  ) { ?>
                        <p class="partnersQuery__itemText_big">Available in</p>
                        <p class="partnersQuery__itemText_small"><?php echo implode( ', ' , $regionsStripped ); ?></p>
                    <?php } ?>
                </div>
                <div class="partnersQuery__itemMetaBlock">
                    <?php if ( sizeof( $productsStripped ) > 0  ) { ?>
                        <p class="partnersQuery__itemText_big">Products</p>
                        <p class="partnersQuery__itemText_small"><?php echo implode( ', ' , $productsStripped ); ?></p>
                    <?php } ?>
                </div>
                <div class="partnersQuery__itemMetaBlock">
                    <?php 
                        if( get_field( 'website' ) ){
                            echo '<a class="partnersQuery__itemText_small partnersQuery__itemLink" href="' . get_field( "website") . '">Visit their Website</a><br>'; 
                        }
                        if( get_field( 'learn_more_url' ) ){
                            echo '<a class="partnersQuery__itemText_small partnersQuery__itemLink" href="' . get_field( "learn_more_url") . '">Learn more</a>'; 
                        }
                    ?>
                </div>
            </div>

        </div>

    <?php endwhile; wp_reset_postdata(); endif; ?>
    
</div>



</div>




<?php get_footer(); 