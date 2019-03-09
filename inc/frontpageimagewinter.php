<?php

//Favicon logo customizer
function theme_frontpageimagewinter_customizer( $wp_customize ) {
	$wp_customize->add_section( 'theme_frontpageimagewinter_section' , array(
		'title'       => __( 'Image frontpage winter', 'theme' ),
		'priority'    => 32,
		'description' => 'Chosen image will be displayed on front page.',
		) 
	);

	$wp_customize->add_setting( 'theme_frontpageimagewinter' );


	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_frontpageimagewinter', array(
		'label'    => __( 'Image frontpage winter', 'theme' ),
		'section'  => 'theme_frontpageimagewinter_section',
		'settings' => 'theme_frontpageimagewinter',
		) 
	)
	);

}
add_action( 'customize_register', 'theme_frontpageimagewinter_customizer' );

?>