<?php

//Favicon logo customizer
function theme_favicon_customizer( $wp_customize ) {
	$wp_customize->add_section( 'theme_favicon_section' , array(
		'title'       => __( 'Favicon', 'theme' ),
		'priority'    => 32,
		'description' => 'Choose favicon as tabpicture.',
		) 
	);

	$wp_customize->add_setting( 'theme_favicon' );


	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_favicon', array(
		'label'    => __( 'Favicon', 'theme' ),
		'section'  => 'theme_favicon_section',
		'settings' => 'theme_favicon',
		) 
	)
	);

}
add_action( 'customize_register', 'theme_favicon_customizer' );

?>