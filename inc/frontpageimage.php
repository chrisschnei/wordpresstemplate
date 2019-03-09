<?php

//Favicon logo customizer
function theme_frontpageimage_customizer( $wp_customize ) {
	$wp_customize->add_section( 'theme_frontpageimage_section' , array(
		'title'       => __( 'Image frontpage', 'theme' ),
		'priority'    => 32,
		'description' => 'Chosen image will be displayed on front page.',
		) 
	);

	$wp_customize->add_setting( 'theme_frontpageimage' );


	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_frontpageimage', array(
		'label'    => __( 'Image frontpage', 'theme' ),
		'section'  => 'theme_frontpageimage_section',
		'settings' => 'theme_frontpageimage',
		) 
	)
	);

}
add_action( 'customize_register', 'theme_frontpageimage_customizer' );

?>