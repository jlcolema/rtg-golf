<?php get_header(); ?>

	<?php /* List of Destinations */ ?>

	<div class="destinations">

		<div class="inner-wrap destinations__inner-wrap">

			<ul class="destinations__list">

				<?php

					$destination_listing_options = array(

						'post_type'		=> 'destination',
						'post_status'	=> 'publish',
						'numberposts'	=> -1,
						'orderby'		=> 'menu_order',
						'order'			=> 'ASC'

					);

					$destinations = get_posts( $destination_listing_options );

				?>

				<?php foreach ( $destinations as $destination ) : ?>

				<?php

					/* Thumbnail
					------------------------------*/

					// Attachment

					$destination_preview_image_attachment_id = get_field( 'destination_preview_image', $destination->ID );

					// Size

					$destination_preview_image_size_full = 'full';

					// Options

					$destination_preview_image_full = wp_get_attachment_image_src( $destination_preview_image_attachment_id, $destination_preview_image_size_full );

				?>

				<li class="destinations__item">

					<picture class="destinations__picture">

						<source srcset="<?php echo $destination_preview_image_full[0]; ?>" media="(min-width: 1000px)">

						<source srcset="<?php echo $destination_preview_image_full[0]; ?>" media="(min-width: 700px)">

						<img src="<?php echo $destination_preview_image_full[0]; ?>" alt="A very nice description." class="destinations__img">

					</picture>

					<div class="destinations__overlay">

						<h2 class="destinations__title"><?php echo $destination->post_title; ?></h2>

						<div class="destinations__more">

							<a href="<?php echo get_permalink( $destination->ID ); ?>" class="destinations__link">Learn More</a>

						</div>

					</div>

				</li>

				<?php endforeach; ?>

			</ul>

		</div>

	</div>

<?php get_footer(); ?>