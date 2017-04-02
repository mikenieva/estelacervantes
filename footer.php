<?php
/**
 * The template for displaying the footer.
 *
 * @package Sela
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer">
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>
		<div>
			<a target="_blank" href="https://www.facebook.com/Estela-Cervantes-1689197484736503/" style="color: white;"><i class="fa fa-facebook-square fa-2x" aria-hidden="true" style="padding-right: 10px;"></i></a>
			<a target="_blank" href="https://instagram.com/estelacervants" style="color: white;"><i class="fa fa-instagram fa-2x" aria-hidden="true" style="padding-right: 10px;"></i></a>
			<a target="_blank" href="https://www.pinterest.com/estelacervantes/" style="color: white;"><i class="fa fa-pinterest fa-2x" aria-hidden="true" style="padding-right: 10px;"></i></a>
		</div>
		<br>
		<div class="site-info"  role="contentinfo">
			<a href="http://estelacervantes.com" title="Estela Cervantes" rel="generator">ESTELA CERVANTES</a>
			<span class="sep"> | </span>
			<a href="http://estelacervantes.com" title="Estela Cervantes" rel="generator">MY JOURNEY FROM SECRET AWESOME TO PUBLIC AWESOME</a>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
