<?php 

require_once( get_template_directory(  ) . '/inc/theme-assets.php');
require_once( get_template_directory(  ) . '/inc/theme-settings.php');
require_once( get_template_directory(  ) . '/inc/theme-menus.php');
require_once( get_template_directory(  ) . '/inc/theme-widgets.php');



// CUSTOM POST TYPES

require_once( get_template_directory(  ) . '/inc/post-types/cpt-partners.php');
require_once( get_template_directory(  ) . '/inc/post-types/cpt-news.php');


// TAXONOMIES

require_once( get_template_directory(  ) . '/inc/taxonomies/tax-partners-products.php');
require_once( get_template_directory(  ) . '/inc/taxonomies/tax-partners-regions.php');
require_once( get_template_directory(  ) . '/inc/taxonomies/tax-news-tags.php');