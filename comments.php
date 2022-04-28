

<div class="comments-header">
    <h1 class="comment-tittle">
        <?php
            if(!have_comments()){
                echo 'There are no comments yet. Leave a comment';
            }
            else{
                if(get_comment_count() == 1){
                    echo get_comment_count(). 'comment';
                }else{
                    echo get_comment_count(). 'comments';
                }
            }
        ?>
    </h1>
</div>
<div class="comments-container">


</div>
