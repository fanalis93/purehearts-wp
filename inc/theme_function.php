<?php
function jk_customizer_register($wp_customize)
{
    // select / remove logo
    $wp_customize->add_section('jk_header_area', array(
        'title' => __('Header Area', 'jkfunden'),
        'description' => 'You can update the header area here.',
    ));
    $wp_customize->add_setting('jk_logo', array(
        'default' => get_bloginfo('template_directory') . '/assets/images/logo.png',
    ));
    $wp_customize->add_setting('jk_helpline', array(
        'default' => '+233 456 789 01',
    ));
    $wp_customize->add_setting('jk_email', array(
        'default' => 'example@info.com',
    ));
    $wp_customize->add_setting('jk_address', array(
        'default' => '54 Berrick St Boston MA 02115.',
    ));
    $wp_customize->add_setting('jk_updates', array(
        'default' => 'Delivers Personal Protective Equipments to North Macedonia . . .',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jk_logo', array(
        'label' => 'Upload Logo Image',
        'setting' => 'jk_logo',
        'section' => 'jk_header_area',
    )));
    $wp_customize->add_control('jk_helpline', array(
        'label' => 'Change / Update Helpline Number',
        'setting' => 'jk_helpline',
        'section' => 'jk_header_area',
    ));
    $wp_customize->add_control('jk_email', array(
        'label' => 'Change / Update Email',
        'setting' => 'jk_email',
        'section' => 'jk_header_area',
    ));
    $wp_customize->add_control('jk_address', array(
        'label' => 'Change / Update Helpline Number',
        'setting' => 'jk_address',
        'section' => 'jk_header_area',
    ));
    $wp_customize->add_control('jk_updates', array(
        'label' => 'Change Updates',
        'setting' => 'jk_updates',
        'section' => 'jk_header_area',
    ));
}
add_action('customize_register', 'jk_customizer_register');
