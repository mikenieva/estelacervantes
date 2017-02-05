<?php
/**
 * The template for displaying Comments.
 *
 * @package Sela
 */

if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">
	<div class="fb-comments" data-href="<?php echo site_url(); ?>" data-numposts="100" data-width="100%"></div>
</div><!-- #comments -->
