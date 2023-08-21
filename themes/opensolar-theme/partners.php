<?php

// Template name: Partners

get_header();

echo get_template_part( 'template-parts/loop' );

?>

<div class="partnersFilter">

    <?php 

        // $productTerms = get_terms([
        //     'taxonomy'      => 'partners-products',
        //     'hide_empty'    => true
        // ] );

        // if( sizeof( $productTerms) > 0){

        //     echo '<select name="partners-filter-products">';
        //     echo '<option disabled selected>Products</option>';

        //     foreach ( $productTerms as $term ){

        //         echo '<option value="' . $term->slug . '">' . $term->name . '</option>';

        //     }

        //     echo '</select>'; 

        // } 

    ?>

</div>

<div class="partnersQuery">

    <?php
    
    $queryArgs = array(
        'post_type'         => 'partners',
    );

    $query = new WP_Query( $queryArgs );

    if( $query->have_posts()) : while( $query->have_posts()) : $query->the_post();

        the_title(  );
        echo '<br>';

    endwhile; wp_reset_postdata(); endif;
    
    ?>
    
</div>




<?php get_footer(); 