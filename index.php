<?php
/**
 * Home / Blog Page Template
 */

get_header();

?>

<section id="">

	<div class="container">

		<?php
		/**
		 * The loop. Check if we have posts and display them.
		 */
		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'content' );

			endwhile;

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

	</div>
</section>

<?php get_footer(); ?>