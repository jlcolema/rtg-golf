<?php get_header(); ?>

	<!-- Overview -->

	<?php $trip_overview = get_field( 'trip_overview' ); ?>

	<?php if ( $trip_overview ) : ?>

		<div class="trip__overview">

			<div class="inner-wrap trip__overview-inner-wrap">

				<h2 class="trip__overview-header"><?php echo $trip_overview[ 'trip_overview_header' ]; ?></h2>

				<h3 class="trip__overview-subheader"><?php echo $trip_overview[ 'trip_overview_subheader' ]; ?></h3>

				<div class="trip__overview-description">

					<?php echo $trip_overview[ 'trip_overview_content' ]; ?>

				</div>

			</div>

		</div>

	<?php endif; ?>

	<!-- Travefy -->

	<?php $trip_travefy = get_field( 'trip_travefy' ); ?>

	<?php if ( $trip_travefy ) : ?>

		<div class="trip__travefy">

			<div class="inner-wrap trip__travefy-inner-wrap">

				<!-- Use unique ID for content entry -->

				<!-- <iframe src="https://travefy.com/trip/6yw9rqt2mbmwqz2auy7m5xw4932dpfq" class="trip__travefy-iframe"></iframe> -->

				<!-- Use the following... -->

				<div data-travefy-itinerary-id="<?php echo $trip_travefy[ 'trip_travefy_id' ]; ?>" class="travefy-itinerary travefy__itinerary"></div>

				<!-- Add this script to pages that have the data-travefy-itinerary-id code above -->

				<script data-version="v0" id="travefy-itinerary-embedder" type="text/javascript"> (function () { function l() { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//travefy.com/embed/itinerary.1.0.js'; var e = document.getElementById('travefy-itinerary-embedder'); e.parentNode.insertBefore(s, e); } if (window.attachEvent) { window.attachEvent('onload', l); } else { window.addEventListener('load', l, false); } })(); </script>

			</div>

		</div>

	<?php endif; ?>

	<!-- Itenerary -->

	<?php $trip_itinerary = get_field( 'trip_itinerary' ); ?>

	<?php if ( $trip_itinerary ) : ?>

		<div class="trip__itinerary">

			<div class="inner-wrap trip__itinerary-inner-wrap">

				<div class="trip__itinerary-image">

					<picture class="trip__itinerary-picture">

						<source srcset="<?php echo $trip_itinerary[ 'trip_itinerary_image' ]; ?>" media="(min-width: 1000px)">

						<source srcset="<?php echo $trip_itinerary[ 'trip_itinerary_image' ]; ?>" media="(min-width: 700px)">

						<img src="<?php echo $trip_itinerary[ 'trip_itinerary_image' ]; ?>" alt="A very nice description." class="trip__itinerary-img">

					</picture>

				</div>

				<div class="trip__itinerary-detail">

					<h2 class="trip__itinerary-header"><?php echo $trip_itinerary[ 'trip_itinerary_header' ]; ?></h2>

					<h3 class="trip__itinerary-subheader">Itinerary</h3>

					<div class="trip__itinerary-description">

						<?php echo $trip_itinerary[ 'trip_itinerary_content' ]; ?>

					</div>

				</div>

			</div>

		</div>

	<?php endif; ?>

	<!-- Locations -->

	<?php $trip_locations = get_field( 'trip_locations' ); ?>

	<?php if ( have_rows( 'trip_locations' ) ) : ?>

		<?php while ( have_rows( 'trip_locations' ) ) : the_row(); ?>

			<div class="trip__locations">

				<div class="inner-wrap trip__locations-inner-wrap">

					<h2 class="trip__locations-header"><?php echo $trip_locations[ 'trip_locations_header' ]; ?></h2>

					<h3 class="trip__locations-subheader"><?php echo $trip_locations[ 'trip_locations_subheader' ]; ?></h3>

					<?php if ( have_rows( 'trip_locations_list' ) ) : ?>

						<ul class="trip__locations-list">

							<?php while ( have_rows( 'trip_locations_list' ) ) : the_row(); ?>

								<li class="trip__locations-item">

									<picture class="trip__locations-picture">

										<source srcset="<?php the_sub_field( 'trip_locations_image' ); ?>" media="(min-width: 1000px)">

										<source srcset="<?php the_sub_field( 'trip_locations_image' ); ?>" media="(min-width: 700px)">

										<img src="<?php the_sub_field( 'trip_locations_image' ); ?>" alt="A very nice description." class="trip__locations-img">

									</picture>

									<div class="trip__locations-overlay">

										<h2 class="trip__locations-title"><?php the_sub_field( 'trip_locations_title' ); ?></h2>

										<div class="trip__locations-detail">

											<?php the_sub_field( 'trip_locations_short_description' ); ?>

										</div>

									</div>
									
								</li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</div>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>

<?php get_footer(); ?>