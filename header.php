<!DOCTYPE html>
<html lang="pl">
    <head>
        <?php wp_head();?>
    </head>
<body <?php body_class();?>>
<header class="nav-bar">
    <nav class="nav-container">
    <?php
    if(function_exists('the_custom_logo')){
        $custom_logo_id = get_theme_mod( 'custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
    }
    ?>
    <div class="brand">
        <a href="/blog"><img src="<?php echo $logo[0] ?>" alt="nav-brand-logo" class="nav-brand-logo"></a>
        <span class="brand-name"><a href="/blog"><?php echo get_bloginfo() ?></a></span>
    </div>
    <ul id="navigation-ul" class="navigation-ul">
    <?php
    wp_nav_menu( 
        array(
            'theme_location' => 'top-menu',
            'container' => '',
            'items_wrap' => '%3$s',
            )
        );
    ?>
    </ul>
    <div class="hamburger"><div class="bar"></div></div>
    </nav>
    
</header>