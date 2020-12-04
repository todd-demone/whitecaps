<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oakville_Whitecaps
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header-page">
		<div class="entry-header__container">
			<?php the_title( '<h1 class="entry-title-page">', '</h1>' ); ?>
			<hr class="entry-hr-page">
			<p class="entry-subheading">Oakville Whitecaps Baseball</p>
		</div>
	</header><!-- .entry-header-page -->
	<div class="container-800">
		<?php oakville_whitecaps_post_thumbnail(); ?>
		<div class="entry-content">
			<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'oakville-whitecaps' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'oakville-whitecaps' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</div><!-- container-800 -->
</article><!-- #post-<?php the_ID(); ?> -->
