<?php get_header(); ?>

	<?php /* Favorite Trips */ ?>

	<?php $favorite_trips = get_field( 'favorite_trips' ); ?>

	<?php if ( $favorite_trips ) : ?>

		<div class="favorite-trips">

			<div class="inner-wrap favorite-trips__inner-wrap">

				<?php if ( $favorite_trips[ 'favorite_trips_list' ] ) : ?>

					<ul class="favorite-trips__list">

						<?php foreach( $favorite_trips[ 'favorite_trips_list' ] as $post ) : ?>

							<?php setup_postdata( $post ); ?>

							<?php

								$trip_preview = get_field( 'trip_preview' );

							?>

							<li class="favorite-trips__item">

								<picture class="favorite-trips__picture">

									<source srcset="<?php echo $trip_preview['trip_preview_image']; ?>" media="(min-width: 1000px)">

									<source srcset="<?php echo $trip_preview['trip_preview_image']; ?>" media="(min-width: 700px)">

									<img src="<?php echo $trip_preview['trip_preview_image']; ?>" alt="A very nice description." class="favorite-trips__img">

								</picture>

								<div class="favorite-trips__overlay">

									<h2 class="favorite-trips__title"><?php the_title(); ?></h2>

									<div class="favorite-trips__detail">

										<?php echo $trip_preview['trip_preview_short_description']; ?>

									</div>

									<div class="favorite-trips__more">

										<a href="<?php the_permalink(); ?>" class="favorite-trips__link">Learn More</a>

									</div>

								</div>

							</li>

						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>

					</ul>

				<?php endif; ?>

			</div>

		</div>

	<?php endif; ?>

<?php get_footer(); ?>