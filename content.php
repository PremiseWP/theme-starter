<?php 
/**
 * Content Template
 *
 * @package [level 1]\[level 2]\[etc.]
 */

?>

<article <?php post_class( '' ); ?>>
	
	<?php if ( has_post_thumbnail() ) : ?>

		<div class="post-thumbnail">
			<?php the_post_thumbnail( '' ); ?>
		</div>

	<?php endif; ?>

	<div class="post-content">
		<?php the_content(); ?>
	</div>
	
</article>