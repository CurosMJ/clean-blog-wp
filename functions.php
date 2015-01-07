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
function cleanblog_custom_css()
{
	$headerImage = get_header_image();
	$headerColor = get_theme_mod('header_color','#333');
    ?>
         <style type="text/css">
             #header 
             { 
             	<?php if($headerImage == ''): ?>
         			background-color: <?php echo $headerColor; ?>;
         		<?php else: ?>
         			background-image: url('<?php echo $headerImage; ?>');
         		<?php endif; ?>
             }
         </style>
    <?php
}
function cleanblog_customize_register( $wpCustomize )
{
	$wpCustomize->add_setting('header_color', array(
		'default' => '#333'
		));
	$wpCustomize->add_control( new WP_Customize_Color_Control( 
	$wpCustomize, 
	'header_color', 
	array(
		'label'      => __( 'Header Color', 'cleanblog' ),
		'section' => 'header_image',
		'settings'   => 'header_color',
		'priority' => 0,
	)
));
}

add_action( 'customize_register', 'cleanblog_customize_register' );
add_action( 'wp_head', 'cleanblog_custom_css');
?>
