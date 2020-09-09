<?php get_header(); ?>

	<!-- Overview -->

	<?php $destination_overview = get_field( 'destination_overview' ); ?>

	<?php if ( $destination_overview ) : ?>

		<div class="destination__overview">

			<div class="inner-wrap destination__overview-inner-wrap">

				<h2 class="destination__overview-header"><?php echo $destination_overview['destination_overview_header']; ?></h2>

				<h3 class="destination__overview-subheader"><?php echo $destination_overview['destination_overview_subheader']; ?></h3>

				<div class="destination__overview-description">

					<?php echo $destination_overview['destination_overview_content']; ?>

				</div>

			</div>

		</div>

	<?php endif; ?>

	<!-- Locations -->

	<?php $destination_locations = get_field( 'destination_locations' ); ?>

	<?php if ( have_rows( 'destination_locations' ) ) : ?>

		<?php while ( have_rows( 'destination_locations' ) ) : the_row(); ?>

			<div class="destination__locations">

				<div class="inner-wrap destination__locations-inner-wrap">

					<h2 class="destination__locations-header"><?php echo $destination_locations['destination_locations_header']; ?></h2>

					<h3 class="destination__locations-subheader"><?php echo $destination_locations['destination_locations_subheader']; ?></h3>

					<?php if ( have_rows( 'destination_locations_list' ) ) : ?>

						<ul class="destination__locations-list">

							<?php while ( have_rows( 'destination_locations_list' ) ) : the_row(); ?>

								<li class="destination__locations-item">

									<picture class="destination__locations-picture">

										<source srcset="<?php the_sub_field( 'destination_locations_image' ); ?>" media="(min-width: 1000px)">

										<source srcset="<?php the_sub_field( 'destination_locations_image' ); ?>" media="(min-width: 700px)">

										<img src="<?php the_sub_field( 'destination_locations_image' ); ?>" alt="A very nice description." class="destination__locations-img">

									</picture>

									<div class="destination__locations-overlay">

										<h2 class="destination__locations-title"><?php the_sub_field( 'destination_locations_title' ); ?></h2>

										<div class="destination__locations-detail">

											<?php the_sub_field( 'destination_locations_short_description' ); ?>

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