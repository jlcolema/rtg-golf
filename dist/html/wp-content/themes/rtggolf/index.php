<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage RTG_Golf
 * @since RTG Golf 1.0
 */

get_header();

?>

	<?php /* List of Posts */ ?>

	<div class="posts">

		<div class="posts__inner-wrap">

			<div class="posts__list">

				<?php

					$post_listing_options = array(

						'post_type'		=> 'post',
						'post_status'	=> 'publish',
						'numberposts'	=> -1,
						'orderby'		=> 'menu_order',
						'order'			=> 'ASC'

					);

					$posts = get_posts( $post_listing_options );

				?>

				<?php foreach ( $posts as $post ) : ?>

					<?php

						/* Thumbnail
						------------------------------*/

						// Attachment

						$partner_photo_attachment_id = get_field( 'partner_photo', $partner->ID );

						// Size (use Small, Medium, Large, and Full)

						$partner_photo_size_full = 'full';

						// Options

						$partner_photo_full = wp_get_attachment_image_src( $partner_photo_attachment_id, $partner_photo_size_full );

						// Fields

						$post_featured_image = get_field( 'post_featured_image', $post->ID );

						$post_title = get_field( 'post_title', $post->ID );

						$post_excerpt = get_field( 'post_excerpt', $post->ID );

					?>

					<article class="posts__item h-entry">

						<picture class="posts__picture">

							<source srcset="<?php echo $post_featured_image; ?>" media="(min-width: 1000px)">

							<source srcset="<?php echo $post_featured_image; ?>" media="(min-width: 700px)">

							<img src="<?php echo $post_featured_image; ?>" alt="A very nice description." class="posts__img">

						</picture>

						<h1 class="posts__title">
							
							<a href="<?php the_permalink(); ?>" class="posts__link"><?php echo $post->post_title; ?></a>
						
						</h1>

						<footer class="posts__footer">

							<time datetime="" class="posts__time"><?php echo get_the_date( 'F j, Y' ); ?></time>

						</footer>

						<div class="posts__excerpt">

							<?php echo $post_excerpt; ?>

						</div>

						<div class="posts__more">

							<a href="<?php the_permalink(); ?>" class="posts__more-link">Read More</a>

						</div>

					</article>

				<?php endforeach; ?>

			</div>

			<div class="posts__navigation">

				<?php /* Posts Navigation */ ?>

			</div>

		</div>

	</div>

<?php get_footer();
