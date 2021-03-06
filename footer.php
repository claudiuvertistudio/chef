<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Chef
 */
?>

	</div><!-- #content -->

	<?php echo $GLOBALS['chef_svg_up']; ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="container">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'chef' ) ); ?>" rel="nofollow"><?php printf( __( 'Proudly powered by %s', 'chef' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %2$s by %1$s.', 'chef' ), 'JustFreeThemes', '<a href="http://justfreethemes.com/chef" rel="nofollow">Chef</a>' ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
