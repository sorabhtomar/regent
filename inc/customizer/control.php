<?php 

function regent_customize_register( $wp_customize ) {

    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('background_image');
    $wp_customize->remove_section('nav');
    $wp_customize->remove_section('static_front_page');

    //  =============================
    //  = Header                    =
    //  =============================
    $wp_customize->add_section( 'regent_general' , array(
        'title'      => 'Primary Color',
        'priority'   => 26,
    ) );

        // Header Top Border Color
        $wp_customize->add_setting( 'regent_general_primary_color' , array(
            'default'     => '#1A68BD',
            'transport'   => 'refresh',
            'type'        => 'option'
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_primary_color', array(
            'label'        => 'Primary Color',
            'section'    => 'regent_general',
            'settings'   => 'regent_general_primary_color',
        ) ) );

}
add_action( 'customize_register', 'regent_customize_register' );
    