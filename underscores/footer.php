<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer  screen-x-padding">
		<div class="site-info">
		</div><!-- .site-info -->
		<div id="footer-1">
			<?php
			if(is_active_sidebar('footer-1')) {
				dynamic_sidebar('footer-1');
			} ?>
		</div>
		<div>
			&copy; <?php echo date("Y") . " "; bloginfo( 'name' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
