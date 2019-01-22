<?php
    //Template Name: Duaton HP
    wp_enqueue_style('home-page', get_stylesheet_directory_uri().'/css/home.css?vn='.THEME_VERSION, array(), true);
?>

<?php get_header(); ?>


<div class="gallery">
    <?php if( have_rows('gallery') ): ?>
        <?php while( have_rows('gallery') ): the_row(); // vars
            $image = get_sub_field('image');
            $url = get_sub_field('url');
            $class = get_sub_field('class');
            ?>
            <a href="<?php echo $url;?>" class="<?php echo $class;?>">
                <img src="<?php echo $image?>" alt="">
            </a>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
