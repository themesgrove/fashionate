<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fashionate
 */

get_header(); ?>

<?php if (is_front_page()): ?>
    <div class="container tx-sticky-part">
        <div class="row selected-cat">
                <div class="home-sticky">
            
            <div class="col-sm-12 col-md-6 ">
                <div class="sticky-slide">
                    <?php
                    echo fashionate_latest_sticky();
                    ?>
                </div>
                
            </div>
            <div class="col-sm-12 col-md-6 tx-sticky-description">


                <h2 class="tx-home-description tx-title"><?php echo esc_html(get_bloginfo('description')); ?></h2>

            </div>
        </div>

            <?php 
                
                $left_cat = get_category_by_slug(get_theme_mod('left_cat'));
                if($left_cat):

            ?>
            <div class="col-md-4 col-sm-12">
                <a class="tx-link" href="<?php echo esc_url(get_category_link($left_cat->term_id)); ?>">

                    <div class="tx-cat-details">
                        <span class="label label-primary">
                             <?php echo  esc_html($left_cat->name); ?>
                        </span>

                        <h5 class="tx-home-description tx-title"><?php echo esc_html($left_cat->description); ?></h5>
                    </div>
               
                </a>
            </div>

            <?php 
                endif;
                $center_cat = get_category_by_slug(get_theme_mod('center_cat'));
                if($center_cat):
            ?>
            <div class="col-md-4 col-sm-12">
                <a class="tx-link" href="<?php echo esc_url(get_category_link($center_cat->term_id)); ?>">

                    <div class="tx-cat-details">
                        <span class="label label-primary">
                             <?php echo esc_html($center_cat->name); ?>
                        </span>

                        <h5 class="tx-home-description tx-title"><?php echo esc_html($center_cat->description); ?></h5>
                    </div>

                </a>
            </div>
            <?php endif; ?>

            <?php 
                $right_cat = get_category_by_slug(get_theme_mod('right_cat'));
                if($right_cat):
            ?>
            <div class="col-md-4 col-sm-12">
                <a class="tx-link" href="<?php echo esc_url(get_category_link($right_cat->term_id)); ?>">

                    <div class="tx-cat-details">
                        <span class="label label-primary">
                             <?php echo esc_html($right_cat->name); ?>
                        </span>

                        <h5 class="tx-home-description tx-title"><?php echo esc_html($right_cat->description); ?></h5>
                    </div>
                </a>
            </div>
            <?php endif; ?>




        </div><!--end of container-->

    </div>


<?php endif; ?>


<?php $sidebar_position = get_theme_mod('tx_sidebar', 'right'); ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="container tx-blog-section">
                <div class="row">
                    
                    <?php if ('left' == $sidebar_position): ?>
                        <div class="col-md-4">
                            <?php get_sidebar(); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ('no-sidebar' == $sidebar_position): ?>
                    <div class="col-md-12">
                        <?php else: ?>
                        <div class="col-md-8">
                            <?php endif; ?>
                            <?php
                            if (have_posts()) :

                                if (is_home() && !is_front_page()) : ?>


                                    <?php
                                endif;

                                /* Start the Loop */
                                while (have_posts()) : the_post();

                                    /*
                                     * Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part('template-parts/content', get_post_format());

                                endwhile;

                                ?>

                                <div class="pagination">
                                    <?php the_posts_pagination(); ?>
                                </div>


                                <?php


                            else :

                                get_template_part('template-parts/content', 'none');

                            endif; ?>
                        </div>
                        <?php if ('right' == $sidebar_position): ?>
                            <div class="col-md-4">
                                <?php get_sidebar(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();