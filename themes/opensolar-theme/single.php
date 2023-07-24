<?php

get_header();

if( have_posts() ) : while( have_posts() ) : the_post(); 

$author = get_the_terms( get_the_ID(), 'authors' );

$author = $author[0];

?>

<div class="container container_small">

    <div class="singleBlogPost">
        <header class="singleBlogPost__header">
            <div class="blogMeta">
                <a
                    href="<?php // echo get_term_link( (int) $author->term_id, $taxonomy = 'authors' ); ?>" class="blogMeta__userpic"
                >

                <?php 
                $image = get_field( 'author_photo' , $author );
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

                </a>
                <a href="<?php // echo get_term_link( (int) $author->term_id, $taxonomy = 'authors' ); ?>" class="blogMeta__userName"><?php echo $author->name; ?></a>
                <time class="blogMeta__date"><?php the_time('F j, Y'); ?></time>
                <!-- <p class="blogMeta__size" id="blogpost-share" >5 minut read</p> -->
            </div>
            <button class="blogMeta__share"></button>
        </header>
        <article class="singleBlogPost__content">
            <div class="blogContent">
                <h1 class="blogContent__title"><?php the_title(); ?></h1>
                <div class="postContent"><?php the_content(); ?></div>
            </div>
        </article>
        <footer class="singleBlogPost__footer">
            <div class="blogPost__social">
                <a href="#" class="blogPost__socialLink blogPost__socialLink_facebook"></a>
                <a href="#" class="blogPost__socialLink blogPost__socialLink_twitter"></a>
                <a href="#" class="blogPost__socialLink blogPost__socialLink_link"></a>
            </div>
            <div class="blogPost__stats colGr">
                <div class="colGr__col_9 blogPost__statsContainer">
                    <p class="blogPost__statsItem blogPost__statsItem_views">0 views</p>
                    <p class="blogPost__statsItem blogPost__statsItem_comments"><?php echo get_comments_number(); ?> comments</p>
                </div>
                <div class="colGr__col_3 blogPost__statsContainer">
                    <p class="blogPost__statsItem blogPost__statsItem_likes">
                        0
                        <svg class="postLikes" id="fi_2589054" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                            <path d="m449.28 121.46a115.2 115.2 0 0 0 -137.89-35.75c-21.18 9.14-40.07 24.55-55.39 45.05-15.32-20.5-34.21-35.91-55.39-45a115.2 115.2 0 0 0 -137.89 35.7c-16.5 21.62-25.22 48.64-25.22 78.13 0 42.44 25.31 89 75.22 138.44 40.67 40.27 88.73 73.25 113.75 89.32a54.78 54.78 0 0 0 59.06 0c25-16.07 73.08-49.05 113.75-89.32 49.91-49.42 75.22-96 75.22-138.44 0-29.49-8.72-56.51-25.22-78.13z"></path>
                            <path d="m449.5 199.59c0 35.52-22.81 76.12-67.81 120.68-39 38.66-85.47 70.5-109.67 86a29.72 29.72 0 0 1 -32 0c-24.2-15.54-70.63-47.38-109.67-86-45-44.56-67.81-85.16-67.81-120.68 0-24 7-45.74 20.09-63a90.93 90.93 0 0 1 48.15-32.44 89.35 89.35 0 0 1 23.42-3.1c30.48 0 65.64 15.24 91.06 58.58a12.49 12.49 0 0 0 21.56 0c32.3-55.06 80.31-64.76 114.48-55.48a90.93 90.93 0 0 1 48.15 32.44c13.1 17.26 20.05 39.04 20.05 63z"></path>
                        </svg>
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <?php

    get_template_part( 'template-parts/recent' , 'posts' );
    
    comments_template(  ); ?>

</div>


<?php

endwhile; endif;

get_footer();

?>