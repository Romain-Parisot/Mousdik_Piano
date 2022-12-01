<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mousdik
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
			<div class="entry-meta">
				
			</div><!-- .entry-meta -->
		
	</header><!-- .entry-header -->

	<?php mousdik_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mousdik' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
