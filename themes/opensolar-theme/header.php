<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="frontend">

    <?php dynamic_sidebar( 'sidebar-header' );  ?>

    <div class="header__utility">
        <button class="header__searchToggle"></button>
        <div class="languageSwitcher">
            <ul class="languageSwitcher__list">
                <?php pll_the_languages([
                    'display_names_as'  => 'slug',
                ]); ?>
            </ul>
        </div>
    </div>
    <button class="header__searchToggle header__searchToggle_mobile"></button>
    <button class="header__menuToggle">
        <span></span><span></span><span></span>
    </button>
