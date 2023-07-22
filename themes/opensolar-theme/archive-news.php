<?php get_header(); ?>

<div class="container">

    <h1 class="archive__title">Latest News</h1>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <div class="postTile">
            <time class="postTile__date" datetime="<?php the_time('m-d-Y h:i:s T'); ?>"><?php the_time('F j, Y'); ?></time>
            <h2 class="postTile__title"><?php the_title(); ?></h2>
            <p class="postTile__excerpt"><?php echo get_the_excerpt( ); ?></p>
            <footer class="colGr postTile__footer">
                <div class="colGr__col_8">
                    <p class="postTile__tags">
                        <?php
                            $newsTags = get_the_terms( get_the_ID() , 'news-tags');

                            $newsTagsArray = [];

                            foreach ($newsTags as $tag) {
                                $newsTagsArray[] = $tag->name;
                            }

                            echo ( implode( ', ' , $newsTagsArray ) );
                        ?>
                    </p>
                </div>
                <div class="colGr__col_4">
                    <a href="<?php the_permalink(); ?>" class="postTile__readMore">Learn More</a>
                </div>
                
            </footer>
        </div>

    <?php endwhile; endif; ?>

    <div class="archive__pagination">
        <?php the_posts_pagination( ); ?>
    </div>

</div>





<?php get_footer(); ?>