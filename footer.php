<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
			<hr>
			<div id="about" class="row-fluid">
				<div class="span3">
					<h4>About Codemasala</h4>
					<p>Codemasala is the site aimed at webdevelopers.It's started by <a href="http://twitter.com/rajat1saxena">Rajat Saxena</a> in 2012.</p>
				</div>
			</div>
			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<span class="site_generator">Copyright (c) 2012 - Rajat Saxena</span>
				<span class="site_generator">Built with <a href="http://twitter.github.com/bootstrap/">Bootstrap</a></span>
				<span class="site_generator">Based on <a href="http://theme.wordpress.com/themes/twentyeleven/">TwentyEleven</a></span>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>