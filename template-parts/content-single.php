<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oakville_Whitecaps
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container-800">
	<header class="entry-header-single">
		
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title-single">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title-single"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		oakville_whitecaps_post_thumbnail();

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta-single">
				<?php
				oakville_whitecaps_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php  ?>

	<div class="entry-content-single">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'oakville-whitecaps' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'oakville-whitecaps' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer-single">

			<?php oakville_whitecaps_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</div>
</article><!-- #post-<?php the_ID(); ?> -->
