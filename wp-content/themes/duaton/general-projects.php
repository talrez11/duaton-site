<?php
//Template Name: General Projects
    wp_enqueue_style('home-page', get_stylesheet_directory_uri().'/css/general.css?vn='.THEME_VERSION, array(), true);
    wp_enqueue_script('script', get_stylesheet_directory_uri().'/js/script.js?vn='.THEME_VERSION, array('jquery'), true);
?>

<?php get_header(); ?>
<div class="menu">
    <ul id="menu-main-menu">
        <li>
            <a href="javascript:void(0);">אודות
                <?php include ('images/icon_round.svg');?>
            </a>
        </li>
        <li>
            <a href="/פרוייקטים/">עבודות
                <?php include ('images/icon_round.svg');?>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);">הצוות
                <?php include ('images/icon_round.svg');?>
            </a>
        </li>
        <li>
            <a href="#bottom">צרו איתנו קשר
                <?php include ('images/icon_round.svg');?>
            </a>
        </li>
    </ul>
</div>
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


