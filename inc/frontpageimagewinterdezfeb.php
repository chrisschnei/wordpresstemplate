<?php

//Favicon logo customizer
function theme_frontpageimagewinterdezfeb_customizer( $wp_customize ) {
	$wp_customize->add_section( 'theme_frontpageimagewinterdezfeb_section' , array(
		'title'       => __( 'Image frontpage winter Dez - Feb', 'theme' ),
		'priority'    => 32,
		'description' => 'Chosen image will be displayed on front page.',
		) 
	);

	$wp_customize->add_setting( 'theme_frontpageimagewinterdezfeb' );


	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_frontpageimagewinterdezfeb', array(
		'label'    => __( 'Image frontpage winter december february', 'theme' ),
		'section'  => 'theme_frontpageimagewinterdezfeb_section',
		'settings' => 'theme_frontpageimagewinterdezfeb',
		) 
	)
	);

}
add_action( 'customize_register', 'theme_frontpageimagewinterdezfeb_customizer' );

?>
