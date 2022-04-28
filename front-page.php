<?php get_header();?>

<div class="container">
    <h1 class="head-welcome"><?php the_title();?></h1>
        <div class="text">
            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('smallest');?>" alt="">
            <?php endif; ?>
            <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <?php the_content();?>
            <?php endwhile; endif; ?>
        </div>
            
</div>

<?php get_footer();?>   
