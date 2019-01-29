<?php
    //Template Name: Reviews
    wp_enqueue_style('reviews', get_stylesheet_directory_uri().'/css/review.css?vn='.THEME_VERSION, array(), true);
    wp_enqueue_script('script', get_stylesheet_directory_uri().'/js/script.js?vn='.THEME_VERSION, array('jquery'), true);
    global $post;
    $header_image = get_field('header_image', $post->ID, true);
    $page_title = get_field('title', $post->ID, true);
    $page_desc= get_field('description', $post->ID, true);
?>

<?php get_header(); ?>
<?php include_once ('includes/menu.php');?>

<?php include_once ('includes/about.php');?>

<section class="header" style="background-image: url('<?php echo $header_image; ?>');">
    <div class="title">
        <?php echo $page_title; ?>
    </div>
</section>

<section class="review">
    <?php if( have_rows('reviews') ): ?>
        <?php while( have_rows('reviews') ): the_row();
            $description = get_sub_field('description');
            $title = get_sub_field('title');
            ?>
            <div>
                <p><?php echo $description; ?>
                <strong><?php echo $title; ?></strong>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>

