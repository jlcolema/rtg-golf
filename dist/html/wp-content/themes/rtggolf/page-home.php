<?php get_header(); ?>

	<?php /* Featured Destinations */ ?>

	<?php $featured_destinations = get_field( 'featured_destinations' ); ?>

	<?php if ( $featured_destinations ) : ?>

		<div class="featured-destinations">

			<div class="featured-destinations__inner-wrap">

				<div class="featured-destinations__title-one">

					<div class="featured-destinations__title"><?php echo $featured_destinations[ 'featured_destinations_header' ]; ?></div>

					<h2 class="featured-destinations__header"><?php echo $featured_destinations[ 'featured_destinations_subheader' ]; ?></u></h2>

				</div>

				<div class="featured-destinations__title-two">

					<?php if ( $featured_destinations[ 'featured_destinations_list' ] ) : ?>

						<ul class="featured-destinations__list">

							<?php foreach( $featured_destinations[ 'featured_destinations_list' ] as $post ) : ?>

								<?php setup_postdata( $post ); ?>

								<?php

									$destination_featured = get_field( 'destination_featured' );

								?>

								<li class="featured-destinations__item">

									<picture class="featured-destinations__picture">

										<source srcset="<?php echo $destination_featured['destination_featured_image']; ?>" media="(min-width: 1000px)">

										<source srcset="<?php echo $destination_featured['destination_featured_image']; ?>" media="(min-width: 700px)">

										<img src="<?php echo $destination_featured['destination_featured_image']; ?>" alt="A very nice description." class="featured-destinations__img">

									</picture>

									<h3 class="featured-destinations__location">

										<a href="<?php the_permalink(); ?>" class="featured-destinations__link"><?php the_title(); ?></a>

									</h3>

									<div class="featured-destinations__details">

										<?php echo $destination_featured['destination_featured_summary']; ?>

									</div>

									<div class="featured-destinations__more">

										<a href="" class="featured-destinations__more-link">Learn More</a>

									</div>

								</li>

							<?php endforeach; ?>

							<?php wp_reset_postdata(); ?>

						</ul>

					<?php endif; ?>

				</div>

				<div class="featured-destinations__title-three">

					<div class="featured-destinations__learn-more">

						<a href="<?php echo $featured_destinations[ 'featured_destinations_link' ]; ?>" class="featured-destinations__learn-more-link">Learn More</a>

					</div>

				</div>
					
			</div>

		</div>

	<?php endif; ?>

<?php get_footer(); ?>