<div class="banner">

	<div class="banner__inner-wrap">

		<h1 class="banner__title">
		
			<?php if ( is_singular( 'trip' ) ) : ?>

				Favorite Trips

			<?php elseif ( is_singular( 'destination' ) ) :?>

				Destinations

			<?php elseif ( ! is_front_page() && is_home() OR is_single() ) : ?>

				Blog

			<?php else : ?>

				<?php the_title(); ?>
		
			<?php endif; ?>

		</h1>

		<picture class="banner__picture">

			<source srcset="<?php the_field( 'banner_default_image', 'option' ); ?>" media="(min-width: 1000px)">

			<source srcset="<?php the_field( 'banner_default_image', 'option' ); ?>" media="(min-width: 700px)">

			<img src="<?php the_field( 'banner_default_image', 'option' ); ?>" alt="A very nice description." class="banner__img">

		</picture>

	</div>

</div>