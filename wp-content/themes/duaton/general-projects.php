<?php
//Template Name: General Projects
    wp_enqueue_style('general-projects', get_stylesheet_directory_uri().'/css/general.css?vn='.THEME_VERSION, array(), true);
    wp_enqueue_script('script', get_stylesheet_directory_uri().'/js/script.js?vn='.THEME_VERSION, array('jquery'), true);
?>

<?php get_header(); ?>
<?php include_once ('includes/menu.php');?>
<?php include_once ('includes/about.php');?>
<section>
    <?php if( have_rows('column') ): ?>
        <?php while( have_rows('column') ): the_row();?>
            <div class="<?php echo get_sub_field('class')?>">
                <?php if( have_rows('row') ): ?>
                    <?php while( have_rows('row') ): the_row(); $row_class = get_sub_field('row_class')?>
                        <div class="<?php echo $row_class; ?>">
                            <?php if( have_rows('gallery') ): ?>
                                <?php while( have_rows('gallery') ): the_row();
                                    $image = get_sub_field('image');
                                    $class = get_sub_field('class');
                                    $url = get_sub_field('url');
                                    $description = get_sub_field('description');
                                ?>
                                    <a href="<?php echo $url; ?>" class="<?php echo $class; ?>" style="background-image: url('<?php echo $image; ?>');">
                                        <?php if(!empty($description)) { ?>
                                            <div class="description">
                                                <span><?php echo $description; ?></span>
                                            </div>
                                        <?php } else { ?>
                                            <div class="description">
                                                <span class="project"> לפרוייקט &larr;</span>
                                            </div>
                                        <?php } ?>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>


