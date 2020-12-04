<?php
/**
 * Template part for displaying front-page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oakville_Whitecaps
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header-page">
        <div class="entry-header__container">
            <?php the_title( '<h1 class="entry-title-page jumbo-h1">', '</h1>' ); ?>
            <hr class="entry-hr-page">
            <p class="entry-subheading">Oakville Little League's <br>All-Star Program</p>
        </div><!-- .entry-header-container -->
    </header><!-- .entry-header-page -->
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
    
    <div class="teampages">
        <h2>Team Pages</h2>
        <p>For workout dates, tournament schedules and other team-specific information, please visit one of the following team pages:</p>
        <div class="teampages-row">
			<div class="teampages-col">
				<a href="<?php echo get_permalink( get_page_by_path('7u-team/', OBJECT, 'page')); ?>"><?php echo get_the_title(get_page_by_path('7u-team/', OBJECT, 'page')); ?></a>
				<p>Manager:<br>tbd</p>
				<a href="<?php echo get_permalink( get_page_by_path('7u-team')); ?>">Learn More</a>
			</div>
			<div class="teampages-col">
                <a href="<?php echo get_permalink( get_page_by_path('8u-team/', OBJECT, 'page')); ?>"><?php echo get_the_title(get_page_by_path('8u-team/', OBJECT, 'page')); ?></a>
				<p>Manager:<br>tbd</p>
				<a href="<?php echo get_permalink( get_page_by_path('8u-team')); ?>">Learn More</a>
			</div>
			<div class="teampages-col">
                <a href="<?php echo get_permalink( get_page_by_path('9u-team/', OBJECT, 'page')); ?>"><?php echo get_the_title(get_page_by_path('9u-team/', OBJECT, 'page')); ?></a>
				<p>Manager:<br>tbd</p>
				<a href="<?php echo get_permalink( get_page_by_path('9u-team')); ?>">Learn More</a>
			</div>
			<div class="teampages-col">
                <a href="<?php echo get_permalink( get_page_by_path('10u-team/', OBJECT, 'page')); ?>"><?php echo get_the_title(get_page_by_path('10u-team/', OBJECT, 'page')); ?></a>
				<p>Manager:<br>tbd</p>
				<a href="<?php echo get_permalink( get_page_by_path('10u-team')); ?>">Learn More</a>
            </div>
            <div class="teampages-col">
            <a href="<?php echo get_permalink( get_page_by_path('11u-team/', OBJECT, 'page')); ?>"><?php echo get_the_title(get_page_by_path('11u-team/', OBJECT, 'page')); ?></a>
				<p>Manager:<br>tbd</p>
				<a href="<?php echo get_permalink( get_page_by_path('11u-team')); ?>">Learn More</a>
			</div>
			<div class="teampages-col">
            <a href="<?php echo get_permalink( get_page_by_path('12u-team/', OBJECT, 'page')); ?>"><?php echo get_the_title(get_page_by_path('12u-team/', OBJECT, 'page')); ?></a>
				<p>Manager:<br>tbd</p>
				<a href="<?php echo get_permalink( get_page_by_path('12u-team')); ?>">Learn More</a>
			</div>
			<div class="teampages-col">
            <a href="<?php echo get_permalink( get_page_by_path('14u-team/', OBJECT, 'page')); ?>"><?php echo get_the_title(get_page_by_path('14u-team/', OBJECT, 'page')); ?></a>
				<p>Manager:<br>tbd</p>
				<a href="<?php echo get_permalink( get_page_by_path('14u-team')); ?>">Learn More</a>
			</div>
			<div class="teampages-col">
            <a href="<?php echo get_permalink( get_page_by_path('14u-team2/', OBJECT, 'page')); ?>"><?php echo get_the_title(get_page_by_path('14u-team2/', OBJECT, 'page')); ?></a>
				<p>Manager:<br>tbd</p>
				<a href="<?php echo get_permalink( get_page_by_path('14u-team2')); ?>">Learn More</a>
			</div>
        </div>
        
    </div>

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
</article><!-- #post-<?php the_ID(); ?> -->
