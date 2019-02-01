<?php
//Template Name: Project
wp_enqueue_style('project-style', get_stylesheet_directory_uri().'/css/project.css?vn='.THEME_VERSION, array(), true);
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

<?php if(!empty($page_desc)) { ?>
    <section class="content">
        <div>
            <?php echo $page_desc; ?>
        </div>
    </section>
<?php } ?>

<section class="project">
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
                                    ?>
                                    <a href="<?php echo $url; ?>" class="<?php echo $class; ?>" style="background-image: url('<?php echo $image; ?>');"></a>
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


