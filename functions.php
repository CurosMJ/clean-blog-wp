<?php
add_theme_support('custom-header',array(
	'default-image' => get_template_directory_uri().'/img/home-bg.jpg',
	'width'=>1900,
	'height'=>872,
	'uploads' => true));

add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 1900, 872, true);

add_theme_support( 'title-tag' );

register_nav_menu('primary', 'Header Menu');

function cleanblog_customize_register( $wpCustomize )
{
	//Header Color
	$wpCustomize->add_setting('header_color', array(
		'default' => '#333'
		));
	$wpCustomize->add_control( new WP_Customize_Color_Control( 
		$wpCustomize, 
		'header_color', 
		array(
			'label'      => 'Header Color',
			'section' => 'header_image',
			'settings'   => 'header_color',
			'priority' => 0,
		)
	));

	//Social Media Links
	$wpCustomize->add_section('sns_links',array(
		'title' => 'Social Links'
		));
	
	$sns = array(
		'fb_link' => 'Facebook Link',
		'twitter_link' => 'Twitter Link',
		'gh_link' => 'GitHub Link',
		'gplus_link' => 'Google+ Link');

	foreach ( $sns as $id => $label)
	{
		$wpCustomize->add_setting($id, array(
		'default' => ''
		));
		$wpCustomize->add_control( new WP_Customize_Control( 
		$wpCustomize, 
		$id, 
		array(
			'label'      => $label,
			'section' => 'sns_links',
			'settings'   => $id,
		)
		));
	}
}

add_action( 'customize_register', 'cleanblog_customize_register' );
?>
