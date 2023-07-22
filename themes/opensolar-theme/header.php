<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body class="frontend">
    <header class="header">
        <div class="container colGr header__container">
            <div class="colGr__col_3">
                <div class="header__logoArea">
                    <?php if( has_custom_logo() ) { the_custom_logo( ); } ?>
                </div>
            </div>
            <div class="colGr__col_3"></div>
            <div class="colGr__col_6 header__menuArea">
                <?php 

                    wp_nav_menu([
                        'theme_location'    => 'header-primary',
                        'menu_class'        => 'headerWidget__menu headerWidget__menu_main',
                        'container_class'   => 'headerWidget'
                    ]);
                    
                    dynamic_sidebar( 'sidebar-header-utility' );                
                
                ?>
            </div>
            <button class="header__menuToggle">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>