<?php

//Header logo customizer
function theme_logo_customizer( $wp_customize ) {
	$wp_customize->add_section( 'theme_logo_section' , array(
		'title'       => __( 'Logo', 'theme' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the header',
		) 
	);

	$wp_customize->add_setting( 'theme_logo' );


	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_logo', array(
		'label'    => __( 'Logo', 'theme' ),
		'section'  => 'theme_logo_section',
		'settings' => 'theme_logo',
		) 
	) 
	);

}
add_action( 'customize_register', 'theme_logo_customizer' );

?>