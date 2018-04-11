<?php

Bizpoint_Kirki::add_section( 'upgrade_section', array(
    'title'          => __( 'Upgrade to Premium', 'bizpoint' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


// Premium banner
Bizpoint_Kirki::add_field( 'bizpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'upgrader_custom_field',
	'section'     => 'upgrade_section',
	'default'     => '<div class="customizer-pro-promo"><h3>'. __( 'Upgrade to Premium', 'bizpoint') .'</h3>
        <p>' . __( 'Let\'s make your website even better with a premium version!', 'bizpoint' ) . '</p>
        <ul class="pro-features-list">
            <li>' . __( 'Premium Website Demos', 'bizpoint' ) . '</li>
            <li>' . __( 'Advanced Customization', 'bizpoint' ) . '</li>
            <li>' . __( 'Advanced Cover Section with Slider & Video', 'bizpoint' ) . '</li>
            <li>' . __( 'Remove Footer Branding', 'bizpoint' ) . '</li>
            <li>' . __( 'Schema.org Integration', 'bizpoint' ) . '</li>
            <li>' . __( 'Priority support and many other features to make your website better...', 'bizpoint' ) . '</li>
        </ul>
        <a class="button button-primary" href="https://themes.salttechno.com/wordpress-theme/bizpoint-premium/" target="_blank">' . __( 'Learn More', 'bizpoint' ) . '</a></div>',
) );
