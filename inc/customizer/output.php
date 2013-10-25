<?php

function regent_customize_css() {
    ?>
         <style type="text/css">

        /* primary color */
        <?php generate_css('nav#main-menu a:hover, nav#main-menu li.current-menu-item a', 'background', 'regent_general_primary_color'); ?>
        <?php generate_css('nav#main-menu .sub-menu li', 'background', 'regent_general_primary_color'); ?>
        <?php generate_css('nav#main-menu ul .parent-li', 'background', 'regent_general_primary_color'); ?>
        <?php generate_css('nav#main-menu .sub-menu', 'background', 'regent_general_primary_color'); ?>
        <?php generate_css('#container #content h1 a:hover', 'color', 'regent_general_primary_color'); ?>
        <?php generate_css('#container #content .post-meta-data a', 'color', 'regent_general_primary_color'); ?>
        <?php generate_css('#container .post-category-tags a', 'color', 'regent_general_primary_color'); ?>
        <?php generate_css('#sidebar ul li a', 'color', 'regent_general_primary_color'); ?>
        <?php generate_css('cite.fn, cite.fn a', 'color', 'regent_general_primary_color'); ?>
        <?php generate_css('.reply a:hover', 'color', 'regent_general_primary_color'); ?>
        <?php generate_css('p.logged-in-as a', 'color', 'regent_general_primary_color'); ?>
        <?php generate_css('button, html input[type="button"], input[type="reset"], input[type="submit"]', 'background', 'regent_general_primary_color'); ?>
        <?php generate_css('button:hover, html input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover', 'background', 'regent_general_primary_color'); ?>
        <?php generate_css('footer#main-footer ul li a', 'color', 'regent_general_primary_color'); ?>
        <?php generate_css('p.logged-in-as a', 'color', 'regent_general_primary_color'); ?>

         </style>
    <?php

    echo get_theme_mod('regent_header_option');

}
add_action( 'wp_head', 'regent_customize_css'); 