<?php get_header(); ?>

	<?php /* List of Destinations */ ?>

	<?php $destinations = get_field( 'destinations' ); ?>

	<?php if ( $destinations ) : ?>

		<div class="destinations">

			<div class="inner-wrap destinations__inner-wrap">

				<?php if ( $destinations[ 'destinations_list' ] ) : ?>

					<ul class="destinations__list">

						<?php foreach( $destinations[ 'destinations_list' ] as $post ) : ?>

							<?php setup_postdata( $post ); ?>

							<?php

								$destination_preview = get_field( 'destination_preview' );
								
							?>

							<li class="destinations__item">

								<picture class="destinations__picture">

									<source srcset="<?php echo $destination_preview['destination_preview_image']; ?>" media="(min-width: 1000px)">

									<source srcset="<?php echo $destination_preview['destination_preview_image']; ?>" media="(min-width: 700px)">

									<img src="<?php echo $destination_preview['destination_preview_image']; ?>" alt="A very nice description." class="destinations__img">

								</picture>

								<div class="destinations__overlay">

									<h2 class="destinations__title"><?php the_title(); ?></h2>

									<div class="destinations__detail">
										
										<?php echo $destination_preview['destinations_preview_short_description']; ?>

									</div>

									<div class="destinations__more">

										<a href="<?php the_permalink(); ?>" class="destinations__link">Learn More</a>

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