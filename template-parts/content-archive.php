
<div class="post-wrapper">
    <span class="post-tittle"><a href="<?php the_permalink();?>"><?php the_title();?></a></span>
    <div class="date-comment-wrapper">
        <span class="post-date-archive"><?php the_date();?></span>
        <span class="post-comment-number"><i class="fa fa-comment"></i><?php comments_number();?></span>
    </div>
    <div class="post-desc-container">
        <span class="post-desc"><?php the_excerpt();?></span>
    </div>
    <a href="<?php the_permalink();?>"><button class="read-more-btn">Read more...</button></a>
    <img class="post-thumbnail" src="<?php the_post_thumbnail_url('thumbnail');?>" alt="">
</div>