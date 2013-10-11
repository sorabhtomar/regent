<div class="post-meta-data">
    <span class="post-date"><?php the_time('F d, Y'); ?> - </span> 
    <span class="post-author">Post by <?php the_author_posts_link(); ?> - </span>
    <span class="post-comments"><?php comments_popup_link('No Comments ', '1 Comments ', '% Comments '); ?></span>
</div>
<?php the_content(); ?>
<div class="post-category-tags">
	<?php if( get_the_category() ) { ?>
	    <div class="post-categories">
	        <div class="cat-meta">Posted Under: <?php the_category(' '); ?></div>
	    </div><!-- .post-categories -->
	<?php } ?>
	<?php if( get_the_tags() ) { ?>
	    <div class="post-tags">
	    	
	        <div class="tag-meta">Tagged with: <?php the_tags(', '); ?></div>
	    </div><!-- .post-tags -->
	<?php } ?>
</div><!-- .post-category-tags -->