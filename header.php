<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
    <?php
    if( is_single() && has_post_thumbnail() )
    {
        $headerImage = get_the_post_thumbnail();
        $matches = null;
        preg_match('/src=[\'"](?P<url>[^\'"]*)[\'"]/',$headerImage,$matches);
        $headerImage = $matches['url'];
    }
    else
        $headerImage = get_header_image();
    $headerColor = get_theme_mod('header_color','#333');
    if(is_admin_bar_showing()):
    ?>
    .navbar-custom
    {
        top:32px;
    }
    .navbar-custom.is-fixed
    {
        top:-29px;
    }
    <?php endif; ?>
    #header 
    { 
        <?php if($headerImage == ''): ?>
            background-color: <?php echo $headerColor; ?>;
        <?php else: ?>
            background-image: url('<?php echo $headerImage; ?>');
        <?php endif; ?>
    }
    .pager.next
    {
        float:right;
    }
    .pager.prev
    {
        float:right;
    }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name') ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'before' => "<li>",
                        'after' => '</li>'));
                    ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <?php
    if ( is_single() )
    {
        the_post();
        $heading = get_the_title();
        $headingClass = 'post-heading';
    }
    else if ( is_page() )
    {
        the_post();
        $heading = get_the_title();
        $headingClass = 'page-heading';
    }
    else
    {
        $heading = get_bloginfo('name');
        $desc = get_bloginfo('description');
        $headingClass = 'site-heading';
    }
    ?>
    <header class="intro-header" id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="<?php echo $headingClass; ?>">
                        <h1><?php echo $heading ?></h1>
                        <?php if ( ! is_single() ): ?>
                            <hr class="small">
                            <span class="subheading"><?php if( ! is_page() ) echo $desc; ?></span>
                        <?php endif;?>
                        <?php if ( is_single() ): ?>
                        <span class="meta">Posted by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a> on <?php the_time( get_option( 'date-format' ) ); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
