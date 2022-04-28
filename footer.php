
<footer class="footer">
    <div class="footer-container">
        <span class="brand-name-footer"><a href="/blog"><?php echo get_bloginfo() ?></a></span>
        <?php
        wp_nav_menu( 
         array(
             'theme_location' => 'footer-menu',
            'container' => 'ul',
             'menu_id' => 'navigation-ul-footer',
             'menu_class' => 'navigation-ul-footer',
             )
         );

         if(function_exists('the_custom_logo')){
            $custom_logo_id = get_theme_mod( 'custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
        }
        ?>
        <div class="brand-logo-footer-container">
            <img src="<?php echo $logo[0] ?>" alt="brand-logo-footer" class="brand-logo-footer">
        </div>
        <span class="copyrights">All rights reserved &copy;</span>
    </div>
</footer>

<?php wp_footer();?>
</body>
</html>