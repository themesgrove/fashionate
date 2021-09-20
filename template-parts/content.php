<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fashionate
 */

?>
<div class="list-blog">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content">
                <?php if (has_post_thumbnail()): ?>
                    <div class="post-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                   <?php if ( is_sticky() && is_home() && ! is_paged() ): ?>
                          <div class="triangle">
                              <span><i class="icon fa fa-heart"></i></span>
                          </div>
                    <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="shadow-box">
                    <div class="entry-header">
                        <?php

                        the_title('<h2 class="entry-title tx-title"><a class="tx-link" href="' . esc_url(get_permalink()) . '" >', '</a></h2>');

                        if ('post' === get_post_type()) : ?>
                            <div class="entry-meta">
                                <?php fashionate_posted_on(); ?>
                            </div><!-- .entry-meta -->
                            <?php
                        endif; ?>
                    </div><!-- .entry-header -->
                    <div class="blog-content">
                        <?php
                            the_excerpt();
                        ?>

                    <?php 
                        wp_link_pages( array(
                            'before'      => '<div class="page-links">' . __( 'Pages:', 'fashionate' ),
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                        ) );
                    ?>

                        <div class="post-link pull-left">
                            <a class="tx-link read-more btn" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'fashionate');?></a>

                        </div><!--end of post-link-->

                        <div class="edit">  
                            <?php
                                edit_post_link(
                                    sprintf(
                                        /* translators: %s: Name of current post */
                                        esc_html__( 'Edit %s', 'fashionate' ),
                                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                    ),
                                    '<span class="edit-link">',
                                    '</span>'
                                );
                            ?>
                        </div>
                    </div>
                </div>


        </div><!-- .entry-content -->


    </article><!-- #post-## -->

</div>
