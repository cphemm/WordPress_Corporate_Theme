<?php
function business_customize_register($wp_customize){
	// Banner Section
	$wp_customize->add_section('banner', array(
		'title'	=> __('Banner', 'corporate_theme'),
		'description'	=> sprintf(__('Options for homepage banner', 'corporate_theme')),
		'priority'	=> 130
	));

	// Heading Setting
	$wp_customize->add_setting('banner_heading', array(
		'default'		=> _x('Business Announcements', 'corporate_theme'),
		'type'			=> 'theme_mod'
	));

	// Heading Control
	$wp_customize->add_control('banner_heading', array(
		'label'			=> __('Heading', 'corporate_theme'),
		'section'		=> 'banner',
		'priority'		=> 20
	));

	// Text Setting
	$wp_customize->add_setting('banner_text', array(
		'default'		=> _x('For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.', 'corporate_theme'),
		'type'			=> 'theme_mod'
	));

	// Text Control
	$wp_customize->add_control('banner_text', array(
		'label'			=> __('Text', 'corporate_theme'),
		'section'		=> 'banner',
		'priority'		=> 20
	));

	// Button Text Setting
	$wp_customize->add_setting('banner_btn_text', array(
		'default'		=> _x('Sign Up', 'corporate_theme'),
		'type'			=> 'theme_mod'
	));

	// Button Text Control
	$wp_customize->add_control('banner_btn_text', array(
		'label'			=> __('Button Text', 'corporate_theme'),
		'section'		=> 'banner',
		'priority'		=> 20
	));

	// Button URL Setting
	$wp_customize->add_setting('banner_btn_url', array(
		'default'		=> _x('http://test.com', 'corporate_theme'),
		'type'			=> 'theme_mod'
	));

	// Button URL Control
	$wp_customize->add_control('banner_btn_url', array(
		'label'			=> __('Button URL', 'corporate_theme'),
		'section'		=> 'banner',
		'priority'		=> 20
	));

	// Background Image Setting
	$wp_customize->add_setting('banner_image', array(
		'default'		=> get_bloginfo('template_directory').'/img/office.jpg',
		'type'			=> 'theme_mod'
	));

	// Background Image Control
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
			'label'	=> __('Background Image', 'corporate_theme'),
			'section'	=> 'banner',
			'settings'	=> 'banner_image'
	)));


	// Boxes Section
   $wp_customize->add_section('boxes', array(
		'title'          => __('Boxes', 'business'),
		'description'    => sprintf( __('Options for homepage boxes', 'business')
		),
		'priority'       => 130,
 	));

   // BOX 1

	// Box 1 Heading Setting
	$wp_customize->add_setting( 'box1_heading', array(
		'default'   => _x('Box 1 Heading', 'corporate_theme'),
		'type'      => 'theme_mod'
	));

	// Box 1 Heading Control
	$wp_customize->add_control( 'box1_heading', array(
		'label'    => __('Box 1 Heading', 'corporate_theme'),
		'section'  => 'boxes',
		'priority' => 20,
	));

    // Box 1 Text Setting
 	$wp_customize->add_setting( 'box1_text', array(
 		'default'              => _x('Integer at dolor mi. Ut neque ex, sollicitudin nec commodo nec, suscipit vel metus.', 'corporate_theme'),
 		'type'                 => 'theme_mod'
 	));

 	// Box 1 Text Control
 	$wp_customize->add_control( 'box1_text', array(
 		'label'    => __('Box 1 Text', 'corporate_theme'),
 		'section'  => 'boxes',
 		'priority' => 20,
 	));

    // Box 1 Icon Setting
 	$wp_customize->add_setting( 'box1_icon', array(
 		'default'              => _x('bar-chart', 'corporate_theme'),
 		'type'                 => 'theme_mod'
 	));

 	// Box 1 Icon Control
 	$wp_customize->add_control( 'box1_icon', array(
 		'label'    => __('Box 1 Icon', 'corporate_theme'),
 		'section'  => 'boxes',
 		'priority' => 20,
 	));

 	// BOX 2


 	// Box 2 Heading Setting
 	$wp_customize->add_setting( 'box2_heading', array(
 		'default'              => _x('Box 2 Heading', 'corporate_theme'),
 		'type'                 => 'theme_mod'
 	));

 	// Box 2 Heading Control
 	$wp_customize->add_control( 'box2_heading', array(
 		'label'    => __('Box 2 Heading', 'corporate_theme'),
 		'section'  => 'boxes',
 		'priority' => 20,
 	));

    // Box 2 Text Setting
 	$wp_customize->add_setting( 'box2_text', array(
 		'default'              => _x('Integer at dolor mi. Ut neque ex, sollicitudin nec commodo nec, suscipit vel metus.', 'corporate_theme'),
 		'type'                 => 'theme_mod'
 	));

 	// Box 2 Text Control
 	$wp_customize->add_control( 'box2_text', array(
 		'label'    => __('Box 2 Text', 'corporate_theme'),
 		'section'  => 'boxes',
 		'priority' => 20,
 	));

    // Box 2 Icon Setting
	$wp_customize->add_setting( 'box2_icon', array(
		'default'              => _x('code', 'corporate_theme'),
		'type'                 => 'theme_mod'
	));

	// Box 2 Icon Control
	$wp_customize->add_control( 'box2_icon', array(
		'label'    => __('Box 2 Icon', 'corporate_theme'),
		'section'  => 'boxes',
		'priority' => 20,
	));

	// BOX 3

	// Box 3 Heading Setting
	$wp_customize->add_setting( 'box3_heading', array(
		'default'              => _x('Box 3 Heading', 'corporate_theme'),
		'type'                 => 'theme_mod'
	));

	// Box 3 Heading Control
	$wp_customize->add_control( 'box3_heading', array(
		'label'    => __('Box 3 Heading', 'corporate_theme'),
		'section'  => 'boxes',
		'priority' => 20,
	));

    // Box 3 Text Setting
	$wp_customize->add_setting( 'box3_text', array(
		'default'              => _x('Integer at dolor mi. Ut neque ex, sollicitudin nec commodo nec, suscipit vel metus.', 'corporate_theme'),
		'type'                 => 'theme_mod'
	));

	// Box 3 Text Control
	$wp_customize->add_control( 'box3_text', array(
		'label'    => __('Box 3 Text', 'corporate_theme'),
		'section'  => 'boxes',
		'priority' => 20,
	));

    // Box 3 Icon Setting
	$wp_customize->add_setting( 'box3_icon', array(
		'default'              => _x('desktop', 'corporate_theme'),
		'type'                 => 'theme_mod'
	));

	// Box 3 Icon Control
	$wp_customize->add_control( 'box3_icon', array(
		'label'    => __('Box 3 Icon', 'corporate_theme'),
		'section'  => 'boxes',
		'priority' => 20,
	));

}

add_action('customize_register', 'business_customize_register');
