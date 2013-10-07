<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="main-header" class="grid clear">
		<div id="main-header-logo-container">
        	<h1 id="regent"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo get_bloginfo( 'name', 'display'); ?></a></h1>
        	<h2 id="tagline"><?php echo get_bloginfo('description'); ?></h2>
		</div>
		<div id="main-header-search-bar-container">
			<?php get_search_form(); ?>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </header>