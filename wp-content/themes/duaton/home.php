<?php
    //Template Name: Duaton HP
    wp_enqueue_style('home-page', get_stylesheet_directory_uri().'/css/home.css?vn='.THEME_VERSION, array(), true);
?>

<?php get_header(); ?>


<div class="gallery">
    <?php if( have_rows('row') ): ?>
        <?php while( have_rows('row') ): the_row(); ?>
            <div class="row">
                <?php if( have_rows('gallery') ): ?>
                    <?php while( have_rows('gallery') ): the_row(); // vars
                        $image = get_sub_field('image');
                        $class = get_sub_field('class');
                        ?>
                        
                        <div class="<?php echo $class; ?>" style="background-image: url('<?php echo $image; ?>');">
                            <?php if($class == 'wide logo') { ?>
                                <a href="javascript:void(0);">
                                    <img src="<?php echo get_stylesheet_directory_uri().'/images/logo_big.png'; ?>" alt="duaton logo"/>
                                </a>
                            <?php }?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<section class="icons">
    <ul>
        <li>
            <h3>עיצוב מצגות<span>בפוורפוינט</span></h3>
            <?php include_once ('images/icon1.svg');?>
        </li>
        <li>
            <h3>חוזרים לבית ספר<span>עיצוב תיקים ומוצרי נייר</span></h3>
            <?php include_once ('images/icon2.svg');?>
        </li>
        <li>
            <h3>עיצוב תערוכות<span>ונקודות מכירה</span></h3>
            <?php include_once ('images/icon3.svg');?>
        </li>
        <li>
            <h3> אפיון <span>ועיצוב אתרים</span></h3>
            <?php include_once ('images/icon4.svg');?>
        </li>
        <li>
            <h3>מיזוג<span>וזהות תאגידית</span></h3>
            <?php include_once ('images/icon5.svg');?>
        </li>
        <li>
            <h3>תכנון<span>ועיצוב מארזים</span></h3>
            <?php include_once ('images/icon6.svg');?>
        </li>
    </ul>

</section>

<?php get_footer(); ?>
