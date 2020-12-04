<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oakville_Whitecaps
 */

?>

	</div><!-- #content -->


	<footer id="colophon" class="site-footer">
		<div class="container-1200 footer-flex">
			
			<div class="footer-flex-column contact-stuff">
				<div><a href="email:whitecapdirector@gmail.com">whitecapdirector@gmail.com</a></div>
				<div><a href="tel:1-905-827-1831">905-827-1831</a></div>
				<div>Oakville Little League<br>425 Cornwall Road<br>Oakville, Ontario, Canada<br>L6J 7S8</div>
			</div>
	
			<div class="site-info">
				<div>&copy; 2020 <a href="http://oakvillelittleleague.com">Oakville Little League</a> | All Rights Reserved</div>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'oakville-whitecaps' ), 'All-Star', '<a href="http://todddemone.com/">Todd Demone</a>' );
				?>
			</div>
		
			<div class="footer-flex-column social-stuff">
				<div>
					<a href="https://twitter.com/oakville_llb" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
				</div>
				<div>
					<a href="https://www.facebook.com/pages/Oakville-Little-League-Baseball/118235944887859" target="blank"><i class="fab fa-facebook fa-2x"></i></a>
				</div>
				<div>
					<a href="https://www.instagram.com/explore/locations/276522508/oakville-little-league-baseball/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
				</div>
				
			</div>
		
		</div>
	</footer>

</div><!-- #page -->


<?php wp_footer(); ?>


</body>
</html>
