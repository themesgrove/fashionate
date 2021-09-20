<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fashionate
 */

$post_formats = array('audio', 'image', 'video', 'link', 'gallery');

?>

<div class="single-blog">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">
                <?php
            		// Must be inside a loop.	
            		if (!in_array(get_post_format(), $post_formats)):?>
            			<?php if ( has_post_thumbnail() ):?>			
            		    <div class="single-thumbnail"> 
            				<?php the_post_thumbnail(); ?>
            			</div>
                	<?php 
                        endif;
                        endif;
                    ?>
                <div class="shadow-box">
                    <div class="entry-header">
                        <?php

                        the_title('<h2 class="entry-title tx-title">', '</h2>');

                        if ('post' === get_post_type()) : ?>
                            <div class="entry-meta">
                                <?php fashionate_posted_on(); ?>
                            </div><!-- .entry-meta -->
                            <?php
                        endif; ?>
                    </div><!-- .entry-header -->

                    <div class="details-content">
                        <?php
                            the_content();

                        ?>
                    </div>
                    <?php 
                        wp_link_pages( array(
                            'before'      => '<div class="page-links">' . __( 'Pages:', 'fashionate' ),
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                        ) );
                    ?>
                </div>
            </div>
        </article>
    </div>

