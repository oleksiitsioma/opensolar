<?php get_header(); ?>

<div class="universalCover">
    <?php

    $term = get_term_by( 'name', single_term_title( '', false ), 'webinars-regions' );
    
    $coverBG = get_field( 'region_cover_image' , $term );

    if( !empty( $coverBG ) ): ?>
        <img class="universalCover__manualBG" src="<?php echo esc_url($coverBG['url']); ?>" alt="<?php echo esc_attr($coverBG['alt']); ?>" />
    <?php endif; ?>
</div>

<div class="container">
    <div class="webinarRegionHeader">
        <h1 class="webinarRegionHeader__title">Weekly Webinars <span><?php single_term_title(); ?></span></h1>
    </div>
</div>

    
<?php if(have_posts()) : ?> 

    <div class="container container_small postContent">
        
        <?php while(have_posts()) : the_post(); ?>

            <div class="webinarItem">
                <div class="webinarItem__header">
                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID() , 'thumbnail' )?>" alt="<?php the_title(); ?>" class="webinarItem__headerIcon">
                    <h2 class="webinarItem__headerTitle" ><?php the_title(); ?></h2>
                </div>
                <div class="webinarItem__content"><?php the_content(); ?></div>
            </div>

        <?php endwhile; ?>

    </div>

<?php  endif; ?>

<?php get_footer();


?>