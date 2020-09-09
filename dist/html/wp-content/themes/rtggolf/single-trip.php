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

					<h3 class="trip__itinerary-subheader"><?php echo $trip_itinerary[ 'trip_itinerary_subheader' ]; ?></h3>

					<div class="trip__itinerary-description">

						<?php echo $trip_itinerary[ 'trip_itinerary_content' ]; ?>

					</div>

				</div>

			</div>

		</div>

	<?php endif; ?>

	<!-- Locations -->

	<div class="trip__locations">

		<div class="inner-wrap trip__locations-inner-wrap">

			<h2 class="trip__locations-header">What's not to like...</h2>

			<h3 class="trip__locations-subheader">Seven Rounds of World Class Golf. Seven Nights on the Emerald Isle.</h3>

			<ul class="trip__locations-list">

				<li class="trip__locations-item">

					<picture class="trip__locations-picture">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 1000px)">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 700px)">

						<img src="https://via.placeholder.com/960x400" alt="A very nice description." class="trip__locations-img">

					</picture>

					<div class="trip__locations-overlay">

						<h2 class="trip__locations-title">Sandy Hills</h2>

						<div class="trip__locations-detail">



						</div>

					</div>
					
				</li>

				<li class="trip__locations-item">

					<picture class="trip__locations-picture">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 1000px)">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 700px)">

						<img src="https://via.placeholder.com/960x400" alt="A very nice description." class="trip__locations-img">

					</picture>

					<div class="trip__locations-overlay">

						<h2 class="trip__locations-title">Portsalon</h2>

						<div class="trip__locations-detail">

							<p>One of Ireland's best "hidden gems"</p>

						</div>

					</div>
					
				</li>
				
				<li class="trip__locations-item">

					<picture class="trip__locations-picture">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 1000px)">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 700px)">

						<img src="https://via.placeholder.com/960x400" alt="A very nice description." class="trip__locations-img">

					</picture>

					<div class="trip__locations-overlay">

						<h2 class="trip__locations-title">Ballyliffin</h2>

						<div class="trip__locations-detail">

							<p>Site of 2017 Irish Open</p>

						</div>

					</div>
					
				</li>

				<li class="trip__locations-item">

					<picture class="trip__locations-picture">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 1000px)">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 700px)">

						<img src="https://via.placeholder.com/960x400" alt="A very nice description." class="trip__locations-img">

					</picture>

					<div class="trip__locations-overlay">

						<h2 class="trip__locations-title">Portstewart</h2>

						<div class="trip__locations-detail">

							<p>Site of 2018 and 2021 Irish Open</p>

						</div>

					</div>
					
				</li>

				<li class="trip__locations-item">

					<picture class="trip__locations-picture">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 1000px)">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 700px)">

						<img src="https://via.placeholder.com/960x400" alt="A very nice description." class="trip__locations-img">

					</picture>

					<div class="trip__locations-overlay">

						<h2 class="trip__locations-title">Royal Portrush</h2>

						<div class="trip__locations-detail">

							Site of the 2019 Open Championship
							7th in the World -- Golf Digest
							13th in the World, 2nd in Ireland -- Golf.com

						</div>

					</div>
					
				</li>
			
				<li class="trip__locations-item">

					<picture class="trip__locations-picture">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 1000px)">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 700px)">

						<img src="https://via.placeholder.com/960x400" alt="A very nice description." class="trip__locations-img">

					</picture>

					<div class="trip__locations-overlay">

						<h2 class="trip__locations-title">Ardglass</h2>

						<div class="trip__locations-detail">

							<p>Ardglass has grown out of the "hidden gem" category, taking its place among the "must plays" in Ireland.</p>

						</div>

					</div>
					
				</li>			

				<li class="trip__locations-item">

					<picture class="trip__locations-picture">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 1000px)">

						<source srcset="https://via.placeholder.com/960x400" media="(min-width: 700px)">

						<img src="https://via.placeholder.com/960x400" alt="A very nice description." class="trip__locations-img">

					</picture>

					<div class="trip__locations-overlay">

						<h2 class="trip__locations-title">Royal County Down</h2>

						<div class="trip__locations-detail">

							1st in the World -- Golf Digest
							6th in the World -- Golf.com

						</div>

					</div>
					
				</li>				

			</ul>

		</div>

	</div>

<?php get_footer(); ?>