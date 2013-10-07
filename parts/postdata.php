<div class="post-meta-data">
    <span class="post-date"><?php the_date('F d, Y'); ?></span> - 
    <span class="post-author">Post by <?php the_author(); ?></span> - 
    <span class="post-comments"><?php comments_popup_link('No Comments ', '1 Comments ', '% Comments '); ?></span>
</div>
<?php the_content(); ?>
<div class="post-category-tags">
    <div class="post-categories">
        <p>Posted Under: <?php the_category(' '); ?></p>
    </div><!-- .post-categories -->
    <div class="post-tags">
        <p>Tagged with: <?php the_tags(', '); ?></p>
    </div><!-- .post-tags -->
</div><!-- .post-category-tags -->