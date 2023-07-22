<?php get_header(); ?> 

<div class="container colGr">
    <div class="colGr__col_6">
        <div class="postContent">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <!-- <h1 class="singleNews__title"><?php the_title(); ?></h1> -->

                
                
                <?php 
                
                the_content();
                
                endwhile; endif; 

            ?>
        </div>
    </div>
</div>


<?php 

get_footer();

?>