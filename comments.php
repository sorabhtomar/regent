<?php

wp_list_comments( array(
    'type'              => 'comment',
    'reply_text'        => 'Reply',
    'avatar_size'       => 62
), $comments ); ?>

<?php comment_form( array(
    'comment_notes_after' => '',
    'title_reply' => '<h3 class="leave-comment">Leave a Comment</h3>'
) ); ?>