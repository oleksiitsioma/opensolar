<?php 


if(have_posts(  )) : while( have_posts(  )) : the_post(  );

switch ( get_post_type() ) {

    case 'page':
        echo get_template_part( 'template-parts/content' );
        break;
    
    default:
        # code...
        break;
}

endwhile; endif;