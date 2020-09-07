<div class="hero">

	<div class="hero__inner-wrap">

		<?php

			$hero = get_field( 'hero' );

		?>

		<?php if ( $hero ) : ?>

			<div class="hero__cta">

				<div class="hero__label">RTG Golf</div>

				<h1 class="hero__header"><?php echo $hero['hero_header']; ?></h1>

				<div class="hero__details">

					<p><?php echo $hero['hero_subheader']; ?></p>

				</div>

				<div class="hero__more">

					<a href="<?php echo $hero['hero_link']; ?>" class="hero__link">Learn More</a>

				</div>

			</div>

			<div class="hero__provider">

				<span class="">St. Andrews Links Authorized Provider</span>

			</div>

			<picture class="hero__picture">

				<source srcset="<?php echo $hero['hero_image']; ?>" media="(min-width: 1000px)">

				<source srcset="<?php echo $hero['hero_image']; ?>" media="(min-width: 700px)">

				<img src="<?php echo $hero['hero_image']; ?>" alt="A very nice description." class="hero__img">

			</picture>

		<?php endif; ?>

	</div>

</div>