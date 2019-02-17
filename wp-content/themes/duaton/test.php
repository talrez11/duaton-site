<?php
//Template Name: test
wp_enqueue_style('project-style', get_stylesheet_directory_uri().'/css/project.css?vn='.THEME_VERSION, array(), true);
wp_enqueue_script('script', get_stylesheet_directory_uri().'/js/script.js?vn='.THEME_VERSION, array('jquery'), true);
global $post;
//$header_image = get_field('header_image', $post->ID, true);
//$page_desc= get_field('description', $post->ID, true);

?>
<?php if ( post_password_required( $post ) ) {
    echo get_the_password_form( $post );
    die();
}?>
<?php get_header(); ?>**


this is hidden
**
<?php get_footer(); ?>


