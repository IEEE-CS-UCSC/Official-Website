<?php

Bizpoint_Kirki::add_panel( 'custom_frontpage', array(
    'priority'    => 22,
    'title'       => esc_html__( 'Frontpage Settings', 'bizpoint' ),
    'active_callback' => 'bizpoint_is_default_frontpage'
) );


include( get_template_directory() . '/inc/customizer/frontpage/cover.php');
include( get_template_directory() . '/inc/customizer/frontpage/highlights.php');
include( get_template_directory() . '/inc/customizer/frontpage/features.php');
include( get_template_directory() . '/inc/customizer/frontpage/content.php');
include( get_template_directory() . '/inc/customizer/frontpage/cta.php');
include( get_template_directory() . '/inc/customizer/frontpage/loading.php');



Bizpoint_Kirki::add_section( 'frontpage_inactive', array(
    'title'          => __( 'Frontpage Sections', 'bizpoint' ),
    'panel'          => '',
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'active_callback' => 'bizpoint_is_frontpage_inactive'
) );

Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
    'type'        => 'custom',
    'settings'    => 'frontpage_inactive_alert',
    'section'     => 'frontpage_inactive',
    'default'     => '<div class="notice notice-error"><h4><em>'. __( 'Frontpage sections are enabled only of you have static page with "Default" page template as your frontpage.', 'bizpoint') .'<em></h4></div>',
) );
