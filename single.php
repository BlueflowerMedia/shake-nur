<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blueflowedmedia
 */

get_header();
?>

<section id="blogpost">
	<div class="container-blog">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			//the_post_navigation();

			// Store the post category
			$post_cat_id = get_the_category()[0]->term_id;

		endwhile; // End of the loop.
		?>
	</div>
</section>

<!-- Related posts -->
<section id="related-posts">
	<div class="container-blog">
		<h3>Related Posts</h3>
		<div class="related-posts flex-row">
		<?php
		$args = array(
			'cat' => $post_cat_id,
			'posts_per_page' => 3
		);

		$query = new WP_Query($args);
		if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="related-post">
				<div class="related-post-thumb">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<div class="related-post-content">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</section>
<!-- Related posts -->





<?php
//get_sidebar();
get_footer();
