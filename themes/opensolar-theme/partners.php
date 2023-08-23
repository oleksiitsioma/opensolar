<?php

// Template name: Partners

get_header();

if(have_posts()) : while( have_posts() ) : the_post();

the_content(); 

endwhile; endif;

?>

<div class="partnersFilter">

    <?php 

        $productTerms = get_terms([
            'taxonomy'      => 'partners-products',
            'hide_empty'    => true
        ] );

        if( sizeof( $productTerms) > 0){

            echo '<select name="partners-filter-products">';
            echo '<option disabled selected>Products</option>';

            foreach ( $productTerms as $term ){

                echo '<option value="' . $term->slug . '">' . $term->name . '</option>';

            }

            echo '</select>'; 

        } 

    ?>

</div>

<div class="partnersQuery">

    <?php
    
    $partnersQueryArgs = array(
        'post_type' => 'partners',
    );

    $partnersQuery = new WP_Query( $partnersQueryArgs );

    if( $partnersQuery->have_posts()) : while( $partnersQuery->have_posts()) : $partnersQuery->the_post();

    $regions = get_the_terms('partners_regions'); 
    $products = get_the_terms('partners_products'); 
    
    
    ?>

        <div class="partnersQuery__item colGr">
            <div class="colGr__col_9">
                <h3 class="partnersQuery__itemText_big"><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
            <div class="colGr__col_3">
                <p class="partnersQuery__itemText_big">Available in</p>
                <p class="partnersQuery__itemText_small"><?php implode( ', ' , $regions ); ?></p>
                <p class="partnersQuery__itemBigText">Products</p>
                <p class="partnersQuery__itemText_small"><?php implode( ', ' , $products ); ?></p>
            </div>

        </div>

    <?php endwhile; wp_reset_postdata(); endif; ?>
    
</div>




<?php get_footer(); 