<?php

// Enqueue scripts
function theme_scripts() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Oxygen|Radley:300,700' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery') );
	wp_register_script( 'hover', get_template_directory_uri() . '/js/jquery.hoverIntent.minified.js', array(), null, false );
	wp_enqueue_script( 'hover' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

if ( ! function_exists( 'theme_setup' ) ) {
	function theme_setup() {
		register_sidebar(array(
			'name' 	=> 'Sidebar Widgets',
			'id'	=> 'sidebar-widgets',
			'description'	=> 'Widgets for the sidebar.',
			'before_widget'	=> '<div class="aside widget %2$s clear" id="%1$s">',
			'after_widget'	=> '</div>'
		));
		register_sidebar(array(
			'name' 	=> 'Footer Left Widgets',
			'id'	=> 'footer-left-widgets',
			'description'	=> 'Widgets for the left footer column.',
			'before_widget'	=> '<div class="aside widget %2$s clear" id="%1$s">',
			'after_widget'	=> '</div>'
		));
		register_sidebar(array(
			'name' 	=> 'Footer Center Widgets',
			'id'	=> 'footer-center-widgets',
			'description'	=> 'Widgets for the center footer column.',
			'before_widget'	=> '<div class="aside widget %2$s clear" id="%1$s">',
			'after_widget'	=> '</div>'
		));
		register_sidebar(array(
			'name' 	=> 'Footer Right Widgets',
			'id'	=> 'footer-right-widgets',
			'description'	=> 'Widgets for the right footer column.',
			'before_widget'	=> '<div class="aside widget %2$s clear" id="%1$s">',
			'after_widget'	=> '</div>'
		));
	}
}

add_action( 'after_setup_theme', 'theme_setup' );

add_action( 'init', 'register_my_menus' );
	function register_my_menus() {
		register_nav_menus(
			array(
			'primary' => __( 'Primary' ),
	));
}
// Custom comments loop
function regent_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		<div class="comment-table">
			<div class="comment-author vcard">
			<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
			<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
			</div>
			<div class="spacer"></div>
			<div class="comment-box">
				<div class="comment-triangle"></div>
				<?php if ($comment->comment_approved == '0') : ?>
						<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
						<br />
				<?php endif; ?>
				<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
					?>
				</div>

				<?php comment_text() ?>
			</div><!-- .comment-box -->
		</div><!-- .clear -->

		<div class="reply">
		<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>
<?php
        }