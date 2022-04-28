<?php get_header();?>

<div class="container">
    <div class="single-container">
        <div class="single-text">
        <h1><?php the_title();?></h1>
        <?php 
            if(have_posts()){
                while( have_posts()){
                    the_post();

                    get_template_part( 'template-parts/content', 'article' );
                }
            }
    
        ?>
        </div>
    </div>
</div>

<?php get_footer();?>   
