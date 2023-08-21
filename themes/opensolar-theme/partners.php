<?php

// Template name: Partners

get_header();

if(have_posts()) : while( have_posts() ) : the_post();

the_content(); 

endwhile; endif;

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
    
    $partnersQueryArgs = array(
        'post_type' => 'partners',
    );

    $partnersQuery = new WP_Query( $partnersQueryArgs );

    if( $partnersQuery->have_posts()) : while( $partnersQuery->have_posts()) : $partnersQuery->the_post();

        the_title(  );
        echo '<br>';

    endwhile; wp_reset_postdata(); endif;
    
    ?>
    
</div>




<?php get_footer(); 