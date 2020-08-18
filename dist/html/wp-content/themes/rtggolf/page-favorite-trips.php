<?php get_header(); ?>

	<?php /* Favorite Trips */ ?>

	<div class="favorite-trips">

		<div class="inner-wrap favorite-trips__inner-wrap">

			<ul class="favorite-trips__list">

				<?php

					$trip_listing_options = array(

						'post_type'		=> 'trip',
						'post_status'	=> 'publish',
						'numberposts'	=> -1,
						'orderby'		=> 'menu_order',
						'order'			=> 'ASC'

					);

					$trips = get_posts( $trip_listing_options );

				?>

				<?php foreach ( $trips as $trip ) : ?>

					<?php

						/* Thumbnail
						------------------------------*/

						// Attachment

						$trip_thumbnail_attachment_id = get_field( 'trip_thumbnail', $trip->ID );

						// Size

						$trip_thumbnail_size_full = 'full';

						// Options

						$trip_thumbnail_full = wp_get_attachment_image_src( $trip_thumbnail_attachment_id, $trip_thumbnail_size_full );

					?>

					<li class="favorite-trips__item">

						<picture class="favorite-trips__picture">

							<source srcset="https://via.placeholder.com/960x400" media="(min-width: 1000px)">

							<source srcset="https://via.placeholder.com/9600x400" media="(min-width: 700px)">

							<img src="https://via.placeholder.com/960x400" alt="A very nice description." class="favorite-trips__img">

						</picture>

						<div class="favorite-trips__overlay">

							<h2 class="favorite-trips__title"><?php echo $trip->post_title; ?></h2>

							<div class="favorite-trips__more">

								<a href="<?php echo get_permalink( $trip->ID ); ?>" class="favorite-trips__link">Learn More</a>

							</div>

						</div>

					</li>

				<?php endforeach; ?>

			</ul>

		</div>

	</div>

<?php get_footer(); ?>