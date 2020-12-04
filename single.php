<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Oakville_Whitecaps
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
?>
<div class='oakville-whitecaps-news-container'>
	<h1 class="oakville-whitecaps-news"> Oakville Whitecaps News</h1>
</div>
<?php
			get_template_part( 'template-parts/content', 'single' );
?>
		<div class="post-navigation-outer">
		<div class="container-for-post-navigation">
		
			<div><?php previous_post_link( ' &laquo; Previous post: %link', '%title', true ); ?>  </div>
			<div><?php next_post_link( 'Next post: %link &raquo;', '%title', true ); ?></div>
<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
