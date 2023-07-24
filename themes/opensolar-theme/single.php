<?php

get_header();

if( have_posts() ) : while( have_posts() ) : the_post(); 


?>

<div class="container container_small">

    <div class="singleBlogPost">
        <header class="singleBlogPost__header">
            <div class="blogMeta">
                <a href="#" class="blogMeta__userpic">
                    <img src="https://opensolar-pantheon.ddev.site/wp-content/uploads/2023/07/greenlancer-opensolar.png" alt="">
                </a>
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'user_nicename' ) ); ?>" class="blogMeta__userName"><?php the_author(); ?></a>
                <time class="blogMeta__date"><?php the_time('F j'); ?></time>
                <p class="blogMeta__size" id="blogpost-share" >5 minut read</p>
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
            <div class="blogPost__social"></div>
            <div class="blogPost__stats colGr">
                <div class="colGr__col_6">
                    
                </div>
                <div class="colGr__col_6"></div>
            </div>
        </footer>
    </div>

</div>


<?php

endwhile; endif;

get_footer();

?>