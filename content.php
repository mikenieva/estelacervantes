<?php
/**
 * @package Sela
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php sela_post_thumbnail(); ?>

	<header class="entry-header ">
		<?php if ( is_single() ) : ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( '<h1 class="entry-title"><a href=" ' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-body">

		<?php if ( 'post' == get_post_type() ) : ?>

		<div class="entry-meta">
			<?php sela_entry_meta(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="<?php echo site_url(); ?>">Share</a></div>
		<br>
		<br>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sela' ) ); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'sela' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<?php if ( is_single() && 'post' == get_post_type() ) : ?>
		<footer class="entry-meta">
			<?php sela_footer_entry_meta(); ?>
		</footer><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-body -->

</article><!-- #post-## -->
