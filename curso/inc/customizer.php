<?php 

function wpcurso_customizer( $wp_customize ){

	// Copyright

	$wp_customize->add_section(
		'sec_copyright', array(
			'title' => __( 'Copyright', 'wpcurso' ),
			'description' => __( 'Copyright Section', 'wpcurso' )
		)
	);


	$wp_customize->add_setting(
		'set_copyright', array(
			'type' => 'theme_mod',
			'default' => __( 'Copyright x - All rights reserved', 'wpcurso' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);


	$wp_customize->add_control(
		'set_copyright', array(
			'label' => __( 'Copyright', 'wpcurso' ),
			'description' => __( 'Choose wether to show the Services section or not', 'wpcurso' ),
			'section' => 'sec_copyright',
			'type' => 'text'
		)
	);

	// Map

	$wp_customize->add_section(
		'sec_map', array(
			'title' => __( 'Map', 'wpcurso' ),
			'description' => __( 'Map Section', 'wpcurso' )
		)
	);

	// Map - API Key

	$wp_customize->add_setting(
		'set_map_apikey', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_map_apikey', array(
			'label' => __( 'API Key', 'wpcurso' ),
			'description' => sprintf( 
				__( 'Get your key <a target="_blank" href="%s">here</a>', 'wpcurso' ),
				'https://console.developers.google.com/flows/enableapi?apiid=maps_backend'
				),
			'section' => 'sec_map',
			'type' => 'text'
		)
	);

	// Map - Address

	$wp_customize->add_setting(
		'set_map_address', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'esc_textarea'
		)
	);

	$wp_customize->add_control(
		'set_map_address', array(
			'label' => __( 'Type your address here', 'wpcurso' ),
			'description' => __( 'No special characters allowed', 'wpcurso' ),
			'section' => 'sec_map',
			'type' => 'textarea'
		)
	);

	// Slider

	$wp_customize->add_section(
		'sec_slider', array(
			'title' => __( 'Slider', 'wpcurso' ),
			'description' => __( 'Slider Section', 'wpcurso' )
		)
	);

	// Slider - Design

	$wp_customize->add_setting(
		'set_slider_option', array(
			'type' => 'theme_mod',
			'default' => '1',
			'sanitize_callback' => 'theme_slug_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_slider_option', array(
			'label' => __( 'Choose your design type here', 'wpcurso' ),
			'description' => __( 'Choose your design type', 'wpcurso' ),
			'section' => 'sec_slider',
			'type' => 'select',
			'choices' => array(
				'1' => __( 'Design Type 1', 'wpcurso' ),
				'2' => __( 'Design Type 2', 'wpcurso' ),
				'3' => __( 'Design Type 3', 'wpcurso' ),
				'4' => __( 'Design Type 4', 'wpcurso' )
			)
		)
	);

	// Slider - Limit

	$wp_customize->add_setting(
		'set_slider_limit', array(
			'type' => 'theme_mod',
			'default' => '5',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_slider_limit', array(
			'label' => __( 'Number of posts to display', 'wpcurso' ),
			'description' => __( 'Choose the number of posts to be displayed', 'wpcurso' ),
			'section' => 'sec_slider',
			'type' => 'number'
		)
	);

	// Posts Loop

	$wp_customize->add_section(
		'sec_posts_loop', array(
			'title' => __( 'Posts Loop', 'wpcurso' ),
			'description' => __( 'Posts Loop Section', 'wpcurso' )
		)
	);

	// Posts Loop - First Loop - Posts per Loop

	$wp_customize->add_setting(
		'set_loop1_number_posts', array(
			'type' => 'theme_mod',
			'default' => '1',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_loop1_number_posts', array(
			'label' => __( 'First Loop: Posts per Loop', 'wpcurso' ),
			'description' => __( 'Choose how many posts to show per loop', 'wpcurso' ),
			'section' => 'sec_posts_loop',
			'type' => 'number'
		)
	);

	// Posts Loop - First Loop - Shown Categories

	$wp_customize->add_setting(
		'set_loop1_shown_categories', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_loop1_shown_categories', array(
			'label' => __( 'First Loop: Shown Categories', 'wpcurso' ),
			'description' => __( 'Enter here (separated by commas) the categories ID to be shown. Special characters are not allowed. Example: 1,2,3', 'wpcurso' ),
			'section' => 'sec_posts_loop',
			'type' => 'text'
		)
	);

	// Posts Loop - Second Loop - Posts per Loop

	$wp_customize->add_setting(
		'set_loop2_number_posts', array(
			'type' => 'theme_mod',
			'default' => '2',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_loop2_number_posts', array(
			'label' => __( 'Second Loop: Posts per Loop', 'wpcurso' ),
			'description' => __( 'Choose how many posts to show per loop', 'wpcurso' ),
			'section' => 'sec_posts_loop',
			'type' => 'number'
		)
	);	

	// Posts Loop - Second Loop - Shown Categories

	$wp_customize->add_setting(
		'set_loop2_shown_categories', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_loop2_shown_categories', array(
			'label' => __( 'Second Loop: Shown Categories', 'wpcurso' ),
			'description' => __( 'Enter here (separated by commas) the categories ID to be shown. Special characters are not allowed. Example: 1,2,3', 'wpcurso' ),
			'section' => 'sec_posts_loop',
			'type' => 'text'
		)
	);

	// Posts Loop - Second Loop - Hidden Categories

	$wp_customize->add_setting(
		'set_loop2_hidden_categories', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_loop2_hidden_categories', array(
			'label' => __( 'Second Loop: Hidden Categories', 'wpcurso' ),
			'description' => __( 'Enter here (separated by commas) the categories ID to be hidden. Special characters are not allowed. Example: 1,2,3', 'wpcurso' ),
			'section' => 'sec_posts_loop',
			'type' => 'text'
		)
	);

}

add_action( 'customize_register', 'wpcurso_customizer' );

function theme_slug_sanitize_select( $input, $setting ){
  
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                      
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
      
}