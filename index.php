<?php get_header();?>

<div class="container">
    <div class="archive-container">
        <div class="archive-text">
        <?php 
            if(have_posts()){
                while( have_posts()){
                    the_post();

                    get_template_part( 'template-parts/content', 'archive' );
                }
            }
    
        ?>
        </div>
    </div>
</div>

<?php get_footer();?>   
