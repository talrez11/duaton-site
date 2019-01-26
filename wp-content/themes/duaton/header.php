<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
	if(!is_mobile()) {
		wp_enqueue_style('header', get_stylesheet_directory_uri().'/css/header.css?vn='.THEME_VERSION, array(), true);
	} else {
		wp_enqueue_style('header', get_stylesheet_directory_uri().'/css/header_mobile.css?vn='.THEME_VERSION, array(), true);
	}
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Alef:400,700&amp;subset=hebrew" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

		<header>
            <div class="top">
                <a class="logo" href="/">
                    <img src="<?php echo get_stylesheet_directory_uri().'/images/logo_big.png'; ?>" alt="duaton logo"/>
                </a>
                <a href="javascript:void(0)" id="menu"><span></span></a>
            </div>

            <?php
            wp_nav_menu( array(
                    'theme_location' => 'Main Navigation',
                    'item_spacing' => 'discard'
                )
            );
            ?>
        </header><!-- .site-header -->
