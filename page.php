<?php get_header();?>

<div class="container">
    <div class="single-container">
        <div class="single-text">
        <?php 
            if(have_posts()){
                while( have_posts()){
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );
                }
            }
    
        ?>
        </div>
    </div>
</div>

<?php get_footer();?>   
