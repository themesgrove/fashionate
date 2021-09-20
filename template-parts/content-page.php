<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fashionate
 */

?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
<style>
  .page header {
    background-image: url('<?php echo esc_url($image[0]); ?>');
  }
</style>
<?php endif; ?>

<article id="post-<?php the_ID(); ?>">
	<header class="entry-header shadow-box page-title">
		<?php the_title( '<h1 class="entry-title tx-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
<?php if (get_the_content()):?>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fashionate' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<?php endif; ?>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
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
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
