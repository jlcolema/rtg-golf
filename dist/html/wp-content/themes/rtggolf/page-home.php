<?php get_header(); ?>

	<?php /* Featured Destinations */ ?>

	<div class="featured-destinations">

		<div class="featured-destinations__inner-wrap">

			<div class="featured-destinations__title-one">

				<div class="featured-destinations__title">RTG Golf</div>

				<h2 class="featured-destinations__header">From concept to completion <u>and every detail in between</u></h2>

			</div>

			<div class="featured-destinations__title-two">

				<?php

					$featured_destinations = get_field( 'featured_destinations' );

				?>

				<?php if ( $featured_destinations ) : ?>

					<ul class="featured-destinations__list">

						<?php foreach( $featured_destinations as $featured_destination ) : ?>

							<?php

								$featured_destination_title = get_the_title( $featured_destination->ID );

								$featured_destination_link = get_permalink( $featured_destination->ID );

							?>

							<li class="featured-destinations__item">

								<picture class="featured-destinations__picture">

									<source srcset="https://via.placeholder.com/400x400" media="(min-width: 1000px)">

									<source srcset="https://via.placeholder.com/400x400" media="(min-width: 700px)">

									<img src="https://via.placeholder.com/400x400" alt="A very nice description." class="featured-destinations__img">

								</picture>

								<h3 class="featured-destinations__location">
									
									<a href="<?php echo $featured_destination_link; ?>" class="featured-destinations__link"><?php echo $featured_destination_title; ?></a>
								
								</h3>

								<div class="featured-destinations__details">

									<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus nostrum, vero nulla a nisi maiores minima est maxime quod tenetur excepturi et ratione ea illo. Ipsa laudantium fuga vero voluptatum!</p>

								</div>

								<div class="featured-destinations__more">

									<a href="<?php echo $featured_destination_link; ?>" class="featured-destinations__more-link">Learn More</a>

								</div>

							</li>

						<?php endforeach; ?>

					</ul>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>